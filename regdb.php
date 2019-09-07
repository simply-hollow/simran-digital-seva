<?php include("includes/header.php");?>
<?php include("includes/nav.php");

$error = $_GET['sta'] ;

if ($error == 1){
  echo "<h1>Registration Unuccessful &nbsp;&nbsp</h1>";
}
if($error == 2){
    echo "<h1>Form already Submitted &nbsp;&nbsp</h1>";
}
if($error = 3){
echo "<h1>Registration Successful &nbsp;&nbsp</h1>";
}

?>
