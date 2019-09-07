<?php
include('login.php');
$con = mysqli_connect("localhost","","","");
$vendor = $_SESSION['vendor_id'];
$out = "DELETE FROM login_sessions WHERE vendor_id = '$vendor'" ;

if (!isset($_SESSION['vendor_id']))
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

if(isset($_POST['msubmit']))
{
  $token = $_POST['token'] ;
}else{
  header('location: rejected.php') ;
}


?>
<!DOCTYPE html >
<html lang="en">
<head>
    <title>Rejected PAN Applications</title>
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
                $vendor = $_SESSION['vendor_id'];
                $con = mysqli_connect("localhost","","","");
                $query = "SELECT wallet_bal AS value_sum FROM wallet_balance WHERE vendor_id = '$vendor'";
                $result = mysqli_query($con,$query);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                echo '<ul class="nav navbar-right top-nav">';
                echo '<li id= "ab"><b>'."BALANCE = ".'</b>';
                echo '<b>'.$row['value_sum'].'</b></li>';
                echo '</ul';

                ?>
            </li>
          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                  <?php
                  if(isset($_SESSION['vendor_id']))
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
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>New PAN Submission Reciepts</h3>
                      </div>
                      <div class="panel-body">
                        <form action="upfilem.php" method="post" enctype="multipart/form-data">
                          <div class="row" style="padding-top:15px;">
                              <div class="col-md-6 col-md-offset-3">
                                  <label for="Applicant">TempID</label>
                                  <input type="text" class="form-control" name="token" value="<?php echo $token ?>" readonly>
                              </div>
                              <div class="col-md-6 col-md-offset-3">
                                  <label>PDF File</label>
                                  <input type="file" class="form-control" name="file">
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 text-center" style="padding-top:20px;">
                              <button type="submit" class="btn btn-info" name="submit">Upload PDF</button>
                            </div>
                          </div>
                        </form>
                      </div>
                  </div>
                </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
   </div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
