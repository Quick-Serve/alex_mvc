<?php
/**
 * Created by PhpStorm.
 * User: paula
 * Date: 5/21/14
 * Time: 3:17 PM
 */

ini_set('error_reporting', E_ALL);
ini_set('display_startup_errors', 1);
ini_set("log_errors",1);
ini_set("display_errors",1);
ini_set("error_log", "php_error.log"); // make sure this is chmodded to 0777 permissions
require_once('functions.php');
include('classes/login.php');




// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("libraries/password_compatibility_library.php");
}



// include the configs / constants for the database connection
require_once("config/db.php");

// load the login class


// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...

$login = new Login();

?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <title>Island of Brecqhou Marine & Diving Operations</title>
      <link rel="shortcut icon" href="images/favicon.png">
      <meta name="generator" content="Bootply" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!--FontAwsome-->
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

      <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
  <?php

  if ($login->isUserLoggedIn() == true) {
    include 'views/navigation.php';
}

?>
