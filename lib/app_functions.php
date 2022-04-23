<?php
function getWorldAccount()
{
    return -1;
}

function update_balance($db, $account_id)
{
    $stmt = $db->prepare('UPDATE accounts SET balance = (SELECT sum(balance_change) FROM transactions where account_src=:id) 
    where id=:id');
    $stmt->execute([
        'id' => $account_id,
    ]);
}


function create_random_account_number($db)
{
    $exists = true;
    //create account
    do {
        $account_number = sprintf('%012d', rand(1, 999999999999));
        $stmt = $db->prepare("SELECT count(*) as count from accounts where account_number=:account_number");
        try {
            $r = $stmt->execute([":account_number" => $account_number]);
            if ($r) {
                $row = $stmt->fetch();
                $exists = !!$row['count'];
            }
        } catch (\Throwable $e) {
            flash("<pre>" . var_export($e, true) . "</pre>");
        }
    } while ($exists);

    return $account_number;
}


function addTransaction($db, $account_src, $account_dest, $amount, $memo = 'Test', $type = 'deposit')
{

    $stmt = $db->prepare("INSERT into transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total)
            values(:account_src, :account_dest, :balance_change, :transaction_type, :memo, 
            (ifnull((SELECT sum(t2.balance_change) from transactions t2 where t2.account_src = :account_src), 0) + balance_change))");
    $stmt->execute([
        'account_src' => $account_src,
        'account_dest' => $account_dest,
        'balance_change' => $amount,
        'transaction_type' => $type,
        'memo' => $memo,
    ]);

    update_balance($db, $account_src);
}

function create_account($db, $amount, $account_type = 'checking')
{
    $db->beginTransaction();
    $account_number = create_random_account_number($db);
    $stmt = $db->prepare('INSERT into accounts(account_number, user_id, balance, account_type) 
            values(:account_number, :user_id, :balance, :account_type)');
    $stmt->execute([
        'account_number' => $account_number,
        'user_id' => get_user_id(),
        'balance' => $amount,
        'account_type' => $account_type
    ]);

    $user_account = $db->lastInsertId();

    addTransaction($db, getWorldAccount(), $user_account, $amount * -1);
    addTransaction($db, $user_account, getWorldAccount(), $amount);
    $db->commit();
}
