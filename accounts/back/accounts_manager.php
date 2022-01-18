<?php

require '../../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

session_start();

include("../../env/database.php");
include("../../env/constants.php");
include("../../env/functions.php");

$first_name = get_safe_value($_POST['first_name']);
$last_name = get_safe_value($_POST['last_name']);
$email = get_safe_value($_POST['email']);
$contact = get_safe_value($_POST['contact']);
$institute_name = get_safe_value($_POST['qualification']);
$address = get_safe_value($_POST['address']);
$address = str_ireplace(array("\r","\n",'\r','\n'),' ', $address);



$added_on=date('d-M-Y h:i:s');

$check=mysqli_num_rows(mysqli_query($con,"select * from registrations where email='$email'"));
	if($check>0){
        echo("Duplicate Email ID found!");
	}else{
        if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($contact) && !empty($institute_name) && !empty($address)){
            mysqli_query($con,"INSERT INTO `registrations`(`first_name`, `last_name`, `email`, `contact`, `qualification`, `curent_address`) VALUES ('$first_name','$last_name','$email','$contact','$institute_name','$address')");
            
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
                        <h1>Students Registration Form<h1>
                        <p>Get students personal details & build their careers</p>
                        <br/>
                        <p><b>Student Name:</b> '.$first_name.' '.$last_name.'</p>
                        <p><b>Email ID:</b> <a href="mailto:'.$email.'">'.$email.'</a></p>
                        <p><b>Contact Number:</b> <a href="tel://'.$contact.'">'.$contact.'</a></p>
                        <p><b>Qualification:</b> '.$institute_name.'</p>
                        <p><b>Current Address:</b> '.$address.'</p>
                        <p><b>Registration Date:</b> '.$added_on.'</p>
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
            	$mail->Username="support@dynamictechacademy.com";
            	$mail->Password="support@#21dta";
            	$mail->setFrom('no-reply@dynamictechacademy.com','Dynamic Tech Academy');
            	$mail->addAddress('info@dynamictechdmv.com');
            	$mail->isHTML('true');
            	$mail->Subject = 'Registrations @ Dynamic Tech Academy!';
            	$mail->Body= $html;
            
            	if (!$mail->Send()) {
            		$result="Error";
            	}
            
            echo "Registration was successful";
        }
        else{
            echo "Please provide complete details";
        }
        
    }




?>