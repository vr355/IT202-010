<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$results = [];
$account = null;
if (isset($_GET['id'])) {
    $db = getDB();
    $id = $_GET['id'];
    try {
        $stmt = $db->prepare("SELECT *
         from accounts 
         where id=:id");
        $r = $stmt->execute(['id' => $id]);
        if ($r) {
            $account = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($account) {
                $stmt = $db->prepare("SELECT a.account_number as 'src/dest'
                , transaction_type, memo, 
                balance_change, expected_total, t.modified
                 from Transactions t
                 join Accounts a on t.account_dest = a.id
                 where account_src=:id or (account_dest=:id and account_src <> -1 and transaction_type <> 'transfer')
                 order by modified desc limit 10");
                $r = $stmt->execute(['id' => $id]);
                if ($r) {
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
            } else {
                flash('Account does not exists', 'danger');
            }
        }
    } catch (\Throwable $e) {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
}

?>
<div class="container">
    <h1>Account History</h1>
    <?php if ($account) : ?>
        <p>Account Number: <strong><?php echo $account['account_number'] ?></strong></p>
        <p>Account Type: <strong><?php echo $account['account_type'] ?></strong></p>
        <p>Balance: <strong><?php echo $account['balance'] ?></strong></p>
        <p>Created at: <strong><?php echo $account['created'] ?></strong></p>
    <?php endif ?>
    <?php if (count($results) == 0) : ?>
        <p>No results to show</p>
    <?php else : ?>
        <table class="table">
            <?php foreach ($results as $index => $record) : ?>
                <?php if ($index == 0) : ?>
                    <thead>
                        <?php foreach ($record as $column => $value) : ?>
                            <th><?php se($column); ?></th>
                        <?php endforeach; ?>
                        <th>Actions</th>
                    </thead>
                <?php endif; ?>
                <tr>
                    <?php foreach ($record as $column => $value) : ?>
                        <td><?php se($value, null, "N/A"); ?></td>
                    <?php endforeach; ?>
                    <td>
                        <!-- other action buttons can go here-->
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <?php
    require_once(__DIR__ . "/../../partials/flash.php");
    ?>
</div>