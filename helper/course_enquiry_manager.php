<?php

require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

session_start();

include("../env/database.php");
include("../env/constants.php");
include("../env/functions.php");

$name = get_safe_value($_POST['name']);
$email = get_safe_value($_POST['email']);
$contact = get_safe_value($_POST['contact']);
$course_category = get_safe_value($_POST['course_category']);

// echo $name."<br/>".$email."<br/>".$contact."<br/>".$course_category;


$check=mysqli_num_rows(mysqli_query($con,"select * from course_enquiry where `email` = '$email' and `course_category` = '$course_category'"));
	if($check>0){
        echo("Your request for $course_category has been already sent!");
	}
	else{
mysqli_query($con,"INSERT INTO `course_enquiry`(`name`, `email`, `contact`, `course_category`) VALUES ('$name','$email','$contact','$course_category')");


$html = '<html>
                <head>
                    <title></title>
                    <style>
                        p{
                            font-size:14px
                        }
                    </style>
                </head>
                <body>
                    <h1>Course Registration Form<h1>
                    <p>Get all the registrations coming from the students enrolling for courses</p>
                    <br/>
                    <p><b>Student Name:</b> '.$name.'</p>
                    <p><b>Email ID:</b> <a href="mailto:'.$email.'">'.$email.'</a></p>
                    <p><b>Contact Number:</b> <a href="tel://'.$contact.'">'.$contact.'</a></p>
                    <p><b>Course Name:</b> '.$course_category.'</p>
                </body>
            </html>
        ';
    $mail = new PHPMailer;
// 	$mail->SMTPDebug = SMTP::DEBUG_SERVER;                                        //Enable verbose debug output
    $mail->isSMTP(); 
	$mail->Host= 'mail.dynamictechacademy.com';
	$mail->SMTPSecure = "tls"; 
	$mail->Port="587";
	$mail->SMTPAuth=true;
	$mail->Username="user@site.com";
	$mail->Password="password";
	$mail->setFrom('no-reply@dynamictechacademy.com','Dynamic Tech Academy');
	$mail->addAddress('info@dynamictechdmv.com');
	$mail->isHTML('true');
	$mail->Subject = 'User Queries @ Dynamic Tech Academy!';
	$mail->Body= $html;

	if (!$mail->Send()) {
		$result="Error";
	}

echo "Your enquiry for ".$course_category." has been generated. We'll be attending you soon!";
}
?>