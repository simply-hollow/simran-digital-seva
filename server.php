<?php

$str="SDS";
$id=0001;
$host='localhost';
$user='';
$pass='';
$db='';

$con=mysqli_connect($host,$user,$pass,$db);
session_start();
function generate_numbers($start, $count, $digits) {
   $result = array();
   for ($n = $start; $n < $start + $count; $n++) {

      $result[] = str_pad($n, $digits, "0", STR_PAD_LEFT);

   }
   return $result;
   echo $str.$result;
}
function getPassword($length)
{
    $myChars = "abcdefghijklmnopqrstuvwxyz";
    $myChars .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $myChars .= "1234567890";
    $myChars .= "!@#$%^&*()_+<>?:-|\/";

    $myPass = "";

    mt_srand((double)microtime()*1234567);

    for($r=0;$r<$length;$r++)
    $myPass .= $myChars[mt_rand(0,strlen($myChars)-1)];
    return $myPass;
}
function vendor_id()
{
    global $con;
    $myChars1="123456789";

    $z="SDS";

    mt_srand((double)microtime()*1234567);

    for($r=0;$r<5;$r++)
    $z .= $myChars1[mt_rand(0,strlen($myChars1)-1)];
    return $z;
}

$length = 8;  // Length of password
// $pass = getPassword($length);
$dataset = 0 ;

if(isset($_POST['enquiry-submit']))
{
    $a=$_POST['cNAME'];
    $b=$_POST['cemail'];
    $c=$_POST['cMobile'];
    $d=$_POST['ccity'];
    $e=$_POST['cstate'];
    $f=$_POST['cretailer'];
    $g=$_POST['cAddress'];
    $h=$_POST['cpincode'];
    $i=$_POST['ccountry'];
    $j=$_POST['cbuiseness'];
    $k=$_FILES["fileToUpload"]["name"][0] ;
    $l=$_FILES["fileToUpload"]["name"][1] ;
    $m=$_FILES["fileToUpload"]["name"][2] ;
    $n=$_FILES["fileToUpload"]["name"][3] ;

    $target_dir = "uploads/". $c . "/" ;
    $uploadOk = 1;

    if(!file_exists($target_dir)){
      mkdir($target_dir,0777);
      chmod($target_dir,0777) ;
    } else{
      $uploadOk = 0;
      //header('location: regdb.php?sta=2') ;
    }

    for($i = 0 ; $i<4 ; $i++){

    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][$i]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST["enquiry-submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"][$i]);
        if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            //echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // if (file_exists($target_file)) {
    //     //echo "Sorry, file already exists.";
    //     $uploadOk = 0;
    // }

    if($imageFileType != "jpg" && $imageFileType != "jpeg" ) {
        //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        //echo "Sorry, your file was not uploaded.";
      header('location: regdb.php?sta=1') ;
    } else {
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"][$i]). " has been uploaded.<br>";
            $dataset=1 ;
        } else{
            $dataset = 0 ;
        }
    }

    }

    if($dataset == 1) {
      $pass = getPassword($length);
      $z1 = vendor_id();
      $sql="insert into signup(NAME,EMAIL,CONTACT,CITY,STATE,RETAILER,ADDRESS,PINCODE,COUNTRY,BNAME,AADHAR,PAN,PHOTO,SIGN,password,vendor_id) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$pass','$z1')";
      $query=mysqli_query($con,$sql);
      header('location: regdb.php?sta=3') ;
    } else{
      header('location: regdb.php?sta=1') ;
    }
}
?>
