<?php
/**
 * Created by PhpStorm.
 * User: paula
 * Date: 5/21/14
 * Time: 3:58 PM
 */

?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div id="logo"><a class="navbar-brand" href="../index.php"><img  src="../images/logo.png"/></a></div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../settings.php">Settings</a></li>
                    <li><a href="../index.php?logout">Logout</a></li>
                    <div class="welcome">Welcome, <?php echo $_SESSION['user_name']; ?></div>
                </ul>

                <!--  <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                  </form> -->
            </div>
        </div>

      </div>
</nav>
<div id="nav2">
    <ul>
        <li><a href="accounts.php">Accounts</a></li>
        <li><a href="certification.php">Certification</a></li>
        <li><a href="diving.php">Diving</a></li>
        <li><a href="engineering.php">Engineering</a></li>
        <li><a href="health_and_safety.php">Health & Safety</a></li>
        <li><a href="shared_documents.php">Shared documents</a></li>
    </ul>
    <form class="navbar-form navbar-right">
        <input type="text" class="form-control" placeholder="Search...">
    </form>

</div>