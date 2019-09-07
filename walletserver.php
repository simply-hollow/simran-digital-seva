<?php
session_start() ;
$con = mysqli_connect("localhost","","","");

if(isset($_POST['sendrequest']))
{
    $trans = $_POST['transactionnum'];
    $amount = $_POST['amt'];
    $method = $_POST['paymenttype'];
    $user = $_SESSION['vendor_id'] ;
    $sql1="SELECT transnum FROM recharge_request WHERE transnum='$trans'";
    $sql="INSERT INTO recharge_request(vendor_id,method,amount,transnum) values ('$user','$method','$amount','$trans')";
    $result = mysqli_query($con,$sql1) ;
    $rowcount = mysqli_num_rows($result) ;

    if($rowcount) {
      $msg = 0 ;
    }
    else{
      $ins_result = mysqli_query($con,$sql) ;
      $msg = 1 ;
    }
}

if($msg == 1){
   echo '<script>alert("We have recieved your request, wallet balance will be updated upon transaction validation."); window.location = "home.php";</script>' ;
 }else{
   echo '<script>alert("Request from this transaction already recieved, wallet balance will be updated upon transaction validation."); window.location = "wallet.php";</script>' ;
 }

?>
