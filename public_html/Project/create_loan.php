<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$db = getDB();
$user_id = get_user_id();
$ayp = get_ayp($db, 'loan');
$accounts = [];
try {
    $stmt = $db->prepare("SELECT id, account_number from Accounts where user_id=:user_id 
    and is_active=1 
    and account_type <> 'loan'
     order by modified desc");
    $r = $stmt->execute(['user_id' => $user_id]);
    if ($r) {
        $accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (\Throwable $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
if (isset($_POST["deposit"])) {
    $deposit = se($_POST, "deposit", "", false);
    $user_account = se($_POST, "user_account", "", false);
    $hasError = false;
    if (empty($deposit)) {
        flash("Loan amount must not empty");
        $hasError = true;
    }
    if (((float)$deposit) < 500) {
        flash("Loan amount must be at least $500");
        $hasError = true;
    }
    if (!$hasError) {
        $db = getDB();
        try {
            create_loan($db, $deposit, $user_account);

            flash('Loan created successfully', 'success');
            die(header("Location: accounts.php"));
        } catch (\Throwable $e) {
            $db->rollBack();
            flash("<pre>" . var_export($e, true) . "</pre>");
        }
    }
}
?>

<div class="container">
    <h1>Create Loan</h1>
    <form onsubmit="return validate(this)" method="POST">
        <div class="form-group col-md-3">
            <label for="user_account">Select Account</label>
            <select class='form-control' name="user_account">
                <?php foreach ($accounts as $account) : ?>
                    <option <?php if (se($_POST, 'user_account', '', false) == se($account, 'id')) echo 'selected' ?> value="<?php se($account, 'id'); ?>"><?php se($account, "account_number"); ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group col-md-3">
            <label for="deposit">Loan Amount (Min. $500)</label>
            <input class='form-control' type="number" id='deposit' name="deposit" value="<?php echo isset($_POST["deposit"]) ? $_POST["deposit"] : ''  ?>" required />
        </div>
        <p>AYP: <?php echo $ayp ?> % per anum</p>
        <input type="submit" class="btn btn-info" value="Get Loan" />
    </form>
</div>


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
        if (!deposit || parseFloat(deposit) < 500) {
            flash("Invalid deposit amount. Deposit amount should be atleast $500", "danger");
            isValid = false;
        }
        return isValid;
    }
</script>


<?php
require(__DIR__ . "/../../partials/flash.php");
?>