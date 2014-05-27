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



<nav id="myNavbar" class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul id="down" class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="accounts.php">Accounts</a></li>
                <li><a href="certification.php">Certification</a></li>
                <li><a href="diving.php">Diving</a></li>
                <li class="dropdown">
                    <a href="engineering.php" data-toggle="dropdown" class="dropdown-toggle">Engineering <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="engineering_guernsey.php">Engineering Guernsey</a></li>
                        <li><a href="engineering_brecqhou.php">Engineering Brecqhou</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="health_and_safety.php" data-toggle="dropdown" class="dropdown-toggle">Health & Safety <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="health_and_safety_guernsey.php">Health & Safety Guernsey</a></li>
                        <li><a href="health_and_safety_brecqhou.php">Health & Safety Brecqhou</a></li>
                    </ul>
                </li>
                <li><a href="shared_documents.php">Shared documents</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </ul>
        </div><!-- /.navbar-collapse -->

</nav>

