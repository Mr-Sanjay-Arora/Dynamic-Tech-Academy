<?php 
session_start();

include("../../env/database.php");
include("../../env/constants.php");
include("../../env/functions.php");


if(isset($_POST["add"])){

    $notification = get_safe_value($_POST['note']);
    
    if($notification == null){
        echo "Empty Notification cannot be generated. Please enter something.";
    }
    else{
        mysqli_query($con,"INSERT INTO `announcements`(`news_description`,`status`) VALUES('$notification','1')");
        echo "Notification has been generated!";
        
    }
    redirect("notifications");
}


if(isset($_POST["modify"])){
    
    $id = get_safe_value($_POST['id']);
    $status = get_safe_value($_POST['status']);

    mysqli_query($con,"UPDATE `announcements` SET `status`= '$status' where id='$id'");
    echo "Notification has been modified";
    redirect("notifications");
}

if(isset($_POST["delete"])){
    $id = get_safe_value($_POST['id']);
    mysqli_query($con,"DELETE FROM `announcements` WHERE id='$id'");
    redirect("notifications");
    
}

?>