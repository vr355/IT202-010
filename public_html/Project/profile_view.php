<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>

<?php
$email = get_user_email();
$username = get_username();
$firstname = get_firstname();
$lastname = get_lastname();
$is_private = is_private_profile();
?>
<div class="container">
    <h3>Pofile View</h3>
    <div class="mb-3">
        <p>First Name : <b><?php se($firstname); ?></b></p>
    </div>
    <div class="mb-3">
        <p>Last Name : <b><?php se($lastname); ?></b></p>
    </div>
    <div class="mb-3">
        <p>Email : <b><?php echo !$is_private ? $email : '*********'; ?></b></p>
    </div>
    <div class="mb-3">
        <p>Username : <b><?php se($username); ?></b></p>
    </div>

</div>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>