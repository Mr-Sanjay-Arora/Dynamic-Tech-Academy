<?php 

require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

session_start();

include("../env/database.php");
include("../env/constants.php");
include("../env/functions.php");

$name = get_safe_value($_POST['name']);
$email = get_safe_value($_POST['email']);
$contact = get_safe_value($_POST['contact']);
$message = get_safe_value($_POST['message']);

if(empty($name)){
    echo("Come on, You have a name!");
}
elseif(empty($email)){
    echo("An E-mail is a must!");
}
elseif(empty($contact)){
    echo(":( We need your number to reach out to you!");
}
elseif(empty($message)){
    echo("Please drop in your query.");
}
else{
    mysqli_query($con,"INSERT INTO `contact_form`(`name`,`email`,`contact`,`message`) VALUES('$name','$email','$contact','$message')");
    
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
                    <h1>Enquiry Form<h1>
                    <p>Get all the queries coming from the users directly to your mailbox</p>
                    <br/>
                    <p><b>Name:</b> '.$name.'</p>
                    <p><b>Email ID:</b> <a href="mailto:'.$email.'">'.$email.'</a></p>
                    <p><b>Contact Number:</b> <a href="tel://'.$contact.'">'.$contact.'</a></p>
                    <p><b>Message:</b> '.$message.'</p>
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
	$mail->addAddress($email,"$name");
	$mail->addBcc('info@dynamictechdmv.com');
	$mail->isHTML('true');
	$mail->Subject = 'User Queries @ Dynamic Tech Academy!';
	$mail->Body= $html;

	if (!$mail->Send()) {
		$result="Error";
	}
    
    echo("Your message was sent Successfully!");
}

?>