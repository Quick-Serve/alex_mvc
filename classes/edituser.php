<?php

/**
 * Class registration
 * handles the user registration
 */
class edituser
{
    /**
     * @var object $db_connection The database connection
     */
    private $db_connection = null;
    /**
     * @var array $errors Collection of error messages
     */
    public $errors = array();
    /**
     * @var array $messages Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$registration = new Registration();"
     */
    public function __construct()
    {
        if (isset($_POST["edituser"])) {
            $this->editUser($_POST["user_id"]);
        }
        else if (isset($_POST["deleteuser"])) {
            $this->deleteUser($_POST["user_id"]);
        }
    }


    public function currentUser(){
        if (isset ($_POST["user_id"]))
        return $_POST["user_id"];
        else return false;
    }
    /**
     * handles the entire registration process. checks all error possibilities
     * and creates a new user in the database if everything is fine
     */

    private function editUser($user_id)
    {
        if (empty($_POST['user_name'])) {
            $this->errors[] = "Empty Username";


        } elseif (strlen($_POST['user_name']) > 64 || strlen($_POST['user_name']) < 2) {
            $this->errors[] = "Username cannot be shorter than 2 or longer than 64 characters";
        } elseif (!preg_match('/^[a-z\d]{2,64}$/i', $_POST['user_name'])) {
            $this->errors[] = "Username does not fit the name scheme: only a-Z and numbers are allowed, 2 to 64 characters";
        } elseif (empty($_POST['user_email'])) {
            $this->errors[] = "Email cannot be empty";
        } elseif (strlen($_POST['user_email']) > 64) {
            $this->errors[] = "Email cannot be longer than 64 characters";
        } elseif (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = "Your email address is not in a valid email format";
        } elseif (!empty($_POST['user_name'])
            && strlen($_POST['user_name']) <= 64
            && strlen($_POST['user_name']) >= 2
            && preg_match('/^[a-z\d]{2,64}$/i', $_POST['user_name'])
            && !empty($_POST['user_email'])
            && strlen($_POST['user_email']) <= 64
            && filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)
        ) {
            // create a database connection
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {

                // escaping, additionally removing everything that could be (html/javascript-) code
                $user_name = $this->db_connection->real_escape_string(strip_tags($_POST['user_name'], ENT_QUOTES));
                $user_email = $this->db_connection->real_escape_string(strip_tags($_POST['user_email'], ENT_QUOTES));


                $user_type = $_POST['user_type'];



                // check if user or email address already exists
                $sql = "SELECT * FROM users WHERE (user_name = '" . $user_name . "' OR user_email = '" . $user_email . "') AND user_id <> ".$user_id.";";
                $query_check_user_name = $this->db_connection->query($sql);

                if ($query_check_user_name->num_rows == 1) {
                    $this->errors[] = "Sorry, that username / email address is already taken.";
                } else {
                    // write new user's data into database
                    $sql = "UPDATE users  SET user_name='".$user_name."', user_email='".$user_email."', user_type='".$user_type."'  WHERE user_id = ".$user_id.";";
                    $query_new_user_insert = $this->db_connection->query($sql);

                    // if user has been added successfully
                    if ($query_new_user_insert) {
                        $this->messages[] = "User <span>".$_POST['user_name']."</span> has been updated.";
                    } else {
                        $this->errors[] = "Sorry, editing user failed. Please go back and try again.";
                    }
                }
            } else {
                $this->errors[] = "Sorry, no database connection.";
            }
        } else {
            $this->errors[] = "An unknown error occurred.";
        }
    }

    private function deleteUser($user_id){
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $sql = "UPDATE users  SET user_active = 0 WHERE user_id = ".$user_id.";";
        $update = $this->db_connection->query($sql);
        if($update)
            $this->messages[] = "User <span>".$_POST['user_name']."</span> has been deleted.";
        else
            $this->errors[] = "Sorry, deleting user failed. Please go back and try again.";
    }
}
