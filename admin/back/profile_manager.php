<?php

header("Access-Control-Allow-Headers: Authorization, Content-Type");
header("Access-Control-Allow-Origin: *");
header('content-type: application/json; charset=utf-8');

session_start();

include("../../env/database.php");
include("../../env/constants.php");
include("../../env/functions.php");



  $id = $_SESSION['email'];
  

    $filename = $_FILES["profileimg"]["name"];
    $tempname = $_FILES["profileimg"]["tmp_name"];    
    $folder = "../image/".$filename;
    

    // Get all the submitted data from the form
    mysqli_query($con,"UPDATE `admin` SET `profileimg` = '$filename'");
          
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder))  {
        // $query = mysqli_query($con,"SELECT profileimg from admin");
        // $row = mysqli_fetch_assoc($query);
        // $data=$row["profileimg"];    
        // $dir = "image";    
        // $dirHandle = opendir($dir);    
        // while ($file = readdir($dirHandle)) {    
        //     if($file==$data) {
        //         unlink("../".$dir."/".$file);//give correct path,
        //     }
        // }    
        // closedir($dirHandle);
        
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
?>