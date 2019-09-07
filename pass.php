<?php
$con = mysqli_connect("localhost","","","");
if(isset($_POST['changepassword']))
{
    $vendor = $_POST['vendor_id'];
    $oldpass = $_POST['oldpassword'];
    $newpass = $_POST['newpassword'];

    $query="SELECT password FROM signup WHERE vendor_id='$vendor' AND password='$oldpass'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        $sql="UPDATE signup SET password='$newpass' WHERE vendor_id='$vendor'";
        $final = mysqli_query($con,$sql);
        $message = "Password Updated Succesfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('location: home.php');
    }



}
else
{
    $message = "Error";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header('location: home.php');
}

?>
