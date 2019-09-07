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
    <title>Wallet Recharge Request</title>
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
        #ab{
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
                 <li>
                    <a href="techsupport.php"><i class="fa fa-tint"></i>Tech Support</a>
                </li>
                <li>
                    <a href="transactions.php"><i class="fa fa-fw fa-wrench"></i>Transactions</a>
                </li>
            </ul>
        </div>
    </nav>

<!--script src="js/main1.js"></script-->

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="download col-md-12">
            <h2>Wallet Recharge</h2>
    <div class="panel-body">
        <div class="position-center">
            <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="exampleInputEmail1">Vendor Name:*</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="vendername" value="<?php echo $_SESSION['NAME']; ?>" required readonly>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="exampleInputPassword1">Vendor Id:*</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="venderid" value="<?php echo $_SESSION['vendor_id']; ?>" required readonly>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>

                    <div class="form-group" id="show">
                         <form role="form" action="walletserver.php" method="post" enctype="multipart/form-data">
                             <div class="form-group">
                                 <div class="col-md-3"><label for="exampleInputPassword1">Payment Type:</label></div>
                                 <!-- <div class="col-md-3"><input type="radio" name="paymenttype" value="bhim" id="pay" required>Bhim</div> -->
                                 <div class="col-md-3"><input type="radio" name="paymenttype" value="bank" id="pay1" required>Bank</div>
                                 <!-- <div class="col-md-3"><input type="radio" name="paymenttype" value="paytm" id="Pay2" required>PayTM</div> -->
                             </div>
                             <br>
                             <br>
                             <div class="form-group">
                                 <label for="exampleInputPassword1">Amount:*</label>
                                 <input type="number" class="form-control" name="amt" min="1" max="50000" required>
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputPassword1">Transaction No:</label>
                                 <input type="text" class="form-control" name="transactionnum" required>
                             </div>
                             <div class="form-group">
                                 <div class="col-md-6"><label for="exampleInputPassword1">Wallet Type:</label></div>
                                 <div class="col-md-6"><input type="radio" name="wallettype" value="main-wallet" required>Main Wallet</div>
                             </div>
                             <br>
                             <button type="submit" class="btn btn-info text-center" name="sendrequest">Send Request</button>
                        </form>
                    </div>
                    <?php echo $paytyp . '<br>' . $amt . '<br>' . $trxno . '<br>' . $wtyp ;  ?>
                    <hr>
                    <!-- <div id="show1">
                        <section class="panel">
                            <header class="panel-heading">BHIM Payment</header>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <p>Add Money With BHIM App<br> -->
                                            <!-- <img src="../images/bhim.png" height="260px"><br> -->
                                            <!-- <img src="img/bhim.png"><br>
                                            Goverment BHIM App</p>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <h3> भीम ऐप द्वारा रिचार्ज करने के लिए कृपया यह video देखें</h3>
                                        <a href="https://www.youtube.com/watch?v=Q4iHGbiC-ig&feature=youtu.be" class="btn btn-success" target="_blank">Watch Video</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div> -->
                    <div id="show2">
                        <section class="panel">
                            <header class="panel-heading">Bank Account Details</header>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="col-md-6" style="color:red;">
                                        <h3>On Behalf Of Simran Digital Service Portal</h3>
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <p><strong>Bank Name</strong> - INDUSIND BANK<br>
                                                    <strong>A/C Name</strong> - VINOD KUMAR<br>
                                                    <strong>A/C No.</strong> - 201001569958<br>
                                                    <strong>IFSC Code</strong> - INDB0000019<br>
                                                    <strong>Branch</strong> - LUCKNOW<br>
                                                    <strong>Account Type</strong> - CURRENT</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h2 style="color:red;">
                                            NOTE: Wallet रिचार्ज करने के लिए पहले कृपया बैंक खाते में पैसे जमा करें| Transaction number generate होने के बाद Recharge Request डालें|
                                            <br><br><a href="includes/docs/paytosdsp.pdf" target="_blank">Process देखने के लिए यहाँ click करें|</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
<?//php include("includes/footerin.php")?>
