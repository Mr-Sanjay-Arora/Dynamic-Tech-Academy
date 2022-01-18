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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo FRONT_SITE_NAME." - LINUX (RED HAT) Admin Course"?></title>
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
            color: #b7201f;
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
            color: #b7201f;
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
            background: #b7201f;
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
    color: #b7201f;
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
    color: #b7201f;
    margin:10px;
}
.accordion-button:not(.collapsed){
    color:#000000;
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
            </ul><span class="navbar-text actions"> <a class="btn btn-login" href="https://learn.dynamictechacademy.com/">Log In</a></span>
        </div>
    </div>
</nav>
<?php
                $query = mysqli_query($con, "select * from course_master where course_url = 'linux-admin'");
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
            <img src="https://www.redhat.com/cms/managed-files/Feature_1.jpg" alt="course-banner" class="img-fluid course-banner w-100"/>
            <div class="course-tab-wrapper mt-4">
                <ul class="nav nav-justified mb-5 course-tab-btn" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link active py-3" role="tab" data-bs-toggle="tab" href="#overview">Overview</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link py-3" role="tab" data-bs-toggle="tab" href="#curriculum">Curriculum</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link py-3" role="tab" data-bs-toggle="tab" href="#certification">Certification</a></li>
                </ul>
                <div class="tab-content my-4 mb-5 mx-4">
                    <div class="tab-pane fade show active" role="tabpanel" id="overview">
                        <h5 class="fw-bold">Course Description</h5>
                        <p>RHCSA is an entry-level certification that focuses on competencies at system administration, including installation and configuration of a Red Hat Enterprise Linux system and attach it to a live network running network services.</p>
                        <p>A Red Hat® Certified System Administrator (RHCSA) is able to perform the following tasks:</p>
                        <ul style="list-style:circle;padding-left:20px">
                            <li>Understand and use essential tools for handling files, directories, command-line environments, and documentation</li>
                            <li>Create simple shell scripts</li>
                            <li>Operate running systems, including booting into different run levels, identifying processes, starting and stopping virtual machines, and controlling services</li>
                            <li>Configure local storage using partitions and logical volumes</li>
                            <li>Create and configure file systems and file system attributes, such as permissions, encryption, access control lists, and network file systems</li>
                            <li>Deploy, configure, and maintain systems, including software installation, update, and core services</li>
                            <li>Manage users and groups</li>
                            <li>Manage security, including basic firewall and SELinux configuration</li>
                            <li>Perform basic container management</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="curriculum">
                        <h5 class="fw-bold">Curriculum</h5>
                        <ul class="curriculum">
                            <div class="card">
                                <div class="card-body">
                                    <div class="accordion accordion-flush" role="tablist" id="module_one">
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#module_one .item-1" aria-expanded="false" aria-controls="module_one .item-1"><h6 class="accordion-header" role="tab">Module 1: Performing Basic System Management Tasks</h6></button>
                                            <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#module_one">
                                                <div class="accordion-body">
                            <div class="mx-3 my-2">
                                <strong>Lesson 1: Installing Redhat Enterprise Linux Server</strong>
                                <ul class="list-icons">
                                    <li>Introduction to Linux/Unix</li>
                                    <li>The structure of an Operating System (OS)</li>
                                    <li>What you need on your server</li>
                                    <li>Installing Redhat</li>
                                    <li>Login into a Redhat server</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 2: Using Essential Tools</strong>
                                <ul class="list-icons">
                                    <li>Finding Appropriate help using Man pages</li>
                                    <li>Creating a User</li>
                                    <li>Understanding need for users</li>
                                    <li>Connecting to a RHEL Server</li>
                                    <li>Opening a local Shell</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 3: Essential file Management Task</strong>
                                <ul class="list-icons">
                                    <li>Understanding Linux File Systems</li>
                                    <li>Essential File Management Task</li>
                                    <li>Finding Files</li>
                                    <li>Working on Linux Shell</li>
                                    <li>Understanding/working with I/O Redirect and Pipes</li>
                                    <li>Understand Globbing and Wildcards</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 4: Working with Text Files</strong>
                                <ul class="list-icons">
                                    <li>Working with the Vi Editor</li>
                                    <li>Fixing a common Vi Editor issue</li>
                                    <li>Working with Tar Ball</li>
                                    <li>Working compress files</li>
                                    <li>Understanding and working with Links</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 5: Managing Users and Groups</strong>
                                <ul class="list-icons">
                                    <li>Creating and Managing Users</li>
                                    <li>Creating and managing Groups</li>
                                    <li>Understanding users/group configurations files</li>
                                    <li>Understanding group membership</li>
                                    <li>Managing Passwords</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 6: Managing Permissions</strong>
                                <ul class="list-icons">
                                    <li>Understanding ownership</li>
                                    <li>Changing file ownership</li>
                                    <li>Understanding/managing basic Permissions</li>
                                    <li>Working on Linux Shell</li>
                                    <li>Understanding and Managing special Permissions</li>
                                    <li>Understanding and Managing Access Control List (ACL)</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 7: Managing Processes</strong>
                                <ul class="list-icons">
                                    <li>Understanding Jobs and Processes</li>
                                    <li>Managing Shell jobs</li>
                                    <li>Understanding Memory usage and performance Load</li>
                                    <li>Getting process information using Top/Ps</li>
                                    <li>Sending signals to process/Process priorities and Niceness</li>
                                    <li>Troubleshooting Performance Issues/Memory shortage</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 8: Scheduling Tasks</strong>
                                <ul class="list-icons">
                                    <li>Using cron vs AT</li>
                                    <li>Scheduling with cron and AT</li>
                                </ul>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="accordion accordion-flush" role="tablist" id="module_two">
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#module_two .item-1" aria-expanded="false" aria-controls="module_two .item-1"><h6 class="accordion-header" role="tab">Module 2 : Operating RHEL Servers</h6></button>
                                            <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#module_two">
                                                <div class="accordion-body">
                                
                            <div class="mx-3 my-2">
                                <strong>Lesson 9: Configuring Network</strong>
                                <ul class="list-icons">
                                    <li>Understanding NIC Naming</li>
                                    <li>Managing runtime network Configuration with the IP Command</li>
                                    <li>Storing Network Configuration persistently with nmcli/nmtui</li>
                                    <li>Verifying Network Configuration files</li>
                                    <li>Understanding/Configuring Routing and DNS</li>
                                    <li>Understanding/Using Network analysis tools</li>
                                    <li>Configuring Network settings</li>
                                    <li>Troubleshooting Network Issues</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 10: Managing software</strong>
                                <ul class="list-icons">
                                    <li>Understanding meta-Package handlers</li>
                                    <li>Setting up both Local and HTTP Yum repository</li>
                                    <li>Managing Packages with YUM</li>
                                    <li>Understanding YUM and RPM Queries</li>
                                    <li>Using RPM Queries</li>
                                    <li>Troubleshooting RPM Dependency issues</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 11: Managing Partitions</strong>
                                <ul class="list-icons">
                                    <li>Understanding Disk Partition</li>
                                    <li>Creating MBR Partition with fdisk</li>
                                    <li>Understanding File System differences and making file systems</li>
                                    <li>Mounting file system via manually and /etc/fstab</li>
                                    <li>Creating Swap partition</li>
                                    <li>Troubleshooting File Systems Issues</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 12: Managing LVM Logical Volumes</strong>
                                <ul class="list-icons">
                                    <li>Why use LVM and understanding LVM setup</li>
                                    <li>Creating an LVM logical volume</li>
                                    <li>Understanding Device Mapper and LVM Device name</li>
                                    <li>Resizing/Growing LVM Logical Volumes</li>
                                    <li>Shrinking/Configuring LVM logical volume</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 13: Working with Virtual Machines</strong>
                                <ul class="list-icons">
                                    <li>Introducing KVM Virtualization</li>
                                    <li>Managing libvirt and KVM</li>
                                    <li>Installing a Virtual machine</li>
                                    <li>Understanding KVM Network</li>
                                    <li>Managing Virtual Machines</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 14: Managing SSH</strong>
                                <ul class="list-icons">
                                    <li>Changing SSH server options</li>
                                    <li>Accessing SSH server through the firewall</li>
                                    <li>Configuring SSH</li>
                                </ul>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-body">
                                    <div class="accordion accordion-flush" role="tablist" id="module_three">
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#module_three .item-1" aria-expanded="false" aria-controls="module_three .item-1"><h6 class="accordion-header" role="tab">Module 3 : Performing Advanced System Administration Tasks</h6></button>
                                            <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#module_three">
                                                <div class="accordion-body">
                                
                            <div class="mx-3 my-2">
                                <strong>Lesson 15: Managing the KERNEL</strong>
                                <ul class="list-icons">
                                    <li>Understanding the Modular structure of a Kernel</li>
                                    <li>Modifying kernels behavior through modprobe</li>
                                    <li>Tuning kernel behavior through /proc</li>
                                    <li>Updating the kernel</li>
                                    <li>Managing the kernel</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 16: Managing and Understanding the Boot procedure</strong>
                                <ul class="list-icons">
                                    <li>Boot procedure Generic Overview</li>
                                    <li>Understanding Grub2</li>
                                    <li>Modifying Grub2 parameters</li>
                                    <li>Changing boot Parameters</li>
                                    <li>Understanding Systemd targets</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 17: Configuring Logging</strong>
                                <ul class="list-icons">
                                    <li>Understanding/configuring rsyslogd and logging</li>
                                    <li>Configuring log rotate</li>
                                    <li>Changing Root password</li>
                                </ul>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-body">
                                    <div class="accordion accordion-flush" role="tablist" id="module_four">
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#module_four .item-1" aria-expanded="false" aria-controls="module_four .item-1"><h6 class="accordion-header" role="tab">Module 4 : Managing Network Services</h6></button>
                                            <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#module_four">
                                                <div class="accordion-body">
                                
                            <div class="mx-3 my-2">
                                <strong>Lesson 18: Managing HTTP Services</strong>
                                <ul class="list-icons">
                                    <li>Understanding Apache Configuration</li>
                                    <li>Creating a basic Web site</li>
                                    <li>Tuning kernel behavior through /proc</li>
                                    <li>Configuring Apache webserver</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 19: Building an LDAP Server</strong>
                                <ul class="list-icons">
                                    <li>Connecting to an Ldap Server</li>
                                    <li>Setting up Ldap connectivity</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 20: Accessing Remote File Systems and Automount</strong>
                                <ul class="list-icons">
                                    <li>Accessing an NFS Server</li>
                                    <li>Configuring Automount</li>
                                    <li>Configuring automount for NFS Share Home Directories</li>
                                    <li>Building a Samba Server</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 21: Configuring Firewall</strong>
                                <ul class="list-icons">
                                    <li>Understanding Firewall configuration</li>
                                    <li>Understanding firewall components</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 22: Using and Building Kickstart</strong>
                                <ul class="list-icons">
                                    <li>Understanding kickstart Usage</li>
                                    <li>Creating a kickstart file</li>
                                    <li>Building a kick start server</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 23: Configuring Time Server</strong>
                                <ul class="list-icons">
                                    <li>Understanding time on LINUX</li>
                                    <li>Configuring server time</li>
                                </ul>
                            </div>
                            <hr class="hr-light">
                            <div class="mx-3 my-2">
                                <strong>Lesson 24: Scripting</strong>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                        </ul>
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="certification">
                        <img src="https://www.hnbinfo.com/wp-content/uploads/2018/02/Webp.net-resizeimage-2.png" alt="certificate-logo" class="img-fluid" width="200" height="200"/>
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