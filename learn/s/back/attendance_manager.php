<?php 
session_start();

include("../../../env/database.php");
include("../../../env/constants.php");
include("../../../env/functions.php");


$student_id = get_safe_value($_POST['student_id']);
$class_id = get_safe_value($_POST['class_id']);
// echo $user_id;


mysqli_query($con,"INSERT INTO `attendance`(`class_id`, `student_id`) VALUES ('$class_id','$student_id')");
$row = mysqli_fetch_assoc($query);
echo "Student's attendance has been marked!";

?>