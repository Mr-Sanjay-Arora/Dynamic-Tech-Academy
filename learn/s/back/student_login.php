<?php

session_start();

include("../../../env/database.php");
include("../../../env/constants.php");
include("../../../env/functions.php");

$email = get_safe_value($_POST['student_email']);
$password = get_safe_value($_POST['student_password']);

if($email && $password != null){
    $res=mysqli_query($con,"select * from students where email='$email'");
    $check=mysqli_num_rows($res);
    if($check>0){	
        $row=mysqli_fetch_assoc($res);
        $status=$row['status'];
        $dbpassword=$row['password'];
            if($status==1){
                if(password_verify($password,$dbpassword)){
                    $_SESSION['user_loggedIn']  =   true;
                    $_SESSION['userType']       =   "student";
                    $_SESSION['userName']       =   $row["first_name"];
                    $_SESSION['user_id']        =   $row["id"];
                    echo "Logged in Successfully";
                    redirect("dashboard");
                }
                else{
                    echo "Wrong Password";
                }
            }
            else{
                echo "The account is deactivated. Please contact the administrator!";
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