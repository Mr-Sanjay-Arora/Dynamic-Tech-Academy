<?php

ini_set('session.gc_maxlifetime', 86400000);
session_start();

include("../../env/database.php");
include("../../env/constants.php");
include("../../env/functions.php");

$email = get_safe_value($_POST['ad_mail']);
$password = get_safe_value($_POST['ad_pass']);

if($email && $password != null){
    $res=mysqli_query($con,"select * from admin where email='$email'");
    $check=mysqli_num_rows($res);
    if($check>0){	
        $row=mysqli_fetch_assoc($res);
        $status=$row['status'];
        $dbpassword=$row['password'];
            if($status==1){
                if(password_verify($password,$dbpassword)){
                    $_SESSION['user_loggedIn']  =   true;
                    $_SESSION['userType']       =   "admin";
                    $_SESSION['userName']       =   $row["full_name"];
                    $_SESSION['email']         =   $row["email"];
                    echo "Logged in Successfully";
                    redirect("dashboard");
                }
                else{
                    echo "Wrong Password";
                }
            }
            else{
                echo "The account is deactivated";
            }
    }
    else{
        echo "No user found with this email id";
    }
}
else{
    echo "Blank Credentials";
}

// echo $email;

?>