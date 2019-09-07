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
    <title>Transaction History</title>
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
                <i class="fa fa-refresh"></i>
               <?php
                $vendor = $_SESSION['vendor_id'];
                $con = mysqli_connect("localhost","","","");
                $query = "SELECT wallet_bal AS value_sum FROM wallet_balance WHERE vendor_id = '$vendor'";
                $result = mysqli_query($con,$query);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                echo '<ul class="nav navbar-right top-nav">';
                echo '<li id="ab"><b>'."BALANCE = ".'</b>';
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
                 <li>
                    <a href="techsupport.php"><i class="fa fa-tint"></i>Tech Support</a>
                </li>
                <li>
                    <a href="transactions.php"><i class="fa fa-fw fa-wrench"></i>Transactions</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php
        $con = mysqli_connect("localhost","","","");
        $id = 1;
        $vendor = $_SESSION['vendor_id'];
        $wallet = "SELECT * FROM recharge_request where vendor_id='$vendor'";
        $query=mysqli_query($con,$wallet);
        $result=mysqli_num_rows($query);
        echo '<div id="page-wrapper">';
        echo '<div class="container-fluid">';
        echo '<div class="row">';
        echo '<div class="col-lg-12">';
        echo '<div class="panel panel-default">';
        echo '<div class="panel-heading">';
        echo '<h3 class="panel-title"><i class="fa fa-money fa-fw"></i><center>FUND TRANSFER TRANSACTION</center></h3>';
        echo '</div>';
        echo '<div class="panel-body">';
        echo '<div class="table-responsive">';
        echo '<table class="table table-bordered table-hover table-striped">';
        echo '<tr><th>S.No.</th><th>Method</th><th>Amount</th><th>TransNum</th><th>Date</th><th>Status</th></tr>';
        if($result>0)
        {
            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
                echo '<tr>';
                echo '<td>'.$id++.'</td>';
                echo '<td>'.$row['method'].'</td>';
                echo '<td>'.$row['amount'].'</td>';
                echo '<td>'.$row['transnum'].'</td>';
                echo '<td>'.$row['date'].'</td>';
                echo '<td class="text-uppercase sta">'.$row['status'].'</td>';
                echo '</tr>';
            }
        }
        echo '</table>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';


    ?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>

</body>
</html>
