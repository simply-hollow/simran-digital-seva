<?php
session_start() ;
include("server.php");
$con=mysqli_connect("localhost","","","");

$username="";
$errors=array();

if(!empty($_POST['login']))
{
    $username = mysqli_real_escape_string($con,$_POST['aa']);
    $password = mysqli_real_escape_string($con,$_POST['bb']);


    if(empty($username))
    {
        array_push($errors,"vendor id is Required");
    }
    if(empty($password))
    {
        array_push($errors,"Password is Required");
    }

    if(count($errors)==0)
    {
        $query="SELECT * FROM signup WHERE vendor_id='$username' AND password='$password'";
        $chk="INSERT INTO login_sessions(vendor_id) VALUES('$username')";
        $result = mysqli_query($con,$query);
        if(mysqli_query($con,$chk)){
          if(mysqli_num_rows($result)==1)
          {
              while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
              $_SESSION['NAME'] = $row['NAME'];
              $_SESSION['vendor_id'] = $username;
              header('location: home.php');
          }
          else
          {
              echo '<script>alert("Invalid Login!!!, Try Again."); window.location = "index.php";</script>' ;
          }
        }
        else{
            echo '<script>alert("Maximum Login Limit Reached!!!"); window.location = "index.php";</script>' ;
        }
    }

}

?>
