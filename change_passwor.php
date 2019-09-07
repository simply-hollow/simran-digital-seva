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
?>
<!DOCTYPE html >
<html lang="en">
<head>
    <title>Document</title>
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
    #balace{
        color: red;
        text-decoration-color: red;

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
        </div>
        <ul class="nav navbar-right top-nav">
            <li>
                <i class="fa fa-refresh"></i>
               <?php
                $vendor = $_SESSION['vendor_id'];
                $con = mysqli_connect("localhost","","","");
                $query = "SELECT SUM(amount) AS value_sum FROM wallet WHERE vendor_id = '$vendor'";
                $result = mysqli_query($con,$query);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                echo '<ul class="nav navbar-right top-nav">';
                echo '<li id="balance"><b>'."BALANCE=".'</b><li>';
                echo '<li><b>'.$row['value_sum'].'</b></li>';
                echo '</ul';

                ?>
            </li>
          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                    <?php
                    if(isset($_SESSION['NAME']))
                    {
                        echo $_SESSION['NAME'];
                    }?><b class="caret"></b></a>
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
                    <a href="techsupport.php"><i class="fa fa-tint"></i>Tech Support</a>
                </li>
                <li>
                    <a href="transactions.php"><i class="fa fa-fw fa-wrench"></i>Transactions</a>
                </li>
            </ul>
        </div>
    </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">

                    <section class="panel">

                        <center><h1><header class="panel-heading">Change Password</header></h1></center>

                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="pass.php" method="post">
                                    <div class="form-group">

                                        <label for="exampleInputEmail1">vendor id</label>

                                        <input type="text" class="form-control" placeholder="vendor id" name="vendor_id" required>

                                    </div>

                                    <div class="form-group">

                                        <label for="exampleInputEmail1">Old Password</label>

                                        <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Old Password" name="oldpassword" required>

                                    </div>

                                    <div class="form-group">

                                        <label for="exampleInputPassword1">New Password</label>

                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter New Password" name="newpassword" required>

                                    </div>

                                    <center><button type="submit" class="btn btn-info" name="changepassword">Change Password</button></center>

                                </form>

                            </div>

                        </div>

                    </section>

                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
