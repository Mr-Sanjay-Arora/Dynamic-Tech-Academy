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
    <title><?php echo FRONT_SITE_NAME." - About Us"?></title>
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
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/styles.css?h=<?php random()?>">
</head>

<body class="bg-white">
<nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
    <div class="container-fluid mx-5"><a class="navbar-brand" href="<?php echo FRONT_SITE_PATH?>"><img src="<?php echo FRONT_SITE_PATH?>assets/img/logo.png" width="150px" class="navbar-brand"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link " href="<?php echo FRONT_SITE_PATH?>">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="index#courses">Courses</a></li>
                <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
            </ul><span class="navbar-text actions"> <a class="btn btn-login" href="https://learn.dynamictechacademy.com/">Log In</a></span>
        </div>
    </div>
</nav>
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);padding:40px;background:#f0f0f0;text-align:center" aria-label="breadcrumb">
  <ol class="breadcrumb mb-0">
    <li class="breadcrumb-item"><a href="<?php echo FRONT_SITE_PATH?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">About Dynamic Tech</li>
  </ol>
</nav>
<div class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="banner-head fw-bold">What is <span>Dynamic Tech</span></h1>
                <hr class="hr-light" />
                <p>Dynamic Tech is an online platform offering customized Administration and various Preparation programmes to all of our students. Students can access the resources from anywhere, anytime. We have a group of highly-qualified teachers which stay connected with our students.</p>
            </div>
            <div class="col-md-12 mt-5">
                <h1 class="banner-head fw-bold">Our <span>Keypoints</span></h1>
                <hr class="hr-light" />
                <p><strong>Flexible:</strong> Students can enroll on our platform at any time having a full access to their courses.  Our curriculum allows our students to study at their own pace:  anywhere, anytime, all online.</p>
                <p><strong>High Quality:</strong> All of our teachers are highly-experienced, highly-qualified, caring professionals. Our instruction is mastery-based, and we take a whole-person approach to learning.</p>
                <p><strong>Personalized:</strong> We connect with our students personally. We customize our program to the dreams, goals, needs and ambitions of each student, and we assist each student to develop his or her own career plans. Our students are well-known and cared for by our teachers.</p>
                <p><strong>Comprehensive:</strong> We offer Honors and AP courses through our Apex curriculum. All of our  curriculum provides a wide variety of elective courses. We also encourage participation in dual-enrollment courses in the student’s local college.</p>
                <p><strong>Adaptive:</strong> We offer four online educational courses:  AWS SysOps Admin, LINUX (RED HAT) Admin, Certification Preps and Interview Preps.</p>
                <p><strong>Responsive:</strong> Teachers communicate regularly with students via e-mail, calls.  Lessons are graded within a day of submission.</p>
                <p><strong>Affordable:</strong>  <u>Our costs are competitive</u>.  Each full-time enrollment offer various core classes for our courses.</p>
            </div>
            <div class="col-md-12 mt-5">
            <h1 class="banner-head fw-bold">Five <span>Spheres,</span><br/>One Mission</h1>
                <hr class="hr-light" />
                <p>Dynamic Tech employs a holistic approach in service delivery, ensuring complete, well-functioning IT systems that efficiently support mission-critical purposes.</p>
                <div class="text-center">
                    <img src="<?php echo FRONT_SITE_PATH?>assets/img/mission.png" class="img-fluid my-5 mission-img" alt="">
                </div>
            </div>

        </div>
    </div>
</div>

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
                    <p class="copyright">Dynamic tech © <?php echo date("Y")?>. All Rights Reserved</p>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
 <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script src="<?php echo FRONT_SITE_PATH?>assets/js/custom.js?h=<?php random()?>"></script>
</body>

</html>