<?php 
session_start();

include("../../env/database.php");
include("../../env/constants.php");
include("../../env/functions.php");

$course_id = get_safe_value($_POST['course_id']);




if(isset($_POST['student_course'])){
	$student_id = get_safe_value($_POST['student_id']);
	$check=mysqli_num_rows(mysqli_query($con,"select * from student_courses where `course_id`='$course_id' and `student_id`='$student_id'"));
		if($check>0){
			echo("Course already added!");
		}else{
			mysqli_query($con,"INSERT INTO `student_courses`(`course_id`,`student_id`) VALUES('$course_id','$student_id')");
			echo("Course was successfully added to the profile of the student!");
	}
}

if(isset($_POST['teacher_course'])){
	$teacher_id = get_safe_value($_POST['teacher_id']);
	$check=mysqli_num_rows(mysqli_query($con,"select * from teacher_courses where `course_id`='$course_id' and `teacher_id`='$teacher_id'"));
		if($check>0){
			echo("Course already alloted!");
		}else{
			mysqli_query($con,"INSERT INTO `teacher_courses`(`course_id`,`teacher_id`) VALUES('$course_id','$teacher_id')");
			echo("Course was successfully alloted to the teacher!");
	}
}

?>