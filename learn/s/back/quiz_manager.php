<?php 
session_start();

include("../../../env/database.php");
include("../../../env/constants.php");
include("../../../env/functions.php");


$student_id = get_safe_value($_POST['student_id']);
$quiz_id = get_safe_value($_POST['quiz_id']);
$question_id = get_safe_value($_POST['question_id']);
$choice = get_safe_value($_POST['choice']);

// echo $student_id."<br/>".$quiz_id."<br/>".$question_id."<br/>".$choice;

$query = mysqli_query($con,"SELECT * from `quiz_response` where `student_id` = '$student_id' and `quiz_id` = '$quiz_id' and `question_id` = '$question_id'");
if(mysqli_num_rows($query) > 0){
    mysqli_query($con,"UPDATE `quiz_response` SET `student_answer`='$choice' WHERE `quiz_id` = '$quiz_id' and `student_id` = '$student_id' and `question_id` = '$question_id'");
    echo("Answer modified");
}
else{
    mysqli_query($con,"INSERT into `quiz_response`(`quiz_id`,`student_id`,`question_id`,`student_answer`) values('$quiz_id','$student_id','$question_id','$choice')");
    $query = mysqli_query($con,"SELECT * from `student_quizzes` where `student_id` = '$student_id' and `quiz_id` = '$quiz_id'");
    if(mysqli_num_rows($query) == 0){
        mysqli_query($con,"INSERT into `student_quizzes`(`quiz_id`,`student_id`) values('$quiz_id','$student_id')");
    }
    echo("Your answer was saved!");
}


?>