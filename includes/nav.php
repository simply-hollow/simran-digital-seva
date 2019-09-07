<?php

session_start() ;
include('login.php');

?>

<div id="overlay" >
    <div id="text">
        <div class="contact-form">
            <img src="2.jpg" class="avatar">
            <span onclick="off()" class="close" title="Close Modal">&times;</span>
            <h2>Login</h2>
            <p></p>
            <form action="login.php" method="post">
                <input type="text" class="form-control" name="aa"  id="b" placeholder="Vender ID" >
                <input type="password" class="form-control" name="bb" id="b" placeholder="Enter Password">
                <input type="submit" name="login" value="Sign In">
            </form>
        </div>
    </div>
</div>
<div class="slider" id="topheader">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="robust">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><b>Simran</b></a>
            </div>
            <div class="collapse navbar-collapse" id="robust">
              <ul class="nav navbar-nav navbar-left">
                    <li id="a"><a href="index.php">Home</a></li>
                    <li id="g"><a href="about.php">About</a></li>
                    <li id="c"><a href="Downloads.php">Downloads</a></li>
                    <li id="fra"><a href="franchise.php">Franchise Registration</a></li>
                    <!--li><a href="status.php">Status</a></li-->
                    <li id="d"><a href="privacy.php">Privacy Policy</a></li>
                    <li id="e"><a href="enquiry.php">Ask Enquiry</a></li>
                    <!--li><a href="contact.html">Contact us</a></li-->
                    <li id="f"><a href="training.php">Training Manual</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <?php
                  if(isset($_SESSION['vendor_id']))
                  {
                    echo '<li class="dropdown">
                          <a href="../dashboard.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Dashboard<b class="caret"></b></a>
                          <ul class="dropdown-menu">

                              <li class="divider"></li>
                              <li>
                                  <a href="change_passwor.php"> Change Password</a>
                              </li>

                              <li class="divider"></li>
                              <li>
                                  <a href="home.php?logout="1" "><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                              </li>
                          </ul>
                      </li>' ;
                  }else{
                      echo '<li><a onclick="on()"><i style="padding-right:5px;" class="glyphicon glyphicon-log-in"></i>Login</a></li>' ;
                  }
                  ?>
                </ul>
            </div>
        </div>
    </nav>
    <figure>
        <!--img src="img/bg.jpg" class="abc active"-->
        <img src="img/banner/pension-yojana-banner.jpg" class="abc">
        <img src="img/banner/money-transfer-banner.jpg" class="abc">
        <img src="img/banner/aadhar-banner.jpg" class="abc">
        <img src="img/banner/electricity-bill-banner%20(1).jpg" class="abc">
        <img src="img/banner/passport-banner.jpg" class="abc active">
    </figure>
    <h1 class="lead1">𝓢𝓲𝓶𝓻𝓪𝓷 𝓓𝓲𝓰𝓲𝓽𝓪𝓵 𝓢𝓮𝓿𝓪</h1>
    <p class="lead xx"><b>सिमरन डिजिटल सेवा मे आपका स्वागत है</b></p>
    <!--p><a class="btn btn-primary btn-lg" href="about.php">Read More</a></p-->
</div>
