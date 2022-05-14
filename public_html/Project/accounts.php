<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$db = getDB();
$user_id = get_user_id();
$results = [];
try {
    $stmt = $db->prepare("SELECT id, account_number, account_type, abs(balance), modified from Accounts where user_id=:user_id order by modified desc limit 5");
    $r = $stmt->execute(['user_id' => $user_id]);
    if ($r) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (\Throwable $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>

<?php if (count($results) == 0) : ?>
    <p>No results to show</p>
<?php else : ?>
    <table class="table">
        <?php foreach ($results as $index => $record) : ?>
            <?php if ($index == 0) : ?>
                <thead>
                    <?php foreach ($record as $column => $value) : ?>
                        <?php if ($column === 'id') continue; ?>
                        <th><?php se($column); ?></th>
                    <?php endforeach; ?>
                    <th>AYP</th>
                    <th>Actions</th>
                </thead>
            <?php endif; ?>
            <tr>
                <?php foreach ($record as $column => $value) : ?>
                    <?php if ($column === 'id') continue; ?>
                    <td><?php se($value, null, "N/A"); ?></td>
                <?php endforeach; ?>
                <td>-</td>
                <td>
                    <!-- other action buttons can go here-->
                    <a href="<?php echo get_url('account_history.php?id=') . $record['id']; ?>">History</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<?php
if (is_logged_in(true)) {
    //echo "Welcome home, " . get_username();
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
?>
<script>
    function validate(form) {
        //ensure it returns false for an error and true for success
        let isValid = true;
        const deposit = form.deposit.value;
        if (!deposit || parseFloat(deposit) < 5) {
            flash("Invalid deposit amount. Deposit amount should be atleast $5", "danger");
            isValid = false;
        }
        return isValid;
    }
</script>


<?php
require(__DIR__ . "/../../partials/flash.php");
?>