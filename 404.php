<?php

session_start();

include("env/database.php");
include("env/constants.php");
include("env/functions.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo FRONT_SITE_NAME." - :: Home Page ::"?></title>
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&amp;display=swap">
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/unicons.css'>
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/footer.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/navigation.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/styles.css?h=<?php random()?>">
    <style>
#notfound {
	position: relative;
	height: 80vh;
}
#notfound .notfound {
	position: absolute;
	left: 50%;
	top: 50%;
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
}
.notfound {
	max-width: 600px;
	width: 100%;
	padding-left: 160px;
	line-height: 1.1;
}
.notfound .notfound-404 {
	position: absolute;
	left: 0;
	top: 0;
	display: inline-block;
	width: 140px;
	height: 140px;
	background-image: url('https://colorlib.com/etc/404/colorlib-error-404-18/img/emoji.png');
	background-size: cover;
}
.notfound .notfound-404:before {
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	-webkit-transform: scale(2.4);
	-ms-transform: scale(2.4);
	transform: scale(2.4);
	border-radius: 50%;
	background-color: #f2f5f8;
	z-index: -1;
}
.notfound h1 {
	font-family: 'Nunito', sans-serif;
	font-size: 65px;
	font-weight: 700;
	margin-top: 0px;
	margin-bottom: 10px;
	color: #151723;
	text-transform: uppercase;
}
.notfound h2 {
	font-family: 'Nunito', sans-serif;
	font-size: 21px;
	font-weight: 400;
	margin: 0;
	text-transform: uppercase;
	color: #151723;
}
.notfound p {
	font-family: 'Nunito', sans-serif;
	color: #999fa5;
	font-weight: 400;
}
.notfound a {
	font-family: 'Nunito', sans-serif;
	display: inline-block;
	font-weight: 700;
	border-radius: 40px;
	text-decoration: none;
	color: #388dbc;
}
@media only screen and (max-width: 767px) {
	.notfound .notfound-404 {
		width: 110px;
		height: 110px;
	}
	.notfound {
		padding-left: 15px;
		padding-right: 15px;
		padding-top: 110px;
	}
}

</style>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
    <div class="container-fluid mx-5"><a class="navbar-brand" href="<?php echo FRONT_SITE_PATH?>"><img src="<?php echo FRONT_SITE_PATH?>assets/img/logo.png" width="150px" class="navbar-brand"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="<?php echo FRONT_SITE_PATH?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="index#courses">Courses</a></li>
                <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
            </ul><span class="navbar-text actions"> <a class="btn btn-login" href="https://learn.dynamictechacademy.com/">Log In</a></span>
        </div>
    </div>
</nav>
<div id="notfound">
<div class="notfound">
<div class="notfound-404"></div>
<h1>404</h1>
<h2>Oops! Page Not Be Found</h2>
<p>Sorry but the page you are looking for does not exist, have been removed. name changed or is temporarily unavailable</p>
<a href="https://dynamictechacademy.com">Back to homepage</a>
</div>
</div>
<footer class="footer-clean">
        <div class="container">
            <hr class="hr-light mb-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 text-center text-md-start item social">
                    <h3>SOCIAL</h3><a href="#">Facebook</a><a href="#">Instagram</a><a href="#">Twitter</a>
                </div>
                <div class="col-12 col-md-2 text-center text-md-end item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Courses</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-2 text-center text-md-end item">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="<?php echo FRONT_SITE_PATH?>about">About</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="<?php echo FRONT_SITE_PATH?>contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-lg-6 text-center text-md-start">
                    <p class="copyright">Dynamic tech © <?php echo date("Y")?>. All Rights Reserved</p>
                </div>
                <div class="col-12 col-lg-6 text-center text-md-start">
                    <ul class="list-inline text-lg-end">
                        <li class="list-inline-item"><a href="privacy-policy">PRIVACY POLICY</a></li>
                        <li class="list-inline-item"><a href="#">TERMS &amp; CONDITIONS</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		</svg>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script src="https://dynamierslab.in/assets/js/jquery.validate.min.js"></script>
<script src="<?php echo FRONT_SITE_PATH?>assets/js/custom.js?h=<?php random()?>"></script>
</body>

</html>
