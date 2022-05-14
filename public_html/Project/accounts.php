<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$db = getDB();
$user_id = get_user_id();
$results = [];
try {
    $stmt = $db->prepare("SELECT id, account_number, account_type, is_active, abs(balance), 
    modified from Accounts where user_id=:user_id order by modified");
    $r = $stmt->execute(['user_id' => $user_id]);
    if ($r) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (\Throwable $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>

<?php
if (isset($_POST['close'])) {
    $account_id = $_POST['id'];
    try {
        $stmt = $db->prepare("SELECT id, account_number, account_type, abs(balance) as balance, 
        modified from Accounts where user_id=:user_id and id=:id and is_active=1 order by modified");
        $r = $stmt->execute(['user_id' => $user_id, 'id' => $account_id]);
        if ($r) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            print_r($result);
            if (!$result) {
                flash("Accont does not exists", "danger");
            } else if ($result && $result['balance'] != 0) {
                flash("Accont cannot be closed. Balance should be 0 in order to close account", "danger");
            } else if ($result && $result['balance'] == 0) {
                $stmt = $db->prepare("UPDATE Accounts SET is_active = '0' WHERE id=:id");
                $r = $stmt->execute(['id' => $account_id]);
                if ($r) {
                    flash("Account closed successfully", 'success');
                }
            }
        }
    } catch (\Throwable $e) {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
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
                    <div class="row">
                        <a class="col-md-2 me-2" href="<?php echo get_url('account_history.php?id=') . $record['id']; ?>">History</a>
                        <?php if ($record['is_active']) : ?>
                            <form method="post" class="col-md-2">
                                <input name="id" type="hidden" value="<?php echo $record['id'] ?>" />
                                <button name="close" type="submit">Close</button>
                            </form>
                        <?php endif ?>
                    </div>

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