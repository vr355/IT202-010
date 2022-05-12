<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$results = [];
$account = null;
if (isset($_GET['id'])) {
    $db = getDB();
    $id = $_GET['id'];
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $results_per_page = 10;
    $page_first_result = ($page - 1) * $results_per_page;

    //determine the total number of pages available  
    $number_of_page = ceil(getTotalResults($db,  $id) / $results_per_page);

    try {
        $stmt = $db->prepare("SELECT *
         from Accounts 
         where id=:id");
        $r = $stmt->execute(['id' => $id]);
        if ($r) {
            $account = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($account) {
                $stmt = $db->prepare("SELECT b.account_number as 'source', a.account_number as dest
                , transaction_type, memo, 
                balance_change, t.modified
                 from Transactions t
                 join Accounts a on t.account_src = a.id
                 join Accounts b on t.account_dest = b.id
                 where account_src=:id or account_dest=:id
                 order by modified desc limit $page_first_result, $results_per_page");
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

function getTotalResults($db, $id)
{
    $query = "SELECT b.account_number as 'source', a.account_number as dest
    , transaction_type, memo, 
    balance_change, t.modified
     from Transactions t
     join Accounts a on t.account_src = a.id
     join Accounts b on t.account_dest = b.id
     where account_src=:id or account_dest=:id
     order by modified desc";
    $stmt =   $db->prepare($query);
    $stmt->execute([
        'id' => $id
    ]);
    return $stmt->rowCount();
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
    <div>

        <ul class="pagination  justify-content-center">
            <?php if ($page >= 2) : ?>
                <li class="page-item"><a class="page-link" href="<?php echo "account_history.php?id=$id&page=" . ($page - 1) ?>">Previous</a></li>
            <?php endif ?>
            <?php for ($p = 0; $p < $number_of_page; $p++) : ?>
                <li class="page-item <?php echo $page == ($p + 1) ? 'active' : '' ?>"><a class="page-link" href="<?php echo "account_history.php?id=$id&page=" . ($p + 1) ?>"><?php echo ($p + 1) ?></a></li>
            <?php endfor; ?>
            <?php if ($page < $number_of_page) : ?>
                <li class="page-item"><a class="page-link" href="<?php echo "account_history.php?id=$id&page=" . ($page + 1) ?>">Next</a></li>
            <?php endif ?>
        </ul>
    </div>
    <?php
    require_once(__DIR__ . "/../../partials/flash.php");
    ?>
</div>