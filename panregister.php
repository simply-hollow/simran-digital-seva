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
    <title>New PAN Registration</title>
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
                        <a href="panregister.php?logout='1'"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <section class="panel">
                        <center><h1><header class="panel-heading">Register For Pan Card</header></h1></center>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="pdf1.php" method="post">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="Applicant">Category Of Applicant</label>
                                                <input type="text" class="form-control" name="capplicant" value="INDIVIDUAL" readonly>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="Date">Date</label>
                                                <input type="text" class="form-control" name="Date" value="<?php $currentdate = date('d/m/Y'); echo $currentdate; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label for="city">City</label>
                                                <select name="city" class="form-control" id="AO" onchange="setfeilds(this.value)">
                                                    <option value="Select city">Select city</option>
                                                    <?php
                                                    $con=mysqli_connect("localhost","","","");
                                                    $query= "SELECT * FROM ao";
                                                    $sql = mysqli_query($con,$query);
                                                    $result=mysqli_num_rows($sql);
                                                    if($result>0)
                                                    {
                                                    while($row = mysqli_fetch_array($sql,MYSQLI_ASSOC))
                                                    {
                                                        echo '<option value='.$row['City'].'>'.$row['City'].'</option>';
                                                    }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="Area Code">Area Code</label>
                                                <input type="text" name="area_code" class="form-control" id="ac" readonly>
                                                    <!-- <option value="Select Area Code">Select Area Code</option> -->
                                                    <?php
                                                    // $con=mysqli_connect("localhost","","","");
                                                    // $query= "SELECT * FROM ao";
                                                    // $sql = mysqli_query($con,$query);
                                                    // $result=mysqli_num_rows($sql);
                                                    // if($result>0)
                                                    // {
                                                    // while($row = mysqli_fetch_array($sql,MYSQLI_ASSOC))
                                                    // {
                                                    //     echo '<option value='.$row['AreaCode'].'>'.$row['AreaCode'].'</option>';
                                                    // }
                                                    // }
                                                    ?>
                                                <!-- </select> -->
                                            </div>
                                            <div class="col-lg-2">
                                                <label for="Ao Type">Ao Type</label>
                                                <input type="text" name="aotype" class="form-control" id="aot" readonly>
                                                    <!-- <option value="Select Ao type">Select Ao type</option> -->
                                                    <?php
                                                    // $con=mysqli_connect("localhost","","","");
                                                    // $query= "SELECT * FROM ao";
                                                    // $sql = mysqli_query($con,$query);
                                                    // $result=mysqli_num_rows($sql);
                                                    // if($result>0)
                                                    // {
                                                    // while($row = mysqli_fetch_array($sql,MYSQLI_ASSOC))
                                                    // {
                                                    //     echo '<option value='.$row['AOType'].'>'.$row['AOType'].'</option>';
                                                    // }
                                                    // }
                                                    ?>
                                                <!-- </select> -->
                                            </div>
                                            <div class="col-lg-2">
                                                <label for="RangeCode">RangeCode</label>
                                                <input type="text" name="RangeCode" class="form-control" id="rc" readonly>
                                                    <!-- <option value="Select Range Code">Select Range Code</option> -->
                                                    <?php
                                                    // $con=mysqli_connect("localhost","","","");
                                                    // $query= "SELECT * FROM ao";
                                                    // $sql = mysqli_query($con,$query);
                                                    // $result=mysqli_num_rows($sql);
                                                    // if($result>0)
                                                    // {
                                                    // while($row = mysqli_fetch_array($sql,MYSQLI_ASSOC))
                                                    // {
                                                    //     echo '<option value='.$row['RangeCode'].'>'.$row['RangeCode'].'</option>';
                                                    // }
                                                    // }
                                                    ?>
                                                <!-- </select> -->
                                            </div>
                                            <div class="col-lg-2">
                                                <label for="AOCode">AO Code</label>
                                                <input type="text" name="AOCode" class="form-control" id="aoc" readonly>
                                                    <!-- <option value="Select AO Code">Select AO Code</option> -->
                                                    <?php
                                                    // $con=mysqli_connect("localhost","","","");
                                                    // $query= "SELECT * FROM ao";
                                                    // $sql = mysqli_query($con,$query);
                                                    // $result=mysqli_num_rows($sql);
                                                    // if($result>0)
                                                    // {
                                                    // while($row = mysqli_fetch_array($sql,MYSQLI_ASSOC))
                                                    // {
                                                    //     echo '<option value='.$row['AOCode'].'>'.$row['AOCode'].'</option>';
                                                    // }
                                                    // }
                                                    ?>
                                                <!-- </select> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label for="Title">Title</label>
                                                <select name="title" class="form-control">
                                                    <option value="Shri">Shri</option>
                                                    <option value="Smt.">Smt.</option>
                                                    <option value="M/S">M/S</option>
                                                    <option value="Kumari">Kumari</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="Name">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" name="lname">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="Name">First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name" name="fname">
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="Name">Middle Name</label>
                                                <input type="text" class="form-control" placeholder="Middle Name" name="mname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <label for="Pan Card Guidance">Whether mother is a single parent and you wish to apply for PAN by furnishing the name of your mother only?(Please tick as applicable).</label>
                                            </div>
                                            <div class="col-lg-2">
                                              Yes <input type="radio" name="gsel" value="yes" onclick="funsetattr(this.value)">
                                            </div>
                                            <div class="col-lg-2">
                                              No <input type="radio" name="gsel" id="no" value="no" onclick="funsetattr(this.value)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label for="Pan Card Guidance">Pan Card Guidance</label>
                                                <select name="guidef" class="form-control" readonly>
                                                    <option value="Father">Father</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="Name">Last Name</label>
                                                <input type="text" class="form-control father" placeholder="Last Name" name="flname">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="Name">First Name</label>
                                                <input type="text" class="form-control father" placeholder="First Name" name="ffname">
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="Name">Middle Name</label>
                                                <input type="text" class="form-control father" placeholder="Middle Name" name="fmname">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2">
                                              <label for="Pan Card Guidance">Pan Card Guidance</label>
                                                <select name="guidem" class="form-control" readonly>
                                                    <option value="Mother">Mother</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="Name">Last Name</label>
                                                <input type="text" class="form-control mother" placeholder="Last Name" name="mlname" readonly>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="Name">First Name</label>
                                                <input type="text" class="form-control mother" placeholder="First Name" name="mfname" readonly>
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="Name">Middle Name</label>
                                                <input type="text" class="form-control mother" placeholder="Middle Name" name="mmname" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="Date of Birth">Date Of Birth</label>
                                                <input type="date" class="form-control" id="dob" onchange="show(this.value)" placeholder="Date of Birth" name="dob" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="mobile Number">Mobile Number</label>
                                                <input type="text" maxlength="10" class="form-control" id="mobile" placeholder="Mobile Number" name="mobile" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="E-mail">E-mail</label>
                                                <input type="email" class="form-control" id="email" placeholder="email" name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="Gender">Gender</label>
                                                <select name="gender" class="form-control">
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="Nationality">Nationality</label>
                                                <select name="Nation" class="form-control">
                                                    <option value="Indian">Indian</option>
                                                    <option value="Outside India">Outside India</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>Proof Of Identity</label>
                                                <select name="proof" class="form-control">
                                                    <option>Aadhar Card</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Aadhar Number</label>
                                                <input type="text" maxlength="12" placeholder="Aadhar Number" name="anumber" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>Source Of Income</label>
                                                <select name="income" class="form-control">
                                                    <option value="No income">No income</option>
                                                    <option value="Income from Buiseness">Income from Buiseness</option>
                                                    <option value="Income from house property">Income from house property</option>
                                                    <option value="Salary">Salary</option>
                                                    <option value="Capital Gains">Capital Gains</option>
                                                    <option value="Association Of Persons">Association Of Persons</option>
                                                    <option value="Limited Liability Partnership">Limited Liability Partnership</option>
                                                    <option value="Income from Buiseness">Income from other sources</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" id="ra" style="display:none;">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="text" placeholder="Representative Assessee (RA)" value="Representative Assessee (RA)" readonly class="form-control text-center">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label for="Title">Father's Title</label>
                                                <input type="text" name="ratitle" class="form-control setattr" value="Shri" readonly>
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="Name">Father's Last Name</label>
                                                <input type="text" class="form-control setattr" placeholder="Last Name" name="ralname">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="Name">Father's First Name</label>
                                                <input type="text" class="form-control setattr" placeholder="First Name" name="rafname">
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="Name">Father's Middle Name</label>
                                                <input type="text" class="form-control setattr" placeholder="Middle Name" name="ramname">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>Flat/Room/Door/Block No.</label>
                                                <input type="text" name="raAdd1" placeholder="Flat/Room/Door/Block No." class="form-control setattr">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Name of Premises/Building/Village</label>
                                                <input type="text" name="raAdd2" placeholder="Name of Premises/Building/Village" class="form-control setattr">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>Road/Street/Lane/Post office</label>
                                                <input type="text" name="raAdd3" placeholder="Road/Street/Lane/Post office" class="form-control setattr">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Area/Locality/Taluka/Sub-Divisions</label>
                                                <input type="text" name="raAdd4" placeholder="Area/Locality/Taluka/Sub-Divisions" class="form-control setattr">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>Town/City/District</label>
                                                <input type="text" name="raAdd5" placeholder="Town/City/District" class="form-control setattr">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>State/Union Territory</label>
                                                <select name="raState" class="form-control setattr">
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="Andaman & Nicobar Islands">Andaman & Nicobar Islands</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Dadara & Nagar Haveli">Dadara & Nagar Haveli</option>
                                                    <option value="Daman & Diu">Daman & Diu</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Lakhswadeep">Lakhswadeep</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Orissa">Orissa</option>
                                                    <option value="Pondicherry">Pondicherry</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttaranchal">Uttaranchal</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                    <option value="Outside India">Outside India</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>Pincode</label>
                                                <input type="text" maxlength="7" class="form-control setattr" placeholder="Pincode" name="rapincode">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Father's Aadhar Number</label>
                                                <input type="text" maxlength="12" class="form-control setattr" placeholder="Aadhar Number" name="raanum">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="text" placeholder="Residential Address" value="Residential Address" readonly class="form-control text-center">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>Flat/Room/Door/Block No.</label>
                                                <input type="text" name="Add1" placeholder="Flat/Room/Door/Block No." class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Name of Premises/Building/Village</label>
                                                <input type="text" name="Add2" placeholder="Name of Premises/Building/Village" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>Road/Street/Lane/Post office</label>
                                                <input type="text" name="Add3" placeholder="Road/Street/Lane/Post office" class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Area/Locality/Taluka/Sub-Divisions</label>
                                                <input type="text" name="Add4" placeholder="Area/Locality/Taluka/Sub-Divisions" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>Town/City/District</label>
                                                <input type="text" name="Add5" placeholder="Town/City/District" class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>State/Union Territory</label>
                                                <select name="State" class="form-control">
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="Andaman & Nicobar Islands">Andaman & Nicobar Islands</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Dadara & Nagar Haveli">Dadara & Nagar Haveli</option>
                                                    <option value="Daman & Diu">Daman & Diu</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Lakhswadeep">Lakhswadeep</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Orissa">Orissa</option>
                                                    <option value="Pondicherry">Pondicherry</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttaranchal">Uttaranchal</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                    <option value="Outside India">Outside India</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>Pincode</label>
                                                <input type="text" maxlength="7" class="form-control" placeholder="Pincode" name="pincode">
                                            </div>
                                                <div class="col-lg-6">
                                                    <label>Processing Fee</label>
                                                      <input type="number" class="form-control" name="wallet" placeholder="money" value="107" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <center>
                                        <input type="submit" class="btn btn-info" name="token" value="Submit Form">
                                    </center>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script>

      document.getElementById("no").checked = true ;

      function funsetattr(paramget){
        if(paramget == "yes"){
          var j,k ;
          var setattry = document.getElementsByClassName("father") ;
          var setattrn = document.getElementsByClassName("mother") ;
          for (j = 0; j < setattry.length; j++) {
            setattry[j].setAttribute("readonly", "readonly");
          }
          for (k = 0; k < setattrn.length; k++) {
            setattrn[k].removeAttribute("readonly");
          }
        }
        if(paramget == "no"){
          var l,m ;
          var setattry = document.getElementsByClassName("mother") ;
          var setattrn = document.getElementsByClassName("father") ;
          for (l = 0; l < setattry.length; l++) {
            setattry[l].setAttribute("readonly", "readonly");
          }
          for (m = 0; m < setattrn.length; m++) {
            setattrn[m].removeAttribute("readonly");
          }
        }
      }

      function setfeilds(str) {
        var xhttp;
        if (window.XMLHttpRequest) {
          xhttp = new XMLHttpRequest();
          } else {
          xhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(xhttp.responseText) ;
            var ac = data.AreaCode ;
            var aot = data.AOType ;
            var rc = data.RangeCode ;
            var aoc = data.AOCode ;
            document.getElementById("ac").value = ac ;
            document.getElementById("aot").value = aot ;
            document.getElementById("rc").value = rc ;
            document.getElementById("aoc").value = aoc ;
          }
        };
        xhttp.open("POST", "getfeilds.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("city="+str);
      }

      function show(dt){
        var refdate = new Date()
        var msecref = Date.parse(refdate);
        var msecdob = Date.parse(dt) ;
        var diff = msecref-msecdob ;
        if(diff<567648000000){
          var att = document.createAttribute("required");
          document.getElementById('ra').style.display = "block" ;
          var x = document.getElementsByClassName('setattr') ;
          var len = x.length ;
          var a ;
          for(a=0 ; a<len ; a++){
            x[a].setAttribute("required", "required") ;
          }
        }else{
          document.getElementById('ra').style.display = "none" ;
        }
      }
    </script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
