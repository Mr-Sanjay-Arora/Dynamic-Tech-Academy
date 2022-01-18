<?php 
session_start();

include("../../env/database.php");
include("../../env/constants.php");
include("../../env/functions.php");

    $id = get_safe_value($_GET['id']);
    mysqli_query($con,"DELETE FROM `files` WHERE file_id='$id'");
    redirect("../watchouts");
    
?>