<?php 
session_start();

include("../../env/database.php");
include("../../env/constants.php");
include("../../env/functions.php");


$user_id = get_safe_value($_POST['id']);
$status = get_safe_value($_POST['status']);
// echo $user_id;

mysqli_query($con,"UPDATE `students` SET `status`= '$status' where id='$user_id'");
$query = mysqli_query($con,"SELECT slug_url from `students` where id=$user_id");
$row = mysqli_fetch_assoc($query);
echo "Student has been modified!";
redirect($row["slug_url"]);

?>