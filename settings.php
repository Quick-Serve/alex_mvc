<?php
/**
 * Created by PhpStorm.
 * User: paula
 * Date: 5/21/14
 * Time: 10:05 PM
 */
require 'header.php';
if ($login->isUserLoggedIn() == false)
    header("Location:index.php");
include 'views/sidebar.php';

// include the configs / constants for the database connection
require_once("config/db.php");

// load the registration class
require_once("classes/edituser.php");

// create the registration object. when this object is created, it will do all registration stuff automatically
// so this single line handles the entire registration process.
$edit = new edituser();
?>
    <div class="col-sm-9 col-md-10 main">

        <h1>Settings</h1>

        <?php


        if($login->isAdmin()){
                echo '<a href="new_user.php">+ New user</a> ';

    ?>
<h1>Edit users</h1>
        <?php include 'views/edit_users.php'; }?>


    </div>

<?php
include 'footer.php';