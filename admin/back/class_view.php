<?php 
session_start();

include("../../env/database.php");
include("../../env/constants.php");
include("../../env/functions.php");

$id = get_safe_value($_POST['id']);
$status = get_safe_value($_POST['status']);



mysqli_query($con,"update class_master set `class_visibility`='$status' where `class_id` = '$id'");
redirect($id);
echo("Class Visibility modified!");

?>