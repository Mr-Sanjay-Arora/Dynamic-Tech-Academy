<?php

session_start();

include("../env/database.php");
include("../env/constants.php");
include("../env/functions.php");

if(isset($_SESSION["user_loggedIn"]) != null && $_SESSION["userType"] == "teacher"){
    redirect("t");
}
elseif(isset($_SESSION["user_loggedIn"]) != null && $_SESSION["userType"] == "student"){
    redirect("s");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo FRONT_SITE_NAME?> - Login</title>
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
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/footer.css">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/styles.css">
</head>

<body style="background-image: url(&quot;assets/img/square_bg.png&quot;);">
    <div class="login-wrapper">
        <h2 class="text-center pb-5">Welcome to<strong> <?php echo FRONT_SITE_NAME?></strong></h2>
        <div class="card">
            <div class="card-body text-center">
                <h6 class="text-uppercase card-title" style="letter-spacing: 2px;font-weight: 900;">Choose your Role!</h6>
                    <a class="card-link m-3" href="s">
                        <img class="img-fluid login-img" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="left" src="<?php echo FRONT_SITE_PATH?>assets/img/student_login.png" title="I'm a Student">
                    </a>
                    <a class="card-link m-3" href="t">
                        <img class="img-fluid login-img" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" src="<?php echo FRONT_SITE_PATH?>assets/img/teacher_login.png" title="I'm a Teacher">
                    </a>
            </div>
        </div>
    </div>
    <!-- Start: Footer -->
        <footer class="footer">
            <!-- Start: Copyright -->
                <p class="copyright"><?php echo FRONT_SITE_NAME?> © <span id="current_year"><?php echo date("Y")?></span>. All Rights Reserved &amp; made with ❤ by <a href="https://dynamierslab.in">Dynamiers Lab</a></p>
            <!-- End: Copyright -->
        </footer>
    <!-- End: Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>