<?php
include('login.php');

$con = mysqli_connect("localhost","","","");

if(isset($_POST['submit'])) {

  $token = $_POST['token'] ;
  $c = $_SESSION['vendor_id'] ;
  $form = $_FILES["file"]["name"] ;

  $target_dir = "uploads/formuploads/". $c . "/". $token . "/rejectedpan" . "/" ;
  $uploadOk = 1;

  if(!file_exists($target_dir)){
    mkdir($target_dir,0777);
    chmod($target_dir,0777) ;
  }

  $q = "SELECT token FROM manual_file_uploads WHERE token='$token'" ;
  if(mysqli_num_rows(mysqli_query($con,$q))){
    echo '<script>alert("Form Already Submitted!!!."); window.location = "rejected.php";</script>' ;
  }

  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // if(isset($_POST["submit"])) {
  //     $check = getimagesize($_FILES["file"]["tmp_name"]);
  //     if($check !== false) {
  //         //echo "File is an image - " . $check["mime"] . ".";
  //         $uploadOk = 1;
  //     } else {
  //         //echo "File is not an image.";
  //         $uploadOk = 0;
  //     }
  // }

  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }

  if($imageFileType != "pdf") {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }

  if ($uploadOk == 0) {
      //echo '<script>alert("Form Not Submitted!!!. Try Again. "); window.location = "rejected.php";</script>' ;
  } else {
      if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
          //echo "The file ". basename( $_FILES["fileToUpload"]["name"][$i]). " has been uploaded.<br>";
          $dataset=1 ;
      } else{
          $dataset = 0 ;
      }
  }

  if($dataset == 1) {
    $sql="INSERT INTO manual_file_uploads(vendor_id,temp_trans_no,file) values('$c','$token','$form')";
    $query=mysqli_query($con,$sql);
    echo '<script>alert("Form Uploaded Succesfully."); window.location = "home.php";</script>' ;
  } else{
    echo 'b' ;
    echo '<script>alert("Form Not Submitted!!!. Try Again. "); window.location = "rejected.php";</script>' ;
  }
}
else
{
  echo '<script>window.location = "filem.php";</script>' ;
}

?>
