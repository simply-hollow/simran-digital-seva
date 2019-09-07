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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<style>
 #pad
 {
   padding-bottom: None;
   margin-bottom: auto;

 }
 #padd
 {
   padding-bottom: 22px;
 }
</style>
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
          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                    Admin<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li>
                        <a href="#"> Change Password</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-wrapper">
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="panel panel-default" id="padd">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>New Franchise Registrations</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-hover table-bordered table-striped">
                    <tr>
                      <th>S.No.</th>
                      <th>Name</th>
                      <th>Date of Birth</th>
                      <th>View details</th>
                    </tr>
                    <tr>
                      <th>
                        1.
                      </th>
                      <th>Deepak Vishwakarma</th>
                      <th>11-08-1999</th>
                      <th>
                        <a class="btn btn-success btn-block " href="#" target="_blank">View Details</a>
                      </th>
                    </tr>
                    <tr>
                      <th>
                        1.
                      </th>
                      <th>Deepak Vishwakarma</th>
                      <th>11-08-1999</th>
                      <th>
                        <a class="btn btn-success btn-block " href="#" target="_blank">View Details</a>
                      </th>
                    </tr>

                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="panel panel-default" id="pad">
              <div class="panel-heading">
                <h3 class="panel-title">New Payment Request</h3>
              </div>
              <div class="panel-body">
                <table class="table-bordered table table-striped table-hover">
                  <tr>
                    <th>S.no</th>
                    <th>
                      Aadhar Number
                    </th>
                    <th>
                      Request Amount
                    </th>
                    <th>
                      Transaction Number
                    </th>
                    <th>
                      Add Money
                    </th>
                  </tr>
                  <tr>
                    <th>
                      1
                    </th>
                    <th>
                      424045655423
                    </th>
                    <th>
                      1000
                    </th>
                    <th>
                      12345675432
                    </th>
                    <th>
                      <a class="btn btn-success btn-block">Add Amount</a>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      1
                    </th>
                    <th>
                      424045655423
                    </th>
                    <th>
                      1000
                    </th>
                    <th>
                      12345675432
                    </th>
                    <th>
                      <a class="btn btn-success btn-block">Add Amount</a>
                    </th>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel title">Pan Card Submissions</h3>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-hover table-bordered">
                  <tr>
                    <th>
                      S.No
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                      Father's Name
                    </th>
                    <th>
                      Mother's Name
                    </th>
                    <th>
                      Date Of Birth
                    </th>
                    <th>
                      Mobile Number
                    </th>
                    <th>
                      Front Of Form(49A)
                    </th>
                    <th>
                      Back Of Form(49A)
                    </th>
                    <th>
                      Aadhar
                    </th>
                  </tr>
                </table>
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
