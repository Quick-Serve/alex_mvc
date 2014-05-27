<?php
/**
 * Created by PhpStorm.
 * User: paula
 * Date: 5/25/14
 * Time: 10:31 PM
 */


$sql = "SELECT * FROM users";
$db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$result = $db_connection->query($sql);
if( !$result)
    die('error sql');


// show potential errors / feedback (from registration object)
if (isset($edit)) {
    if ($edit->errors) {
        foreach ($edit->errors as $error) {
            echo '<div class="alert alert-danger"><strong>Warning!</strong>'.$error.'</div>';
        }
    }
    if ($edit->messages) {
        foreach ($edit->messages as $message) {
            echo '<div class="alert alert-success"><strong>Success!</strong>'.$message.'</div>';
        }
    }
        $current_user = $edit->currentUser();

}



?>
<div class="panel-group" id="accordion">

    <?php
    $num = 0;
    while ($user = $result->fetch_assoc()){
    $num++;
        if($user['user_active'] == 1){

    ?>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $num?>">
            <?php  echo $user['user_name']." (".$user['user_type'].")"; ?>
</a>
      </h4>
    </div>
    <div id="collapse<?php echo $num?>" class="panel-collapse collapse <?php if(isset($current_user)){if($current_user == $user['user_id']) echo ' in';} ?>">
      <div class="panel-body">
          <form method="post" action="../settings.php" name="editform">

              <!-- the user name input field uses a HTML5 pattern check -->
              <input class="user_id" name="user_id" value="<?php echo $user['user_id']?>" type="hidden">
              <label for="login_input_username">Username</label>
              <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" value="<?php  echo $user['user_name']?>" required />
              <br>
              <!-- the email input field uses a HTML5 email type check -->
              <label for="login_input_email">User's email</label>
              <input id="login_input_email" class="login_input" type="email" value="<?php  echo $user['user_email']?>" name="user_email" required />
              <br>

              <label class="radio inline" for="regular">
                  <input type="radio" name="user_type" class="user_type" id="regular" value="regular" <?php if($user['user_type'] == 'regular') echo 'checked="checked"';?>>
                  Regular user
              </label>
              <label class="radio inline" for="admin">
                  <input type="radio" name="user_type" class="user_type" id="admin" value="admin" <?php if($user['user_type'] == 'admin') echo 'checked="checked"';?>>
                  Admin
              </label>
              <br>
              <input type="submit"  name="edituser" value="Update user data" />
              <input type="submit" style="color:red;" name="deleteuser" onclick="return confirm('Are you sure you want to delete?')";  value ="Delete user"/>

          </form>

      </div>
    </div>
  </div>

    <?php }}?>

</div>