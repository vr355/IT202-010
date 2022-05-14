<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<?php
if (isset($_POST["save"])) {
    $email = se($_POST, "email", null, false);
    $username = se($_POST, "username", null, false);
    $firstname = se($_POST, "firstname", null, false);
    $lastname = se($_POST, "lastname", null, false);

    $params = [':firstname' => $firstname, ':lastname' => $lastname, ":email" => $email, ":username" => $username, ":id" => get_user_id()];
    $db = getDB();
    $stmt = $db->prepare("UPDATE Users set email = :email, username = :username, firstname=:firstname, lastname=:lastname where id = :id");
    try {
        $stmt->execute($params);
        flash("Profile saved", "success");
    } catch (Exception $e) {
        if ($e->errorInfo[1] === 1062) {
            //https://www.php.net/manual/en/function.preg-match.php
            preg_match("/users.(\w+)/", $e->errorInfo[2], $matches);
            if (isset($matches[1])) {
                flash("The chosen " . $matches[1] . " is not available.", "warning");
            } else {
                //TODO come up with a nice error message
                echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
            }
        } else {
            //TODO come up with a nice error message
            echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
        }
    }
    //select fresh data from table
    $stmt = $db->prepare("SELECT id, firstname, lastname, email, username from Users where id = :id LIMIT 1");
    try {
        $stmt->execute([":id" => get_user_id()]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            //$_SESSION["user"] = $user;
            $_SESSION["user"]["email"] = $user["email"];
            $_SESSION["user"]["username"] = $user["username"];
            $_SESSION["user"]["firstname"] = $user["firstname"];
            $_SESSION["user"]["lastname"] = $user["lastname"];
        } else {
            flash("User doesn't exist", "danger");
        }
    } catch (Exception $e) {
        flash("An unexpected error occurred, please try again", "danger");
        //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
    }


    //check/update password
    $current_password = se($_POST, "currentPassword", null, false);
    $new_password = se($_POST, "newPassword", null, false);
    $confirm_password = se($_POST, "confirmPassword", null, false);
    if (!empty($current_password) && !empty($new_password) && !empty($confirm_password)) {
        if ($new_password === $confirm_password) {
            //TODO validate current
            $stmt = $db->prepare("SELECT password from Users where id = :id");
            try {
                $stmt->execute([":id" => get_user_id()]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                if (isset($result["password"])) {
                    if (password_verify($current_password, $result["password"])) {
                        $query = "UPDATE Users set password = :password where id = :id";
                        $stmt = $db->prepare($query);
                        $stmt->execute([
                            ":id" => get_user_id(),
                            ":password" => password_hash($new_password, PASSWORD_BCRYPT)
                        ]);

                        flash("Password reset", "success");
                    } else {
                        flash("Current password is invalid", "warning");
                    }
                }
            } catch (Exception $e) {
                echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
            }
        } else {
            flash("New passwords don't match", "warning");
        }
    }
}
?>

<?php
$email = get_user_email();
$username = get_username();
$firstname = get_firstname();
$lastname = get_lastname();
$is_private = is_private_profile();
?>
<div class="container">
    <form method="POST" onsubmit="return validate(this);">
        <div class="mb-3">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" value="<?php se($firstname); ?>" />
        </div>
        <div class="mb-3">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" value="<?php se($lastname); ?>" />
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php se($email); ?>" />
        </div>
        <div class="mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?php se($username); ?>" />
        </div>
        <div class="mb-3">
            <label for="is_private">Is Private</label>
            <input type="checkbox" name="is_private" id="is_private" value="1" <?php echo $is_private ? 'checked' : ''; ?> />
        </div>
        <!-- DO NOT PRELOAD PASSWORD -->
        <div>Password Reset</div>
        <div class="mb-3">
            <label for="cp">Current Password</label>
            <input type="password" name="currentPassword" id="cp" />
        </div>
        <div class="mb-3">
            <label for="np">New Password</label>
            <input type="password" name="newPassword" id="np" />
        </div>
        <div class="mb-3">
            <label for="conp">Confirm Password</label>
            <input type="password" name="confirmPassword" id="conp" />
        </div>
        <input type="submit" value="Update Profile" name="save" />
    </form>
</div>


<script>
    function validate(form) {
        let pw = form.newPassword.value;
        let con = form.confirmPassword.value;
        let isValid = true;
        //TODO add other client side validation....

        //example of using flash via javascript
        //find the flash container, create a new element, appendChild
        if (!isEqual(pw, con)) {
            flash("Password and Confrim password must match", "warning");
            isValid = false;
        }
        return isValid;
    }
</script>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>