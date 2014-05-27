<?php
/**
 * Created by PhpStorm.
 * User: paula
 * Date: 5/21/14
 * Time: 7:36 PM
 */
include 'header.php';
include 'classes/document.php';
if ($login->isUserLoggedIn() == false)
    header("Location:index.php");
include 'views/sidebar.php';
$document = new document();
?>
    <div class="col-sm-9 col-md-10 main">

        <h1>Shared Documents</h1>
        <?php include 'views/shared_documents.php'; ?>
    </div>

<?php
include 'footer.php';