
<link href="../css/signin.css" rel="stylesheet">
<!-- login form box -->
<form class="form-signin"  method="post" action="index.php" name="loginform">
    <img class="flag" src="../images/flag.png"/>

    <input id="login_input_username"  type="text" class="form-control login_input" name="user_name" placeholder="Username"  required >
    <input id="login_input_password" type="password" name="user_password"  class="form-control login_input"  placeholder="Password" required="">
    <input type="checkbox" name="remember" <?php if(isset($_COOKIE['remember_me'])) {
        echo 'checked="checked"';
    }
    else {
        echo '';
    }
    ?> >Remember Me



    <button  name="login" id="login" type="submit"></button>
   <?php
    // show potential errors / feedback (from login object)
    if (isset($login)) {
        if ($login->errors) {
            foreach ($login->errors as $error) {
                echo '<p class="loginerror">'.$error.'</p>';
            }
        }

        if ($login->messages) {
            foreach ($login->messages as $message) {
                echo '<p class="logininfo"> '.$message.'</p>';
            }
        }
    }
    ?>


</form>

<!--<a href="register.php">Register new account</a>-->
