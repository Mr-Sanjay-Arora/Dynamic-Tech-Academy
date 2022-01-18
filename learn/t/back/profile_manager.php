<?php

session_start();

include("../../env/database.php");
include("../../env/constants.php");
include("../../env/functions.php");


  $id = $_SESSION['user_id'];

    $filename = $_FILES["profileimg"]["name"];
    $tempname = $_FILES["profileimg"]["tmp_name"];    
        $folder = "../image/".$filename;
          
        // Get all the submitted data from the form
        mysqli_query($con,"UPDATE `teachers` SET `profileimg`='$filename' where id = $id");
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
?>