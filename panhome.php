<?php
include('login.php');
$con = mysqli_connect("localhost","","","");
$vendor = $_SESSION['vendor_id'];
$out = "DELETE FROM login_sessions WHERE vendor_id = '$vendor'" ;

if (!isset($_SESSION['NAME']))
{
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
}

if(isset($_GET['logout']))
{
    mysqli_query($con,$out) ;
    session_destroy();
    unset($_SESSION['NAME']);
    header('location: index.php');
}

  $vendor = $_SESSION['vendor_id'];
  $con = mysqli_connect("localhost","","","");
  $query = "SELECT wallet_bal AS value_sum FROM wallet_balance WHERE vendor_id = '$vendor'";
  $result = mysqli_query($con,$query);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  $avail = $row['value_sum'] ;

  if( $avail < 107 ){
    echo '<script>alert("Insufficient Wallet Balance. ADD BALANCE FIRST!!!"); window.location = "wallet.php";</script>' ;
  }

?>
<!DOCTYPE html >
<html lang="en">
<head>
    <title>PAN Services</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        #ab
        {
            color: red;
            padding-top: 15px;
        }
    </style>

</head>
<body>
    <div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand " href="index.php">Simran</a>
            <div class="navbar-text" style="color:white">Tech Support <strong> > </strong> +91 7302036956 , +91 7217237377 (10am to 5pm रविवार अवकाश)</div>
        </div>
        <ul class="nav navbar-right top-nav">
            <li>
            <?php

                echo '<ul class="nav navbar-right top-nav">';
                echo '<li id="ab"><b>'."BALANCE = ".'</b>';
                echo '<b>'.$row['value_sum'].'</b></li>';
                echo '</ul';

                ?>
            </li>
          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                    <?php
                    if(isset($_SESSION['NAME']))
                    {
                        echo $_SESSION['NAME'];
                    }?>
                    <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li>
                        <a href="change_passwor.php"> Change Password</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="home.php?logout='1'"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="home.php"><i class="fas fa-home"></i>Home</a>
                </li>
                 <li>
                    <a href="dashboard.php"> <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                 <li>
                    <a href="wallet.php"><i class="fa fa-fw fa-table"></i>Wallet Recharge</a>
                </li>
                <li>
                   <a href="panregister.php"><i class="fa fa-fw fa-table"></i>New PAN Card</a>
               </li>
               <li>
                  <a href="update.php"><i class="fa fa-fw fa-table"></i>Update PAN Card</a>
              </li>
                <li style="background-color:red;">
                   <a href="rejected.php" style="color:white;"><i class="fa fa-fw fa-table"></i>Rejected PAN Applications</a>
               </li>
                 <li>
                    <a href="techsupport.php"><i class="fa fa-tint"></i>Tech Support</a>
                </li>
                <li>
                    <a href="transactions.php"><i class="fa fa-fw fa-wrench"></i>Transactions</a>
                </li>
            </ul>
        </div>
    </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="download col-md-12">
                    <h2>Pan Card Services</h2>
                    <table class=table table-striped table-bordered table-hover table-condensed>
                        <tr>
                            <td class="col-md-6">Form</td>
                            <td class="col-md-6">Apply</td>
                        </tr>
                        <tr>
                            <td class="col-md-6">Registration for New PAN Card</td>
                            <td class="col-md-6"><a href="panregister.php" class="btn btn-success">Apply</a></td>
                        </tr>
                        <tr>
                            <td class="col-md-6">Update PAN Card</td>
                            <td class="col-md-6"><a href="update.php" class="btn btn-success">Apply</a></td>
                        </tr>
                        <tr>
                            <td class="col-md-6">Upload Form after Registratiion</td>
                            <td class="col-md-6"><a href="uploadform.php" class="btn btn-success">Upload</a></td>
                        </tr>
                    </table>
                </div>
                <div class="row">
                  <div class="col-md-12 text-center text-danger">
                    <h2>PAN Card apply करने से पहले आपके खाते का balance कम से कम 107 रुपए होना चाहिए|</h2><br>
                    <h2>PAN Card apply करने के बाद form भर कर form को upload करना अनिवार्य है|</h2><br>
                    <h2>आपके द्वारा बनाए गए पैन कार्ड की हार्ड कॉपी के साथ एकनॉलेजमेंट स्लिप लगाकर अवश्य भेजें अन्यथा आपका सेंटर बंद कर दिया जाएगा</h2><br>
                    <h2>हार्ड कॉपी भेजने का पता: SIMRAN DIGITAL SEVA, MOHALLA SANIYAN, TOWN & POST LAWAR, DISTRICT MEERUT, UTTAR PRADESH - 250222</h2>
                  </div>
                </div>
            </div>
             <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
