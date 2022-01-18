<?php

session_start();

include("env/database.php");
include("env/constants.php");
include("env/functions.php");

// $course_url = $_GET["course_url"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no">
    <title><?php echo FRONT_SITE_NAME." - AWS Cloud Engineer Course"?></title>
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
    <link rel="manifest" href="<?php echo FRONT_SITE_PATH?>/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo FRONT_SITE_PATH?>/ms-icon-144x144.png">
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
    <style>
        .course-tab-wrapper {
            position: relative;
            border: 1px solid #ebecf2;
            border-radius: 10px;
            overflow: hidden;
        }
        .course-tab-btn li a {
            display: inline-block;
            width: 100%;
            text-align: center;
            background: #f7f8fa;
            position: relative;
            font-size: 13px;
            height: 55px;
            color: #5d5a67;
            font-weight: 600;
            border-bottom: 1px solid #ebecf2!important;
            border-right: 1px solid #ebecf2!important;
        }
        .nav-link:focus, .nav-link:hover{
            color:inherit;
        }
        .course-top {
            position: relative;
            margin: 0 0 55px;
            padding-right: 150px;
        }
        .course-top .course-price {
            position: absolute;
            right: 0;
            top: 0;
            margin: 0 0;
            padding: 16px 22px 13px;
            border-radius: 5px;
            font-size: 20px;
            text-align:center;
            font-weight: 700;
            color: #36c5fd;
            background: rgb(147 180 255 / 10%);
        }
        .course-top .course-price span {
            font-size: 14px;
            font-weight: 600;
            color: #7e7c87;
            display: block;
            margin: 0 0;
        }
        .course-tab-btn li:last-child a {
            border-right: none!important;
        }
        .course-tab-btn li a.active, .course-tab-btn li a:hover {
            color: #36c5fd;
            border-bottom: none;
            background: #fff;
        }
        .course-tab-btn li a.active:after, .course-tab-btn li a:hover:after {
            width: 100%;
        }
        .course-tab-btn li a:after {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            width: 0;
            height: 4px;
            background: #36c5fd;
            content: '';
            margin: auto;
            -webkit-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }
        .curriculum{
            padding:0 0;
            list-style:none;
        }
        .card:nth-child(even){
            background:#f7f8fa;
        }
        .info-course ul {
    margin: 0;
    padding: 0;
}
        .course-sidebar .widget ul li {
    list-style: none;
    display: block;
}

.info-course li {
    list-style: none;
    display: inline-block;
    width: 100%;
    font-size: 14px;
    line-height: 40px;
    color: #5d5a67;
    font-weight: 400;
    border-bottom: 1px solid #eceef3;
    margin: 0;
    padding: 0 0 1px;
}
.info-course li i {
    display: inline-block;
    color: #36c5fd;
    font-size: 16px;
    line-height: 50px;
    margin-right: 14px;
}
.info-course li:last-child {
    border: none;
}
.info-course li span {
    display: inline-block;
    color: #2c234d;
    font-weight: 600;
}
.course-perks i{
    font-size:40px;
    color: #36c5fd;
    margin:10px;
}
@media (max-width:768px){
    .enroll-bar {
        position: fixed;
        display:block!important;
        bottom: 0;
        left: 0;
        width: 100%;
        z-index: 1111;
        padding:10px 5px;
        background:#ffffff;
        box-shadow:0 -5px 10px rgba(0,0,0,0.08);
    }
    .enroll-bar .btn-detail{
        margin:0;
        width:100%;
        height:50px;
    }
}
    </style>
</head>

<body class="bg-white">
<nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
    <div class="container-fluid mx-5"><a class="navbar-brand" href="<?php echo FRONT_SITE_PATH?>"><img src="<?php echo FRONT_SITE_PATH?>assets/img/logo.png" width="150px" class="navbar-brand"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link " href="<?php echo FRONT_SITE_PATH?>">Home</a></li>
                <li class="nav-item"><a class="nav-link " href="about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="index#courses">Courses</a></li>
                <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
            </ul>
            <span class="navbar-text actions"> <a class="btn btn-login" href="https://learn.dynamictechacademy.com/">Log In</a></span>
        </div>
    </div>
</nav>

