<?php

session_start();

include("../../env/database.php");
include("../../env/constants.php");
include("../../env/functions.php");


 $category = get_safe_value($_POST["category"]);
  $file_name =  $_FILES['pdf']['name'];
  $tmp_name = $_FILES['pdf']['tmp_name'];
  $file_up_name = $file_name;
  move_uploaded_file($tmp_name, "../../pdfs/".$file_up_name);

  mysqli_query($con,"INSERT INTO `pdfs`(`file_name`,`course_category`) VALUES ('$file_name','$category')");
  echo("The file was uploaded successfully");


?>