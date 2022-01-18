<?php

session_start();

include("../env/database.php");
include("../env/constants.php");
include("../env/functions.php");

// if(isset($_SESSION["user_loggedIn"]) != null  && $_SESSION["userType"] == "admin"){
//     redirect(FRONT_SITE_PATH."admin/dashboard");
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo FRONT_SITE_NAME?> - Register yourself with the top educators in our institute & get the best for your careers.</title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo FRONT_SITE_PATH?>apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo FRONT_SITE_PATH?>apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo FRONT_SITE_PATH?>apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo FRONT_SITE_PATH?>apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo FRONT_SITE_PATH?>apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo FRONT_SITE_PATH?>apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo FRONT_SITE_PATH?>apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo FRONT_SITE_PATH?>apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo FRONT_SITE_PATH?>apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo FRONT_SITE_PATH?>android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo FRONT_SITE_PATH?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo FRONT_SITE_PATH?>favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo FRONT_SITE_PATH?>favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo FRONT_SITE_PATH?>ms-icon-144x144.png">
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


<div class="login-wrapper" style="width:600px">
    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <form class="my-5" method="post" id="registerprogs">
                            <div class="mb-3">
                                <i class="material-icons">chevron_left</i><a href="<?php echo FRONT_SITE_PATH?>">Back to Home</a>
                            </div>
                            <h1><strong>Register</strong></h1>
                            <p class="text-black-50 text-justify" style="line-height: 1.3;">Let's get you all set up so that we can verify your personal account & start building up your careers.</p>
                            <hr class="hr-light">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">First Name</label>
                                    <input class="form-control" type="text" placeholder="" name="first_name" id="regfname">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Last Name</label>
                                    <input class="form-control" type="text" placeholder="" name="last_name" id="reglname">
                                </div>
                            </div>
                            
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">Contact Number</label>
                                    <input class="form-control" type="tel" placeholder="" name="contact" id="regphone">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input class="form-control" type="email" placeholder="" name="email" id="regemail">
                                </div>
                            </div>
                            
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="form-label">Current Address</label>
                                    <textarea class="form-control" placeholder="" name="address" id="regaddr" style="resize:none"></textarea>
                                </div>
                            </div>
                                
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="form-label">Highest Qualification</label>
                                    <input class="form-control" type="text" placeholder="" name="qualification" id="regqual">
                                </div>
                            </div>
                            
                                <div class="form-check mt-3 mb-3">
                                  <input class="form-check-input" type="checkbox" value="" id="policy_check">
                                  <label class="form-check-label" for="policy_check">
                                    I agree to all the <a href="<?php echo FRONT_SITE_PATH?>privacy-policy" target="_blank" style="color:#f97822">Privacy Policy</a>
                                  </label>
                                </div>
                            <button class="btn btn-primary btn-detail btn-block my-2" type="submit">Create Account</button>
                            <p class="mt-3 text-center">Already have an account? <a href="<?php echo FRONT_PATH_STUDENT?>">Log in</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11"><div class="toast align-items-center bg-dark text-white" id="message" role="alert" aria-live="assertive" aria-atomic="true"><div class="d-flex"><div class="toast-body"></div></div></div></div>
    <!-- Start: Footer -->
    <footer class="footer">
            <!-- Start: Copyright -->
                <p class="copyright">Dynamic Tech Academy © <span id="current_year"></span>. All Rights Reserved &amp; made with ❤ by <a href="https://dynamierslab.in" target="_blank">Dynamiers Lab</a></p>
            <!-- End: Copyright -->
        </footer>
    <!-- End: Footer -->
</body>
<div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		</svg>
	</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo FRONT_SITE_PATH?>assets/js/bs-init.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src="<?php echo FRONT_SITE_PATH?>assets/js/select2.full.min.js?h=<?php random()?>"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script src="https://dynamierslab.in/assets/js/jquery.validate.min.js"></script>
<script src="<?php echo FRONT_SITE_PATH?>assets/js/custom.js?h=<?php random()?>"></script>

</html>