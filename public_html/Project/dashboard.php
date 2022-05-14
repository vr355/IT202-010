<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div class="container-fluid">
    <h1>Dashboard</h1>
    <div class="lead text-center mb-3">
        <nav>
            <ul>
                <?php if (is_logged_in()) : ?>
                    <li><a href="<?php echo get_url('accounts.php'); ?>">My Accounts</a></li>
                    <li><a href="<?php echo get_url('create_account.php'); ?>">Create Account</a></li>
                    <li><a href="<?php echo get_url('create_loan.php'); ?>">Loan</a></li>
                    <li><a href="<?php echo get_url('transaction.php?type=deposit'); ?>">Deposit</a></li>
                    <li><a href="<?php echo get_url('transaction.php?type=withdraw'); ?>">Withdraw</a></li>
                    <li><a href="<?php echo get_url('transaction.php?type=transfer'); ?>">Transfer</a></li>
                    <li><a href="<?php echo get_url('transaction.php?type=ext-transfer'); ?>">External Transfer</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</div>

<?php

if (is_logged_in(true)) {
    //echo "Welcome home, " . get_username();
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>