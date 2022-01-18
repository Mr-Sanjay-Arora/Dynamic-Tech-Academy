<?php 
session_start();

include("../../env/database.php");
include("../../env/constants.php");
include("../../env/functions.php");

$class_name = get_safe_value($_POST['class_name']);
$class_description = get_safe_value($_POST['class_description']);
$video_id = get_safe_value($_POST['video_id']);
$course_category = get_safe_value($_POST['course_category']);
$class_date = get_safe_value($_POST['class_date']);
$start_time = get_safe_value($_POST['start_time']);
$end_time = get_safe_value($_POST['end_time']);



$check=mysqli_num_rows(mysqli_query($con,"select * from class_master where `class_name`='$class_name' order by class_name"));
	if($check>0){
        echo("Duplicate Class Found!");
	}else{
        $query = mysqli_query($con, "select * from class_master ORDER BY class_id desc LIMIT 1");
        $row = mysqli_fetch_assoc($query);
        $next_class = number_format($row["class_id"]) + 1;

        if(!empty($class_name) && !empty($class_description) && !empty($class_date)){
		    mysqli_query($con,"INSERT INTO `class_master`(`class_id`,`class_name`,`class_description`,`video_id`,`date`,`start_time`,`end_time`,`course_id`,`attendance_status`,`class_visibility`,`status`) VALUES('$next_class','$class_name','$class_description','$video_id','$class_date','$start_time','$end_time','$course_category','0','0','1')");
		    echo("Class generated successfully!");
        }
        else{
            echo("Please provide class details");
        }
}

?>