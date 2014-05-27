<?php
/**
 * Created by PhpStorm.
 * User: paula
 * Date: 5/26/14
 * Time: 4:52 PM
 */

class document {
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


    private $doc_id;
    private $doc_name;
    private $doc_link;
    private $doc_date;
    private $doc_user_id;
    private $doc_cat;

    public function __construct(){

        if (isset($_POST["document"])) {
           $this->newDoc();
        }

    }

    public function newDoc(){
        if (empty($_FILES['file'])) {
            $this->errors[] = "Document is not uploaded.";
        }

        $allowedExts = array(
            "pdf",
            "doc",
            "docx"
        );


        $explode = explode('.', $_FILES["file"]["name"]);

        $extension = end($explode);

        if ( 100000 < $_FILES["file"]["size"]  ) {
            $this->errors[] =  'Please provide a smaller file less than 10MB.';
        }

        if ( ! ( in_array($extension, $allowedExts ) ) ) {
            $this->errors[] ='Please provide another file type (pdf, doc or docx).';
        }

       else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],
                "documents/" . $_FILES["file"]["name"]);
            $this->messages[] = "File successfully uploaded.";
        }

    }
}

