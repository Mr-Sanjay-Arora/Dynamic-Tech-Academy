<?php 
session_start();

include("../../../env/database.php");
include("../../../env/constants.php");
include("../../../env/functions.php");

$password_change = get_safe_value($_POST['password_change']);

if(!empty($password_change)){
$new_password=password_hash($password_change,PASSWORD_BCRYPT);

// echo $_SESSION['user_id'];
// die();


mysqli_query($con,"UPDATE `students` SET `password`= '$new_password' where `id`='".$_SESSION['user_id']."'");
echo("Password changed successfully!");
redirect($_SERVER['self']);
}

?>