<?php
                $query = mysqli_query($con, "select * from course_master where course_url = 'aws-cloud-engg'");
                $check=mysqli_num_rows($query);
                if($check>0){	
                    while($row = mysqli_fetch_array($query)){
            ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8 my-5">
            
            <div class="course-top">
                <h3 class="fw-bold pt-4"><?php echo $row["course_name"]?></h3>
                <div class="course-price">
                    $<?php echo $row["course_fees"]?>
                    <span style="text-decoration:line-through">$4500</span>
                </div>
            </div>
            <img src="https://intellipaat.com/blog/wp-content/uploads/2019/11/Cloud-Engineer-Career-Path_BIG.jpg" alt="course-banner" class="img-fluid course-banner w-100"/>
            <div class="course-tab-wrapper mt-4">
                <ul class="nav nav-justified mb-5 course-tab-btn" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link active py-3" role="tab" data-bs-toggle="tab" href="#overview">Overview</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link py-3" role="tab" data-bs-toggle="tab" href="#curriculum">Curriculum</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link py-3" role="tab" data-bs-toggle="tab" href="#certification">Certification</a></li>
                </ul>
                <div class="tab-content my-4 mb-5 mx-4">
                    <div class="tab-pane fade show active" role="tabpanel" id="overview">
                        <h5 class="fw-bold">Course Description</h5>
                        <p>AWS provides a set of flexible services designed to enable companies to more rapidly and reliably build and deliver products using AWS and DevOps practices. These services simplify provisioning and managing infrastructure, deploying application code, automating software release processes, and monitoring your application and infrastructure performance.</p>
                        <p>DevOps is the combination of cultural philosophies, practices, and tools that increases an organization’s ability to deliver applications and services at high velocity: evolving and improving products at a faster pace than organizations using traditional software development and infrastructure management processes. This speed enables organizations to better serve their customers and compete more effectively in the market.</p>
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="curriculum">
                        <h5 class="fw-bold">Curriculum</h5>
                        <ul class="curriculum">
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                    <li>Module 0: Course Overview</li>
                                    <i class="material-icons">lock</i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <li>Module 1 : Introduction To Cloud And AWS (Theory)</li>
                                    <i class="material-icons">lock</i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 1 : Introduction To Cloud And AWS (Lab)</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 2 : Security Management AWS (Theory)</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 2 : Security Management AWS (Lab)</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 3 : Object Storage Options (Theory)</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 3 : Object Storage Options (Lab)</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 4: Designing Computing Environment (Theory)</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 4: Designing Computing Environment (Lab)</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 5 : LoadBalancer, Route53 & AutoScaling (Theory)</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 5 : LoadBalancer, Route53 & AutoScaling (Lab)</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 6 : Networking and Monitoring Services (Theory)</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 6 : Networking and Monitoring Services (Lab)</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 7 : Database Server And Analytics (Theory)</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 7 : Database Server And Analytics (Lab)</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 8 : Application & Messaging Services (Theory)</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 8 : Application & Messaging Services (Lab)</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 9 : Configuration Management And Automation (Theory)</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 9 : Configuration Management And Automation (Lab)</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 10 : Architecting On AWS</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Module 11: AWS Solution Architect Exam Preparation</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Bonus 1 : AWS Migration</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Bonus 2 : Minor Projects</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Sample CV</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>AWS Solutions Architect Interview Questions and Answers</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body  d-flex align-items-center justify-content-between">
                                <li>Practice Tests</li>
                                <i class="material-icons">lock</i>
                            </div>
                            </div>
                        </ul>
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="certification">
                        <img src="https://images.credly.com/images/bf588058-87cc-4cbd-94b0-ef0385fb4371/AWS-SysOpAdmin-Associate-2020.png" alt="certificate-logo" class="img-fluid" width="200" height="200"/>
                    </div>
                </div>
            </div>
            
            
        </div>
        <div class="col-12 col-md-3">
            <div class="card sticky-top">
                <div class="card-body">
                    <div class="info-course">
                        <ul>
                            <li><i class="material-icons">sentiment_very_satisfied</i><span>Instructor: </span> Justin Case</li>
                            <li><i class="material-icons">import_contacts</i><span>Lectures: </span> 28</li>
                            <li><i class="material-icons">timer</i><span>Duration: </span> 10 weeks</li>
                            <li><i class="material-icons">wc</i><span>Enrolled: </span> 450+ students</li>
                            <li><i class="material-icons">info_outline</i><span>Language: </span> English</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="course-perks row text-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo FRONT_SITE_PATH?>assets/img/learn.svg" alt="win" class="img-fluid" style="margin-left:-80px">
                            <h6 class="mt-4">Learn latest Skills</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo FRONT_SITE_PATH?>assets/img/certificate.svg" alt="win" class="img-fluid" style="margin-left:-40px">
                            <h6 class="mt-4">Earn a Certificate</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo FRONT_SITE_PATH?>assets/img/reward.svg" alt="win" class="img-fluid" style="margin-left:-40px">
                            <h6 class="mt-4">Get your Career Reward!</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="enroll-bar d-none">
            <button class="btn btn-primary btn-detail">Buy Now</button>
        </div>
    </div>
</div>
<?php } }?>
<footer class="footer-clean">
        <div class="container">
            <hr class="hr-light mb-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 text-center text-md-start item social">
                    <h3>SOCIAL</h3><a href="https://www.facebook.com/dynamitechdmv">Facebook</a>
                </div>
                <div class="col-12 col-md-2 text-center text-md-end item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Quizzes</a></li>
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
 <!--   <div class="progress-wrap">-->
	<!--	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">-->
	<!--		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>-->
	<!--	</svg>-->
	<!--</div>-->
	
	<!--<script src="https://code.jquery.com/jquery-3.6.0.js"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script src="<?php echo FRONT_SITE_PATH?>assets/js/custom.js?h=<?php random()?>"></script>


</body>

</html>