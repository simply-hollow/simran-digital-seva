<?php
session_start() ;
$con = mysqli_connect("localhost","","","");

function gentoken() {
  $myChars="1234567890";

  $z="NPC-";

  mt_srand((double)microtime()*1234567);

  for($r=0;$r<5;$r++)
  $z .= $myChars[mt_rand(0,strlen($myChars)-1)];
  return $z;
}

if(isset($_POST['token']))
{
    //require 'FPDF/fpdf.php';
    $vendor_id = $_SESSION['vendor_id'] ;
    $temp_trans = gentoken() ;
    $city = $_POST['city'] ;
    $area_code = $_POST['area_code'];
    $aotype = $_POST['aotype'];
    $rangecode = $_POST['RangeCode'];
    $aocode = $_POST['AOCode'];
    $title = $_POST['title'] ;
    $lastname = $_POST['lname'];
    $firstname = $_POST['fname'];
    $middlename = $_POST['mname'];
    $guidance = $_POST['guidef'];
    $glastname = $_POST['flname'];
    $gfirstname = $_POST['ffname'];
    $gmiddlename = $_POST['fmname'];
    $guidancem = $_POST['guidem'];
    $glastnamem = $_POST['mlname'];
    $gfirstnamem = $_POST['mfname'];
    $gmiddlenamem = $_POST['mmname'];
    $dob = $_POST['dob'];
    $mob_no = $_POST['mobile'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $nationality = $_POST['Nation'] ;
    $aadharno = $_POST['anumber'];
    $incomesource = $_POST['income'];
    $ratitle = $_POST['ratitle'];
    $ralname = $_POST['ralname'];
    $rafname = $_POST['rafname'];
    $ramname = $_POST['ramname'];
    $ra_flat = $_POST['raAdd1'];
    $ra_village = $_POST['raAdd2'];
    $ra_street = $_POST['raAdd3'];
    $ra_locality = $_POST['raAdd4'];
    $ra_district = $_POST['raAdd5'];
    $ra_state = $_POST['raState'];
    $rapincode = $_POST['rapincode'];
    $raanum = $_POST['raanum'] ;
    $r_flat = $_POST['Add1'];
    $r_village = $_POST['Add2'];
    $r_street = $_POST['Add3'];
    $r_locality = $_POST['Add4'];
    $r_district = $_POST['Add5'];
    $r_state = $_POST['State'];
    $pincode = $_POST['pincode'];

    $sql1="SELECT temp_trans_no FROM pan_registration WHERE temp_trans_no='$temp_trans' AND vendor_id='$vendor_id'";
    $sql2= "UPDATE wallet_balance SET wallet_bal=(wallet_bal-107) WHERE vendor_id = '$vendor_id'" ;
    $sql = "INSERT INTO pan_registration(vendor_id, temp_trans_no, city, area_code, aotype, rangecode, aocode, title, lastname, firstname, middlename, guidance, glastname, gfirstname, gmiddlename, guidancem, glastnamem, gfirstnamem, gmiddlenamem, dob, mob_no, email, gender, nationality, aadharno, incomesource, r_flatno, r_village, r_street, r_locality, r_district, r_state, pincode, ratitle, ralname, rafname, ramname, ra_flat, ra_village, ra_street, ra_locality, ra_district, ra_state, rapincode, raanum) VALUES ('$vendor_id','$temp_trans','$city','$area_code','$aotype','$rangecode','$aocode','$title','$lastname','$firstname','$middlename','$guidance','$glastname','$gfirstname','$gmiddlename','$guidancem','$glastnamem','$gfirstnamem','$gmiddlenamem','$dob','$mob_no','$email','$gender','$nationality','$aadharno','$incomesource','$r_flat','$r_village','$r_street','$r_locality','$r_district','$r_state','$pincode', '$ratitle', '$ralname', '$rafname', '$ramname', '$ra_flat', '$ra_village', '$ra_street', '$ra_locality', '$ra_district', '$ra_state', '$rapincode', '$raanum')" ;

    $result = mysqli_query($con,$sql1) ;
    $rowcount = mysqli_num_rows($result) ;

    if($rowcount) {
      $msg = 0 ;
    }
    else{
      $query=mysqli_query($con,$sql);
      mysqli_query($con,$sql2);
      $msg = 1 ;
    }

    if($msg){
      echo '<script>alert("PAN Application Successfully Submitted"); window.close();</script>' ;
    }else {
      echo '<script>alert("Sorry! We are currently unable to process your request. Try Again!!!"); window.close();</script>' ;
    }

}

?>
