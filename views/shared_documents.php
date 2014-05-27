<?php
/**
 * Created by PhpStorm.
 * User: paula
 * Date: 5/26/14
 * Time: 5:08 PM
 */
?>

<form method="post" action="../shared_documents.php" name="newdoc" enctype="multipart/form-data">
    <label for="doc">New document</label>
    <input name="file" type="file"><br>
    <input type="hidden" value="Category name" name="cat">
    <input type="submit" name="document" value="Upload"/>
</form>
<?php
// show potential errors / feedback (from registration object)
if (isset($document)) {
    if ($document->errors) {
        foreach ($document->errors as $error) {
            echo '<div class="alert alert-danger"><strong>Warning!</strong> '.$error.'</div>';
        }
    }
    if ($document->messages) {
        foreach ($document->messages as $message) {
            echo '<div class="alert alert-success"><strong>Success!</strong> '.$message.'</div>';
        }
    }

}

?>