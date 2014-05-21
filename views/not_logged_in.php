<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
<link href="../css/signin.css" rel="stylesheet">
<!-- login form box -->
<form class="form-signin"  method="post" action="index.php" name="loginform">
    <i class="fa fa-user fa-6" style="font-size: 7em; color:#38709F;width: 0.8em;display: block;margin: 0 auto;  text-shadow: 0px 0px 2px rgba(255, 255, 255, 1);"></i>

    <input id="login_input_username"  type="text" class="form-control login_input" name="user_name" placeholder="Username"  required >
    <input id="login_input_password" type="password" name="user_password"  class="form-control login_input"  placeholder="Password" required="">



    <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">LOGIN</button>

</form>

<!--<a href="register.php">Register new account</a>-->
