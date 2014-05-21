<?php



include('header.php');

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {

    include("views/dashboard.php");

} else {

    include("views/not_logged_in.php");
}
include('footer.php');