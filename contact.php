<?php

session_start();

include("env/database.php");
include("env/constants.php");
include("env/functions.php");

// if(isset($_SESSION["user_loggedIn"]) == null || $_SESSION["userType"] != "student"){
//     redirect(FRONT_SITE_PATH."students");
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo FRONT_SITE_NAME." - Contact"?></title>
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
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/unicons.css'>
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/footer.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/navigation.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/slick-theme.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/slick.css?h=<?php random()?>">
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/styles.css?h=<?php random()?>">
</head>

<body class="bg-white">
<nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
    <div class="container-fluid mx-5"><a class="navbar-brand" href="<?php echo FRONT_SITE_PATH?>"><img src="<?php echo FRONT_SITE_PATH?>assets/img/logo.png" width="150px" class="navbar-brand"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link " href="<?php echo FRONT_SITE_PATH?>">Home</a></li>
                <li class="nav-item"><a class="nav-link " href="about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="index#courses">Courses</a></li>
                <li class="nav-item"><a class="nav-link active" href="contact">Contact</a></li>
            </ul><span class="navbar-text actions"> <a class="btn btn-login" href="https://learn.dynamictechacademy.com/">Log In</a></span>
        </div>
    </div>
</nav>
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);padding:40px;background:#f0f0f0;text-align:center" aria-label="breadcrumb">
  <ol class="breadcrumb mb-0">
    <li class="breadcrumb-item"><a href="https://dynamictechacademy.com/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact</li>
  </ol>
</nav>
    <section class="contact-clean">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6"><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAs0Ojbm2arIMiejQxdSj0sD2ZVYEWNopY&q=5557+Baltimore+Ave+500+922,+Hyattsville,+MD+20781,+USA&zoom=16" width="100%" height="600"></iframe></div>
                <div class="col-12 col-md-6 mt-4 mt-md-0">
                    <form method="post" id="contact" class="leads-form">
                        <h2 class="text-center">For all your doubts!<br>We're here...</h2>
                        <div class="mb-3"><div class="form-group"><label>Full Name</label><input class="form-control" type="text" name="name"></div></div>
                        <div class="mb-3"><div class="form-group"><label>Email Address</label><input class="form-control" type="email" name="email" ></div></div>
                        <div class="mb-3"><div class="form-group"><label>Contact Number</label><input class="form-control" type="tel" name="contact" id="contact-input"></div></div>
                        <div class="mb-3"><div class="form-group"><label>Message</label><textarea class="form-control" name="message" rows="5"></textarea></div></div>
                        <div class="message text-center my-3"></div>
                        <div class="mb-3"><button class="btn btn-primary btn-block btn-detail" type="submit">Send an Enquiry</button></div>
                        
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="card contact-details">
                        <div class="card-body"><i class="material-icons mb-3 contact-icons">my_location</i>
                            <h6 class="card-title mb-0 fw-bold">Locate us at</h6>
                            <p class="card-text mt-1">5557 Baltimore Avenue<br>Suite 500-922<br>Hyattsville, MD 20781<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card contact-details">
                        <div class="card-body"><i class="material-icons mb-3 contact-icons">av_timer</i>
                            <h6 class="card-title mb-0 fw-bold">Working Hours</h6>
                            <p class="card-text mt-1">Monday - Friday<br>8:00 am - 6:00 pm</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card contact-details">
                        <div class="card-body"><i class="material-icons mb-3 contact-icons">phone</i>
                            <h6 class="card-title mb-0 fw-bold">Call Us</h6>
                            <p class="card-text mt-1"><a href="tel:(833) 539-6264">(833) 539-6264</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card contact-details">
                        <div class="card-body"><i class="material-icons mb-3 contact-icons">email</i>
                            <h6 class="card-title mb-0 fw-bold">Drop an email</h6>
                            <p class="card-text mt-1"><a href="mailto:info@dynamictechdmv.com">info@dynamictechdmv.com<br></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-clean">
        <div class="container">
            <hr class="hr-light mb-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 text-center text-md-start item social">
                    <h3>SOCIAL</h3><a href="https://www.facebook.com/dynamitechdmv" target="_blank">Facebook</a>
                </div>
                <div class="col-12 col-md-2 text-center text-md-end item">
                    <h3>Courses</h3>
                    <ul>
                        <?php
                                    $query = mysqli_query($con, "select * from course_master ORDER BY id");
                                    $check=mysqli_num_rows($query);
                                    if($check>0){	
                                        while($row = mysqli_fetch_array($query)){
                                ?>
                                        <li><a href="<?php echo $row["course_url"]?>" target="_blank"><?php echo $row["course_name"]?></a></li>
                                    
                                    <?php } }?>
                        
                    </ul>
                </div>
                <div class="col-12 col-md-2 text-center text-md-end item">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="<?php echo FRONT_SITE_PATH?>about">About</a></li>
                        <!--<li><a href="#">Support</a></li>-->
                        <li><a href="<?php echo FRONT_SITE_PATH?>contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-lg-6 text-center text-md-start">
                    <p class="copyright">Dynamic tech © <span id="current_year"></span>. All Rights Reserved</p>
                </div>
                <div class="col-12 col-lg-6 text-center text-md-start">
                    <ul class="list-inline text-lg-end">
                        <li class="list-inline-item"><a href="privacy-policy">PRIVACY POLICY</a></li>
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
	
	<!--<script src="https://code.jquery.com/jquery-3.6.0.js"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="<?php echo FRONT_SITE_PATH?>assets/js/custom.js?h=<?php random()?>"></script>
    <script>
    var input = document.querySelector("#contact-input");
    window.intlTelInput(input, {
      separateDialCode: true
    });
</script>

</body>

</html>