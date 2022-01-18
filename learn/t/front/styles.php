<?php

session_start();

include("../../env/constants.php");
include("../../env/database.php");
include("../../env/functions.php");

if(isset($_SESSION["user_loggedIn"]) == null || $_SESSION["userType"] != "teacher"){
    redirect(FRONT_PATH_TEACHER);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo FRONT_SITE_NAME." - ".$page_title?></title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo FRONT_SITE_PATH?>/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo FRONT_SITE_PATH?>/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo FRONT_SITE_PATH?>/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo FRONT_SITE_PATH?>/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo FRONT_SITE_PATH?>/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo FRONT_SITE_PATH?>/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo FRONT_SITE_PATH?>/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo FRONT_SITE_PATH?>/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo FRONT_SITE_PATH?>/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo FRONT_SITE_PATH?>/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo FRONT_SITE_PATH?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo FRONT_SITE_PATH?>/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo FRONT_SITE_PATH?>/favicon-16x16.png">
    <!--<link rel="manifest" href="<?php echo FRONT_SITE_PATH?>/manifest.json">-->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo FRONT_SITE_PATH?>/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/unicons.css'>
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/footer.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/navigation.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/slick-theme.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/slick.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/styles.css?h=<?php random()?>">
</head>