<?php

session_start();

include("env/database.php");
include("env/constants.php");
include("env/functions.php");

// if(isset($_SESSION["user_loggedIn"]) == null || $_SESSION["userType"] != "student"){
//     redirect(FRONT_SITE_PATH."students");
// }

include('helper/Mobile_Detect.php');
include('helper/BrowserDetection.php');

$browser=new Wolfcast\BrowserDetection;

$browser_name=$browser->getName();
$browser_version=$browser->getVersion();

$detect=new Mobile_Detect();

if($detect->isMobile()){
	$type='Mobile';
}elseif($detect->isTablet()){
	$type='Tablet';
}else{
	$type='PC';
}

if($detect->isiOS()){
	$os='IOS';
}elseif($detect->isAndroidOS()){
	$os='Android';
}else{
	$os='Window';
}

$url=(isset($_SERVER['HTTPS'])) ? "https":"http";
$url.="//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$ref='';
if(isset($_SERVER['HTTP_REFERER'])){
	$ref=$_SERVER['HTTP_REFERER'];
}
if(!isset($_COOKIE['visit'])){
	setCookie('visit','yes',time()+(60*60*24*30));
	$sql="insert into visitor(browser_name,browser_version,type,os,url,ref) values('$browser_name','$browser_version','$type','$os','$url','$ref')";
    mysqli_query($con,$sql);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo FRONT_SITE_NAME." - Home"?></title>
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
    <?php include_once("front/navigator.php")?>

    <div class="banner">
        <div class="banner-bg"></div>
        <div class="text-space d-flex flex-row align-items-center justify-content-center">
            <div style="width:80%">
                <div class="stars"></div>
                <h1 class="fw-bold">Welcome to <span class="text-success-gradiant font-weight-bold typewrite banner-h1" data-period="2000" data-type='[ "Dynamic Tech." ]'></span>Prepare with confidence.</h1>
                <hr class="hr-light"/>
                <p>We help people go from zero to job-ready by giving them a world-class education from industry-certified teachers and leading professionals in I.T. Furthermore, we provide you with a Professional Resume, Interview Boot camps, and job search coaching.</p>
                    <p>Get a high-paying IT with <b>Dynamic Tech Academy!</b></p>
                    <p>Whether you have some or no I.T. Background, we can teach you in just months. We've helped people like you get jobs paying 90K or even as much as 120K after six months of training!</p>
                    <p>No other program takes you from <b>ZERO</b> to <b>JOB-READY this FAST</b>.</p>
                <a href="https://accounts.dynamictechacademy.com/" class="btn btn-primary btn-srt mt-5">Register Here</a>
            </div>
        </div>
    </div>
    <section class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2>Our <span>Learning</span> Opportunity!</h2>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-3 item">
                    <div class="box"><i class="material-icons icon">play_arrow</i>
                        <h3 class="name">Live Classes</h3>
                        <p class="description">Our live sessions help in providing the best of our instructing assets to you with our highly qualified teachers.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <div class="box"><i class="material-icons icon">dvr</i>
                        <h3 class="name">High Yield Quizzes</h3>
                        <p class="description">We have a solid framework of quizzes designed to make the base stronger and build-up your skills.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <div class="box"><i class="material-icons icon">search</i>
                        <h3 class="name">Insightful Analysis</h3>
                        <p class="description">Our Analysis tool gives 100% outcome in developing your abilities and foster your knowledge.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Our <span>students</span> are our biggest fans.</h2>
                <p class="text-center mt-0">We don't like to brag, but we don't mind letting our students do it for us.<br>Here are a few nice things folks have said about our services over the years.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <div class="text-center"><img class="rounded-circle" src="https://cdni.iconscout.com/illustration/premium/thumb/students-taking-online-lecture-3217507-2689197.png"></div>
                        <div>
                            <h6 class="text-center name mt-2">Bernadette Mbou</h6>
                            <hr class="hr-light">
                            <p class="message">I had taken several IT courses before deciding on DynamicTech. This course was the ONLY course after which I landed a System Administrator job, making six figures and finally able to support my family comfortably. The instructors are very hands-on and knowledgable, and the course incorporates a lot of practical exercises.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <div class="text-center"><img class="rounded-circle" src="https://cdni.iconscout.com/illustration/premium/thumb/students-taking-online-lecture-3217507-2689197.png"></div>
                        <div>
                            <h6 class="text-center name mt-2">Kristen Hopkins</h6>
                            <hr class="hr-light">
                            <p class="message">I was in dire need of a job and had an interview coming up in 4 days. I searched for a place to prepare and found Dynamic Tech. I was hesitant, since it's not the closest location from where I live. But they were famous for their Interview Preparation Course, I took the plunge and enrolled with them.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <div class="text-center"><img class="rounded-circle" src="https://cdni.iconscout.com/illustration/premium/thumb/students-taking-online-lecture-3217507-2689197.png"></div>
                        <div>
                            <h6 class="text-center name mt-2">Allison Wade</h6>
                            <hr class="hr-light">
                            <p class="message text-center">I am so happy I found this IT course, recommended to me by a friend!</p>
                        </div>
                    </div>
                </div>
                
                
                
            </div>
        </div>
    </section>
    <section class="highlight-blue">
        <div class="container">
        <h2 class="mb-0">Let us <span>handle the test.</span></h2>
        <p class="mt-0">We have a solid hold in our framework giving 100% fulfillment, online help and our profound yield tests fabricate the base for your overall growth.</p>
            <div class="intro">
                <div class="d-flex flex-row justify-content-around text-center mt-5">
                    <div>
                    <div class="icon-box"><img src="<?php echo FRONT_SITE_PATH?>assets/img/students-white.svg" alt=""></div>
                        <h4 class="stats">100%</h4>
                        <p class="mt-2">Satisfaction</p>
                    </div>
                    <div>
                    <div class="icon-box"><img src="<?php echo FRONT_SITE_PATH?>assets/img/support-white.svg" alt=""></div>
                        <h4 class="stats">24/7</h4>
                        <p class="mt-2">Support</p>
                    </div>
                    <div>
                    <div class="icon-box"><img src="<?php echo FRONT_SITE_PATH?>assets/img/medal-white.svg" alt=""></div>
                        <h4 class="stats">1000+</h4>
                        <p class="mt-2">Quizzes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="pricing" class="section mt-5">
        <div class="circle-green"></div>
        <div class="circle-green-reverse"></div>
        <div class="container" id="courses">
            <div class="row">
                <div class="col-12">
                    <div class="pricing-text section-header">
                        <h2 id="pricing-table-heading">Fair <span>&amp;</span> Simple Pricing for all</h2>
                        <div class="desc-text">
                            <p>Our Courses last for 6 months.<br></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pricing-tables">
                <?php
                    $query = mysqli_query($con, "select * from course_master ORDER BY id");
                    $check=mysqli_num_rows($query);
                    if($check>0){	
                        while($row = mysqli_fetch_array($query)){
                ?>
                <div class="col-12 col-md-4 col-lg-3 pricing-tables my-3">
                    <div class="pricing-table text-center">
                        <div class="pricing-details">
                            <h5><?php echo $row["course_name"]?><br></h5>
                            <h4 style="text-decoration:line-through" class="mb-0 mt-5">$ 4500</h4>
                            <h1><span>$</span>&nbsp;<?php echo $row["course_fees"]?></h1>
                        </div>
                        <div class="text-center plan-button"><a class="text-center d-sm-inline-block d-md-inline d-lg-inline-block d-xl-inline-block btn btn-border mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Buy Now</a><br/><a href="<?php echo $row["course_url"]?>" class="text-white mt-3">View Details</a></div>
                    </div>
                </div>
                <?php } }?>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-body">
            <form method="post" class="course-enquiry my-5 mx-3" id="enquiry_course">
                <div class="course-form">
                    <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label>E-mail Address</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="tel" name="contact" class="form-control" id="contact">
                        </div>
                        <div class="form-group">
                            <label>Choose Course</label>
                            <select name="course_category" class="form-control" style="height:40px;border: 1px solid #d2d2d2!important;">
                                <option value="">Course Category</option>
                                <?php
                                    $query = mysqli_query($con, "select * from course_master ORDER BY id");
                                    $check=mysqli_num_rows($query);
                                    if($check>0){	
                                        while($row = mysqli_fetch_array($query)){
                                ?>
                                        <option value="<?php echo $row["course_name"]?>"><?php echo $row["course_name"]?></option>
                                    
                                    <?php } }?>
                            </select>
                        </div>
                    
                </div>
                
                <div class="text-center">
                    <div class="message my-2"></div>
                <button type="submit" class="ms-3 btn btn-primary btn-detail px-4 py-3">Send Enquiry</button>
                <p class="textt-center mt-3">Hit the enquiry button to get more course details.</p>
                </div>
                    
                </form>
            </div>
            </div>
        </div>
        </div>
    </section>
    <style>
        .testimonial10 .testi9 .quote-bg {
  max-width: 800px;
  width: 100%;
  margin: 0 auto;
  padding: 60px;
  background: url(https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/testimonial/up-quote.png) no-repeat top left, url(https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/testimonial/down-quote.png) no-repeat bottom right;
}
.review span{
    color:#f9a457;
    text-decoration:underline;
}
    </style>
    <section class="section my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="fw-bold text-center review">Client <span>Reviews</span></h2>
        <div class="testimonial10 py-5 bg-success-gradiant">
          <div class="container">
            <div class="owl-carousel owl-theme text-justify testi9">
              <!-- item -->
              <div class="item">
                <div class="quote-bg">
                  <p class="font-weight-light text-dark">I graduated with a PhD from an Ivy league University, and started an academic career that involved a lot of travel. Being a wife and mother, the traveling exhausted me and I decided for a career change.</p>
<p class="mb-1">I decided to switch into IT because it offered stability, and an opportunity to build on the IT skills I had picked up in my academic career. I therefore decided to join DynamicTech Academy because of their  practical hands on training they offer.</p> 
<p class="mb-1">First, the lecturers are super smart, they know their stuff in and out. Secondly, they have a vast working experience and this is the part that I really cherished. Thirdly,  they have a powerful follow system that helps their trainees achieve their learning goals and objectives.</p> 
<p class="mb-1">It doesn’t matter if you have no previous experience or if you are already familiar with network administration.  At DynamicTech Academy, they will work with you individually and set you up in groups with other trainees to sharpen your skills. I enjoyed the group work where we were put in teams to tackle weekly projects. I loved the weekly group projects because I could dig deeper into issues I did not fully understand.</p> 
<p class="mb-1">Lastly, DynamicTech Academy prepared me for the market, and they do this for all their trainees. Their technical coaching and interview preparation counselling are top class. I strongly  recommend DynamicTech Academy to everyone looking to change career and want to get into a well paid job in the IT sector. I now work for a company paying off my tuitions while making a six figure income.</p>
                </div>
                <h4 class="text-dark text-center mb-0 font-weight-medium">Dr. Joyous</h4>
                <div class="text-dark text-center">Our Well Wisher</div>
              </div>
              <!-- item -->
            </div>
          </div>
        </div>
                </div>
            </div>
        </div>
        
    </section>
    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center contact-section-bg">
                        <h1>Practice with Us.</h1>
                        <p>We'll take care of your results!</p><a class="btn btn-outline-light bg-white text-dark py-3 px-5" href="contact">Contact Us</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script src="https://dynamierslab.in/assets/js/jquery.validate.min.js"></script>
<script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="<?php echo FRONT_SITE_PATH?>assets/js/custom.js?h=<?php random()?>"></script>
<script>
    var input = document.querySelector("#contact");
    window.intlTelInput(input, {
      separateDialCode: true
    });
</script>
</body>

</html>