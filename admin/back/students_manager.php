<?php

require '../../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

session_start();

include("../../env/database.php");
include("../../env/constants.php");
include("../../env/functions.php");

$first_name = get_safe_value($_POST['first_name']);
$middle_name = get_safe_value($_POST['middle_name']);
$last_name = get_safe_value($_POST['last_name']);
$email = get_safe_value($_POST['email']);
$contact = get_safe_value($_POST['contact']);
$additional_contact = get_safe_value($_POST['additional_contact']);
$gender = get_safe_value($_POST['gender']);
$dob = get_safe_value($_POST['dob']);
$institute_name = get_safe_value($_POST['institute_name']);
$address = get_safe_value($_POST['address']);

$password = get_safe_value($_POST['password']);


$added_on=date('Y-m-d h:i:s');

$check=mysqli_num_rows(mysqli_query($con,"select * from students where email='$email'"));
	if($check>0){
        echo("Email ID already exists!");
	}else{
        if(!empty($first_name) && !empty($middle_name) && !empty($last_name) && !empty($email) && !empty($contact) && !empty($gender) && !empty($dob) && !empty($institute_name) && !empty($address) && !empty($password)){
            $new_password=password_hash($password,PASSWORD_BCRYPT);
            $slug_url = md5($email);
            mysqli_query($con,"INSERT INTO `students`(`slug_url`,`profileimg`, `first_name`, `middle_name`, `last_name`, `email`, `password`, `contact`, `additional_contact`, `gender`, `date_birth`, `institute_name`, `curent_address`, `status`) VALUES ('$slug_url','trialPic.png','$first_name','$middle_name','$last_name','$email','$new_password','$contact','$additional_contact','$gender','$dob','$institute_name','$address','0')");
            echo "Student was created successfully";
            
            $StudentEmail = $email;
        $StudentName = $first_name;
        $StudentPassword = $password;
        
        $html = '<!DOCTYPE html>
        <html>
        
        <head>
            <title></title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <style type="text/css">
                @media screen {
                    @font-face {
                        font-family: "Lato";
                        font-style: normal;
                        font-weight: 400;
                        src: local("Lato Regular"), local("Lato-Regular"), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format("woff");
                    }
        
                    @font-face {
                        font-family: "Lato";
                        font-style: normal;
                        font-weight: 700;
                        src: local("Lato Bold"), local("Lato-Bold"), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format("woff");
                    }
        
                    @font-face {
                        font-family: "Lato";
                        font-style: italic;
                        font-weight: 400;
                        src: local("Lato Italic"), local("Lato-Italic"), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format("woff");
                    }
        
                    @font-face {
                        font-family: "Lato";
                        font-style: italic;
                        font-weight: 700;
                        src: local("Lato Bold Italic"), local("Lato-BoldItalic"), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format("woff");
                    }
                }
        
                /* CLIENT-SPECIFIC STYLES */
                body,
                table,
                td,
                a {
                    -webkit-text-size-adjust: 100%;
                    -ms-text-size-adjust: 100%;
                }
        
                table,
                td {
                    mso-table-lspace: 0pt;
                    mso-table-rspace: 0pt;
                }
        
                img {
                    -ms-interpolation-mode: bicubic;
                }
        
                /* RESET STYLES */
                img {
                    border: 0;
                    height: auto;
                    line-height: 100%;
                    outline: none;
                    text-decoration: none;
                }
        
                table {
                    border-collapse: collapse !important;
                }
        
                body {
                    height: 100% !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    width: 100% !important;
                }
        
                /* iOS BLUE LINKS */
                a[x-apple-data-detectors] {
                    color: inherit !important;
                    text-decoration: none !important;
                    font-size: inherit !important;
                    font-family: inherit !important;
                    font-weight: inherit !important;
                    line-height: inherit !important;
                }
        
                /* MOBILE STYLES */
                @media screen and (max-width:600px) {
                    h1 {
                        font-size: 32px !important;
                        line-height: 32px !important;
                    }
                }
        
                /* ANDROID CENTER FIX */
                div[style*="margin: 16px 0;"] {
                    margin: 0 !important;
                }
            </style>
        </head>
        
        <body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
            <!-- HIDDEN PREHEADER TEXT -->
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <!-- LOGO -->
                <tr>
                    <td bgcolor="antiquewhite" align="center">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td align="center" valign="top" style="padding: 40px 10px 40px 10px;"> </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="antiquewhite" align="center" style="padding: 0px 10px 0px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
                                    <h3 style="font-size: 32px; font-weight: 400; margin: 2;">Welcome, '.$StudentName.'!</h3> <img src=" https://img.icons8.com/clouds/100/000000/handshake.png" width="125" height="120" style="display: block; border: 0px;" />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 40px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                    <p style="margin: 20px;">We are excited to have you get started. Please find your login credentials below:</p>
                                    <p style="margin: 0 0 5px 20px;">UserName: '.$StudentEmail.'</p>
                                    <p style="margin: 0 0 10px 20px;">Password: '.$StudentPassword.'</p>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" align="left">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td align="center" style="border-radius: 3px;" bgcolor="#FFA73B"><a href="https://learn.dynamictechacademy.com" target="_blank" style="font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #FFA73B; display: inline-block;">Get Started</a></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr> <!-- COPY -->
                            <tr>
                                <td bgcolor="#ffffff" align="center" style="padding: 0px 30px 20px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                    <p style="margin: 20px;">If you have any questions, just mail us at <a href="mailto://support@dynamictechacademy.com">Click here</a><br/>We are always happy to help out.</p>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" align="center" style="padding: 30px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                    <p style="margin: 20px;">Cheers,<br>Dynamic Tech Team</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#f4f4f4" align="center" style="padding: 30px 10px 0px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#FFECD1" align="center" style="padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                    <h2 style="font-size: 20px; font-weight: 400; color: #111111; margin-top: 20px;">Need more help?</h2>
                                    <p style="margin-bottom: 30px;"><a href="https://dynamictechacademy.com/contact" target="_blank" style="color: #FFA73B;">We&rsquo;re here to help you out</a></p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        
        </html>';
        
            $mail = new PHPMailer;
        	$mail->Host="smtp.hostinger.com";
        	$mail->Port="587";
        	$mail->SMTPAuth="TLS";
        	$mail->Username="user@site.com";
        	$mail->Password="password";
        	$mail->setFrom('no-reply@dynamictechacademy.com','Dynamic Tech Academy');
        	$mail->addAddress($StudentEmail);
        	$mail->isHTML('true');
        	$mail->Subject = 'Thanks for registering with us!';
        	$mail->Body= $html;
        
        	if (!$mail->Send()) {
        		$result="Error";
        	}
        }
        else{
            echo "Please provide complete details of the Student";
        }
        
    }


?>