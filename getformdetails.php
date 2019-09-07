<?php

$con = mysqli_connect("localhost","","","");
$token = mysqli_real_escape_string($con,$_POST['token']);

if(isset($token)) {
    $str = explode("-",$token) ;
    if($str[0] == 'UPC'){
      $sql = "SELECT firstname,middlename,lastname,gfirstname,gmiddlename,glastname,glastnamem,gfirstnamem,gmiddlenamem,mob_no,dob FROM pan_update WHERE temp_trans_no='$token'" ;
      $result = mysqli_query($con,$sql) ;
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC) ;
      $responseText = json_encode($row) ;
      echo $responseText ;
    }
    if($str[0] == 'NPC'){
      $sql = "SELECT firstname,middlename,lastname,gfirstname,gmiddlename,glastname,glastnamem,gfirstnamem,gmiddlenamem,mob_no,dob FROM pan_registration WHERE temp_trans_no='$token'" ;
      $result = mysqli_query($con,$sql) ;
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC) ;
      $responseText = json_encode($row) ;
      echo $responseText ;
    }
  }

mysqli_close($con) ;

?>
