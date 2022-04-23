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

function check_balance($db, $account_id)
{
    $stmt = $db->prepare('SELECT balance FROM accounts WHERE id = :id');
    $stmt->execute([
        'id' => $account_id
    ]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['balance'];
}

function withdraw($db, $user_account, $amount, $memo = 'Withdraw')
{
    $db->beginTransaction();
    $balance = (float)check_balance($db, $user_account);
    if (($balance - $amount) < 0) {
        flash("You don't have sufficient amount in this account. ", 'danger');
        return false;
    }

    addTransaction($db, $user_account, getWorldAccount(), ($amount * -1), $memo, 'withdraw');
    addTransaction($db,  getWorldAccount(), $user_account, $amount, $memo, 'withdraw');
    $db->commit();
    return true;
}


function deposit($db, $user_account, $amount, $memo)
{
    $db->beginTransaction();
    addTransaction($db, $user_account, getWorldAccount(), $amount, $memo);
    addTransaction($db,  getWorldAccount(), $user_account, $amount * -1, $memo);
    $db->commit();
    return true;
}

function transfer($db, $from_account, $to_account, $amount, $memo = 'Transfer')
{
    if ($from_account === $to_account) {
        flash("You cannot transfer to same accounts ", 'danger');
        return false;
    }
    $balance = (float)check_balance($db, $from_account);
    if (($balance - $amount) < 0) {
        flash("You don't have sufficient amount in this account. ", 'danger');
        return false;
    }
    $db->beginTransaction();
    addTransaction($db, $to_account, $from_account, $amount, $memo, 'Transfer');
    addTransaction($db,  $from_account, $to_account, $amount * -1, $memo, 'Transfer');
    $db->commit();
    return true;
}
