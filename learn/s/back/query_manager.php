<?php 
session_start();

include("../../../env/database.php");
include("../../../env/constants.php");
include("../../../env/functions.php");

$student_id = get_safe_value($_POST['userID']);
$subject = get_safe_value($_POST['enquiry_subject']);
$message = get_safe_value($_POST['message']);

if(empty($subject)){
    echo("Come on, You have a Topic!");
}
elseif(empty($message)){
    echo("Please drop in your query.");
}
else{
    mysqli_query($con,"INSERT INTO `enquiry_form`(`student_id`,`subject_category`,`message`) VALUES('$student_id','$subject','$message')");
    echo("Your query has been registered & will be attend soon...");
}

?>