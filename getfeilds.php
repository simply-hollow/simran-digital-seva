<?php
$con = mysqli_connect("localhost","","","");
$city = mysqli_real_escape_string($con,$_POST['city']);

if(isset($city)) {

    $sql = "SELECT AreaCode, AOType, RangeCode, AOCode FROM ao WHERE City='$city'" ;
    $result = mysqli_query($con,$sql) ;
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC) ;
    $responseText = json_encode($row) ;
    echo $responseText ;
  }

mysqli_close($con) ;
?>
