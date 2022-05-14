<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);

if (isset($_POST["deposit"])) {
    $deposit = se($_POST, "deposit", "", false);
    $account_type = se($_POST, "account_type", "", false);
    $hasError = false;
    if (empty($deposit)) {
        flash("Deposit must not empty <br>");
        $hasError = true;
    }
    if (((float)$deposit) < 5) {
        flash("Deposit must be at least $5 <br>");
        $hasError = true;
    }
    if (!$hasError) {
        $db = getDB();
        try {
            create_account($db, $deposit, $account_type);
            flash('Account created successfully', 'success');
            die(header("Location: accounts.php"));
        } catch (\Throwable $e) {
            $db->rollBack();
            flash("<pre>" . var_export($e, true) . "</pre>");
        }
    }
}
?>

<div class="container">
    <h1>Create Account</h1>
    <form onsubmit="return validate(this)" method="POST">
        <div class="form-group col-md-3">
            <label for="account_type">Account Type</label>
            <select class='form-control' name="account_type" id='account_type'>
                <option value='checking'>Checking</option>
                <option value='saving'>Saving</option>
            </select>
        </div>

        <div class="form-group col-md-3">
            <label for="deposit">Deposit (Min. $5)</label>
            <input class='form-control' type="number" id='deposit' name="deposit" value="<?php echo isset($_POST["deposit"]) ? $_POST["deposit"] : ''  ?>" required />
        </div>

        <input type="submit" class="btn btn-info" value="Open Account" />
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