<?php
  include('login.php');

  $con = mysqli_connect("localhost","","","");

  if(isset($_POST['upload'])) {
    $count = 4 ;
    $name = $_POST['name'];
    $guidance = $_POST['gname'];
    $guidancem = $_POST['gnamem'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $token = $_POST['token'];
    $c = $_SESSION['vendor_id'] ;
    $formfront = $_FILES["file"]["name"][0] ;
    $formback = $_FILES["file"]["name"][1] ;
    $aadhar = $_FILES["file"]["name"][2] ;
    $minor = $_FILES["file"]["name"][3] ;

    if($minor == ""){
        $count = 3 ;
    }

    $target_dir = "uploads/formuploads/". $c . "/". $token . "/" ;
    $uploadOk = 1;

    $q = "SELECT token FROM file_uploads WHERE token='$token'" ;
    if(mysqli_num_rows(mysqli_query($con,$q))){
      echo '<script>alert("Form Already Submitted!!!."); window.location = "uploadform.php";</script>' ;
    }

    if(!file_exists($target_dir)){
      mkdir($target_dir,0777);
      chmod($target_dir,0777) ;
    }

    for($i = 0 ; $i<$count ; $i++){

    $target_file = $target_dir . basename($_FILES["file"]["name"][$i]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST["upload"])) {
        $check = getimagesize($_FILES["file"]["tmp_name"][$i]);
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
        echo '<script>alert("Form Not Submitted!!!. Try Again. "); window.location = "uploadform.php";</script>' ;
    } else {
        if(move_uploaded_file($_FILES["file"]["tmp_name"][$i], $target_file)) {
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"][$i]). " has been uploaded.<br>";
            $dataset=1 ;
        } else{
            $dataset = 0 ;
        }
    }

    }

    if($dataset == 1) {
      $sql="INSERT INTO file_uploads(vendor_id,token,name,gname,gnamem,mobile,dob,formfront,formback,aadhar,minor) values('$c','$token','$name','$guidance','$guidancem','$mobile','$dob','$formback','$formback','$aadhar','$minor')";
      $query=mysqli_query($con,$sql);
      echo '<script>alert("Form Uploaded Succesfully."); window.location = "home.php";</script>' ;
    } else{
      echo '<script>alert("Form Not Submitted!!!. Try Again. "); window.location = "uploadform.php";</script>' ;
    }
}
else
{
    echo '<script>window.location = "uploadform.php";</script>' ;
}

?>
