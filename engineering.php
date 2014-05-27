<?php
/**
 * Created by PhpStorm.
 * User: paula
 * Date: 5/21/14
 * Time: 7:34 PM
 */
include 'header.php';
if ($login->isUserLoggedIn() == false)
    header("Location:index.php");
include 'views/sidebar.php';
?>
    <div class="col-sm-9 col-md-10 main">

        <h1>Engineering</h1>
       <a href="engineering_guernsey.php">Engineering Guernsey</a><br>
       <a href="engineering_brecqhou.php">Engineering Brecqhou</a>

    </div>

<?php
include 'footer.php';