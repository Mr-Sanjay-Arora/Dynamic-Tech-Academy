<?php

session_start();

include("../../env/database.php");
include("../../env/constants.php");
include("../../env/functions.php");

if(isset($_SESSION["user_loggedIn"]) != null && $_SESSION["userType"] == "teacher"){
    redirect(FRONT_PATH_TEACHER."dashboard");
}
elseif(isset($_SESSION["user_loggedIn"]) != null && $_SESSION["userType"] == "student"){
    redirect(FRONT_PATH_STUDENT."dashboard");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dynamic Tech Academy</title>
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
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo FRONT_SITE_PATH?>/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/footer.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/styles.css?h=<?php random()?>">
</head>

<body class="bg-white">
    <h2 class="text-center mt-5 fw-bold">Expertise,<br/>in your hand!</h2>
    <div class="login-wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="https://image.freepik.com/free-vector/online-learning-concept-illustration_114360-4735.jpg" alt="Login Image for Students" width="100%">
                </div>
                <div class="col-lg-6">
                    <form class="login-form" method="post" id="t_login">
                        <h4><strong>Welcome Back, Teacher.</strong></h4>
                        <p class="text-black-50" style="line-height: 1.3;">Log in with your credentials received your mailbox.</p>
                        <hr class="hr-light">
                            <label class="form-label">Your e-mail</label>
                            <input class="form-control" type="email" placeholder="name@domain.com" name="teacher_email" id="t_mail">
                            <label class="form-label mt-3">Your Password</label>
                            <input class="form-control" type="password" placeholder="********" name="teacher_password" id="t_pass">

                        
                        <p class="text-end mt-2 mb-0"><small><a href="#">Forgot Password?</a></small></p>
                        
                        <button class="btn btn-primary btn-block btn-detail mt-3" type="submit" id="t_submit">Log in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div class="toast align-items-center bg-dark text-white" id="message" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                </div>
            </div>
        </div>
    </div>

<!-- Start: Footer -->
<footer class="footer pos-relative">
            <!-- Start: Copyright -->
                <p class="copyright">Dynamic Tech Academy © <span id="current_year"><?php echo date("Y")?></span>. All Rights Reserved &amp; made with ❤ by Dynamiers Lab</p>
            <!-- End: Copyright -->
        </footer>
    <!-- End: Footer -->
</body>
<?php include_once("front/scripts.php")?>
</html>