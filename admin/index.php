<?php

session_start();

include("../env/database.php");
include("../env/constants.php");
include("../env/functions.php");

if(isset($_SESSION["user_loggedIn"]) != null  && $_SESSION["userType"] == "admin"){
    redirect(FRONT_SITE_PATH."admin/dashboard");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo FRONT_SITE_NAME?> - Admin Access Area</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&amp;display=swap">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/footer.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/navigation.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/slick-theme.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/slick.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/styles.css?h=<?php random()?>">
    
</head>

<body>
    <div class="login-wrapper">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <form class="my-5" method="post" id="admin_login">
                                <h1><strong>Admin Log in.</strong></h1>
                                <p class="text-black-50" style="line-height: 1.3;">Log in with your credentials that you have received your inbox.</p>
                                <hr class="hr-light">
                                    <label class="form-label">Your e-mail</label>
                                    <input class="form-control" type="email" placeholder="name@domain.com" name="ad_mail" id="ad_mail">
                                    <label class="form-label mt-3">Your Password</label>
                                    <input class="form-control" type="password" placeholder="at least 8 characters" name="ad_pass" id="ad_pass">

                                <button class="btn btn-primary btn-detail btn-block my-4" type="submit">Log in</button>
                            </form>
                        </div>
                    </div>
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
    
</body>
<?php include_once("front/scripts.php")?>
</html>