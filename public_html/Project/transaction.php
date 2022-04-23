<?php
require_once(__DIR__ . "/../../partials/nav.php");

is_logged_in(true);

$db = getDB();
$user_id = get_user_id();
$accounts = [];
try {
    $stmt = $db->prepare("SELECT id, account_number from accounts where user_id=:user_id order by modified desc");
    $r = $stmt->execute(['user_id' => $user_id]);
    if ($r) {
        $accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (\Throwable $th) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
//deposit/withdraw needs 1 dropdown
//transfer needs 2, but you can't transfer to the same account

if (isset($_REQUEST["type"])) {
    //get withdraw, deposit, transfer, etc
    $type = $_REQUEST["type"];
    if ($type === "withdraw") {
        //do withdraw
        if (isset($_POST['submit'])) {
            $amount = $_POST['change'];
            $account = $_POST['user_account'];
            $memo = $_POST['memo'];
            try {
                $success = withdraw($db, $account, $amount, $memo);
                if ($success)
                    flash('Withdraw successful', 'success');
            } catch (\Throwable $e) {
                $db->rollback();
                flash("<pre>" . var_export($e, true) . "</pre>");
            }
        }
        //user account to world
    } else if ($type === "deposit") {
        //do deposit
        if (isset($_POST['submit'])) {
            $amount = $_POST['change'];
            $account = $_POST['user_account'];
            $memo = $_POST['memo'];
            try {
                $success = deposit($db, $account, $amount, $memo);
                if ($success)
                    flash('Deposit successful', 'success');
            } catch (\Throwable $e) {
                $db->rollback();
                flash("<pre>" . var_export($e, true) . "</pre>");
            }
        }
        //world account to user
    } else if ($type === "transfer") {
        if (isset($_POST['submit'])) {
            $amount = $_POST['change'];
            $account = $_POST['user_account'];
            $from_account = $_POST['from_account'];
            $memo = $_POST['memo'];
            try {
                $success = transfer($db, $from_account, $account, $amount, $memo);
                if ($success)
                    flash('Transfer successful', 'success');
            } catch (\Throwable $e) {
                $db->rollback();
                flash("<pre>" . var_export($e, true) . "</pre>");
            }
        }
    }
    //refresh both affected account balances
}
?>
<h1>Transaction (<?php se($_GET, "type", "Not set"); ?>)</h1>
<form method="POST" onsubmit="return validate(this)">
    <?php if ($_GET['type'] == 'transfer') : ?>
        <div class="form-group col-md-3">
            <label for="user_account">From Account</label>
            <select class='form-control' name="from_account">
                <?php foreach ($accounts as $account) : ?>
                    <option value="<?php se($account, 'id'); ?>"><?php se($account, "account_number"); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    <?php endif ?>
    <div class="form-group col-md-3">
        <label for="user_account">Select Account</label>
        <select class='form-control' name="user_account">
            <?php foreach ($accounts as $account) : ?>
                <option value="<?php se($account, 'id'); ?>"><?php se($account, "account_number"); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group col-md-3">
        <label for="change">Amount</label>
        <input type="number" name="change" />
    </div>
    <div class="form-group col-md-3">
        <label for="change">Memo</label>
        <input type="text" name="memo" />
    </div>


    <input type="submit" name="submit" value="Save" class="btn btn-info" />
</form>
<script>
    function validate(form) {
        //ensure it returns false for an error and true for success
        let isValid = true;
        const account = form.user_account.value;
        const change = form.change.value;
        if (!account) {
            flash("Account is required", "danger");
            isValid = false;
        }
        if (!change || parseInt(change) < 1) {
            flash("Amount must be greater than 0", "danger");
            isValid = false;
        }
        return isValid;
    }
</script>
<?php require(__DIR__ . "/../../partials/flash.php");
?>