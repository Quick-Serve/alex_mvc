<?php
/**
 * Created by PhpStorm.
 * User: paula
 * Date: 5/21/14
 * Time: 7:35 PM
 */
include 'header.php';
if ($login->isUserLoggedIn() == false)
    header("Location:index.php");
include 'views/sidebar.php';
?>
    <div class="col-sm-9 col-md-10 main">

        <h1>Health $ Safety</h1>
        <a href="health_and_safety_guernsey.php">Health & Safety Guernsey</a></br>
        <a href="health_and_safety_brecqhou.php">Health & Safety Brecqhou</a>
    </div>

<?php
include 'footer.php';