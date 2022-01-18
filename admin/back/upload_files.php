<?php

session_start();

include("../../env/database.php");
include("../../env/constants.php");
include("../../env/functions.php");


    $file_name = get_safe_value($_POST["file_name"]);
    $file_link = get_safe_value($_POST["file_link"]);
    $category  = get_safe_value($_POST["category"]);

    if(!empty($file_name) && !empty($file_link) && !empty($category)){
        mysqli_query($con,"INSERT INTO `files`(`file_name`, `file_link`, `course_category`) VALUES ('$file_name','$file_link','$category')");
        echo("The file link has been generated successfully");
    }
    else{
        echo("Blank fields cannot be submitted!");
    }
  


?>