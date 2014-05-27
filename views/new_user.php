
<div class="col-sm-9 col-md-10 main">

<h1>Add new user</h1>
<!-- register form -->
<form method="post" action="new_user.php" name="registerform">

    <!-- the user name input field uses a HTML5 pattern check -->
    <label for="login_input_username">Username</label>
    <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
<br>
    <!-- the email input field uses a HTML5 email type check -->
    <label for="login_input_email">User's email</label>
    <input id="login_input_email" class="login_input" type="email" name="user_email" required />
<br>
    <label for="login_input_password_new">Password</label>
    <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
<br>
    <label for="login_input_password_repeat">Repeat password</label>
    <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
<br>
    <label class="radio inline" for="regular">
        <input type="radio" name="user_type" class="user_type" id="regular" value="regular" checked="checked">
        Regular user
    </label>
    <label class="radio inline" for="admin">
        <input type="radio" name="user_type" class="user_type" id="admin" value="admin">
        Admin
    </label>
    <br>
    <input type="submit"  name="register" value="Add user" />

</form>
    <?php
    // show potential errors / feedback (from registration object)
    if (isset($registration)) {
        if ($registration->errors) {
            foreach ($registration->errors as $error) {
                echo '<div class="alert alert-danger"><strong>Warning!</strong> '.$error.'</div>';
            }
        }
        if ($registration->messages) {
            foreach ($registration->messages as $message) {
                echo '<div class="alert alert-success"><strong>Success!</strong> '.$message.'</div>';
            }
        }
    }

    ?>
</div>

