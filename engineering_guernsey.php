<?php
/**
 * Created by PhpStorm.
 * User: paula
 * Date: 5/25/14
 * Time: 5:31 PM
 */
include 'header.php';
if ($login->isUserLoggedIn() == false)
    header("Location:index.php");
include 'views/sidebar.php';
?>
    <div class="col-sm-9 col-md-10 main">

        <h1>Engineering Guernsey</h1>

    </div>

<?php
include 'footer.php';