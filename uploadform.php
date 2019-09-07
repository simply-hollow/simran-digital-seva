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
    <title>Upload Form</title>
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
                    }?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li>
                        <a href="change_passwor.php"> Upload Form</a>
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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">

                    <section class="panel">

                        <center><h1><header class="panel-heading">Upload Documents Pan Card</header></h1></center>

                        <div class="panel-body">
                            <div class="position-center">
                                    <div class="row">
                                      <div class="col-md-6 col-md-offset-3">
                                            <label>Token Number</label>
                                            <input type="text" class="form-control" id="token" placeholder="Token Number" required>
                                      </div>
                                    </div>
                                  <div class="row">
                                    <div style="padding-top:20px;" class="col-md-6 col-md-offset-5">
                                      <button type="button" class="btn btn-info" name="upload" onclick="getdata()">Find Form</button>
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="upload.php" method="post" enctype="multipart/form-data">
                                  <input type="hidden" value"" name="token" id="token_no">
                                    <div class="form-group">
                                        <label for="Name">Name</label>
                                        <input type="text" class="form-control" placeholder="Name" name="name" id="name" required readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="Name">Father's Name</label>
                                        <input type="text" class="form-control" placeholder="Father's Name" name="gname" id="gname" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="Name">Mother's Name</label>
                                        <input type="text" class="form-control" placeholder="Mother's Name" name="gnamem" id="gnamem" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile Number">Mobile Number</label>
                                        <input type="text" maxlength="10" class="form-control" id="mobile" placeholder="Mobile Number" name="mobile" id="mobile" required readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="Date of Birth">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" placeholder="Date of Birth" name="dob" id="dob" required readonly>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-lg-3">
                                              <label>Front Form 49A (Only JPG, 200 DPI)</label>
                                              <input type="file" class="form-control" id="49A" name="file[]" required>
                                            </div>
                                            <div class="col-lg-3">
                                              <label>Back Form 49A (Only JPG, 200 DPI)</label>
                                              <input type="file" class="form-control" id="B49A" name="file[]" required>
                                            </div>
                                            <div class="col-lg-3">
                                              <label>Aadhar Card (Only JPG, 200 DPI)</label>
                                              <input type="file" class="form-control" id="Aadhar" name="file[]" required>
                                            </div>
                                            <div class="col-lg-3">
                                                <label>Minor Case (Father's Addhar Card) (Only JPG, 200 DPI)</label>
                                                <input type="file" class="form-control" id="fAadhar" name="file[]">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <center><button type="submit" class="btn btn-info" name="upload">Upload Form</button></center>

                                </form>

                            </div>

                        </div>

                        <div class="row">
                          <div class="col-md-12 text-center text-danger">
                            <h2>Form में आवेदक का photo साफ़ सुथरा और हलके color के background में होना चाहिए|</h2><br>
                            <h2>अंगूठा लगाने वाले व्यक्ति का form notary करवा कर upload करे|</h2>
                          </div>
                        </div>

                    </section>

                </div>

            </div>
            <br><br><br><br><br><br><br>
        </div>
    </div>
    <script>
      function getdata() {
        var xhttp;
        var str = document.getElementById('token').value ;
        if (window.XMLHttpRequest) {
          xhttp = new XMLHttpRequest();
          } else {
          xhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(xhttp.responseText) ;
            var name = data.firstname + ' ' + data.middlename + ' ' + data.lastname ;
            var gname = data.gfirstname + ' ' + data.gmiddlename + ' '  + data.glastname ;
            var gnamem = data.gfirstnamem + ' ' + data.gmiddlenamem + ' '  + data.glastnamem ;
            var mobile = data.mob_no ;
            var dob = data.dob ;
            document.getElementById("name").value = name ;
            document.getElementById("gname").value = gname ;
            document.getElementById("gnamem").value = gnamem ;
            document.getElementById("mobile").value = mobile ;
            document.getElementById("dob").value = dob ;
            document.getElementById('token_no').value = str ;
          }
        };
        xhttp.open("POST", "getformdetails.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("token="+str);
      }
</script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
