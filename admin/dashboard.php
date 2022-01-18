<?php $page_title = "Dashboard"?>

    <?php include_once("front/styles.php")?>


<body>

    <?php include_once("front/navigator.php")?>

    <?php include_once("front/sidebar.php")?>

    <div class="main-wrapper">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body py-5">
                            <div class="d-flex flex-row align-items-center justify-content-between"><h5>Student's Feedbacks </h5><a href="feedbacks">View all</a></div>
                            <div class="table-responsive text-center mt-3">
                                    <table class="table-borderless" id="">
                                        <thead>
                                            <tr>
                                                <th class="text-start" width="20%" style="border:none">Student's Name</th>
                                                <th class="text-start" width="20%" style="border:none">Email ID</th>
                                                <th class="text-start" width="20%" style="border:none">Subject</th>
                                                <th class="text-start" width="40%" style="border:none">Message</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $select_value = "1";
                                            $query = mysqli_query($con, "select * from enquiry_form,students where enquiry_form.student_id = students.id ORDER BY enquiry_form.id  limit 5");
                                            $check=mysqli_num_rows($query);
                                            if($check>0){	
                                                while($row = mysqli_fetch_array($query)){
                                                    $date=date_create($row["date_birth"]);
                                        ?>
                                            <tr>
                                                <td class="text-start"><?php echo $row["first_name"]." ".$row["middle_name"]." ".$row["last_name"]?></td>
                                                <td class="text-start"><?php echo $row["email"]?></td>
                                                <td class="text-start"><?php echo $row["subject_category"]?></td>
                                                <td class="text-start"><?php echo $row["message"]?></td>
                                            </tr>
                                        <?php
                                                }
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body py-5">
                            <div class="d-flex flex-row align-items-center justify-content-between"><h5>User's Enquiries </h5> <a href="enquires">View all</a></div>
                            
                            <div class="table-responsive text-center mt-3">
                                    <table class="table-borderless" id="">
                                        <thead>
                                            <tr>
                                                <th class="text-start" width="30%" style="border:none">User's Name</th>
                                                <th class="text-start" width="25%" style="border:none">Email ID</th>
                                                <th class="text-start" width="12%" style="border:none">Contact</th>
                                                <th class="text-start" width="20%" style="border:none">Course</th>
                                                <th class="text-start" width="20%" style="border:none">Enquiry Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $select_value = "1";
                                            $query = mysqli_query($con, "select * from course_enquiry order by date_created_on desc limit 5");
                                            $check=mysqli_num_rows($query);
                                            if($check>0){	
                                                while($row = mysqli_fetch_array($query)){
                                                    $date=date_create($row["date_created_on"]);
                                        ?>
                                            <tr>
                                                <td class="text-start"><?php echo $row["name"]?></td>
                                                <td class="text-start"><?php echo $row["email"]?></td>
                                                <td class="text-start"><?php echo $row["contact"]?></td>
                                                <td class="text-start"><?php echo $row["course_category"]?></td>
                                                <td class="text-start"><?php echo $date->format("F d, Y")?></td>
                                            </tr>
                                        <?php
                                                }
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body py-5">
                            <div class="d-flex flex-row align-items-center justify-content-between"><h5>Leads</h5><a href="leads">View all</a></div>
                            <div class="table-responsive text-center mt-3">
                                    <table class="table-borderless" id="">
                                        <thead>
                                            <tr>
                                                <th class="text-start" width="20%" style="border:none">Full Name</th>
                                                <th class="text-start" width="25%" style="border:none">Email ID</th>
                                                <th class="text-start" width="12%" style="border:none">Contact</th>
                                                <th class="text-start" width="30%" style="border:none">Message</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $select_value = "1";
                                            $query = mysqli_query($con, "select * from contact_form order by date_created_on desc limit 5");
                                            $check=mysqli_num_rows($query);
                                            if($check>0){	
                                                while($row = mysqli_fetch_array($query)){
                                                    $date=date_create($row["date_created_on"]);
                                        ?>
                                            <tr>
                                                <td class="text-start"><?php echo $row["name"]?></td>
                                                <td class="text-start"><?php echo $row["email"]?></td>
                                                <td class="text-start"><?php echo $row["contact"]?></td>
                                                <td class="text-start"><?php echo $row["message"]?></td>
                                            </tr>
                                        <?php
                                                }
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body py-5">
                        <h5>Notifications</h5>
                        <?php
                            $count = mysqli_query($con,"select * from announcements");
                            while($note = mysqli_fetch_array($count)){
                            ?>
                            <div><?php echo $note["news_description"]?></div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body py-5">
                        <h6 class="mb-4 mt-3">Upcoming Class</h6>
                        <hr class="hr-light mb-1">
                        <?php
                            $query = mysqli_query($con, "select class_master.class_id,class_master.class_name,class_master.class_description, course_master.course_id, class_master.date, class_master.start_time, class_master.end_time from class_master,student_courses, course_master,students where student_courses.student_id = students.id and class_master.date >= CURDATE() and student_courses.course_id = course_master.course_id and course_master.course_id = class_master.course_id group by class_master.course_id ORDER BY student_courses.id limit 1");
                            $check=mysqli_num_rows($query);
                            if($check>0){	
                                while($row = mysqli_fetch_array($query)){
                                    $class_date=DateTime::createFromFormat('Y-m-d', $row["date"]);
                                    $start_time=DateTime::createFromFormat('H:i:s', $row["start_time"]);
                                    $end_time=DateTime::createFromFormat('H:i:s', $row["end_time"]);
                                    $to_time = strtotime($row["end_time"]);
                                    $from_time = strtotime($row["start_time"]);
                        ?>
                            <h4 class="mt-3 fw-bold"><?php echo $row["class_name"]?></h4>
                            <p class="class-description" style="line-height: 1.3;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;"><?php echo $row["class_description"]?></p>
                            
                            <div class="class-details">
                                <div class="d-flex">
                                    <i class="icon ion-android-time me-2"></i>
                                    <div>
                                    <span><?php echo $class_date->format('dS F, Y')?></span>
                                    <p>Date</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <i class="icon ion-android-time me-2"></i>
                                    <div>
                                    <span><?php echo $start_time->format('h:i a') . " - " .$end_time->format('h:i a')?></span>
                                    <p>Time</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <i class="icon ion-android-time me-2"></i>
                                    <div>
                                    <span><?php echo round(abs($to_time - $from_time) / 60,2). " minute"?></span>
                                    <p>Duration</p>
                                    </div>
                                </div>
                            </div>
                        <?php } }?>
                        </div>
                        </div>
                    </div>
                    
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body py-5">
                        <h6 class="mb-4 mt-3">Latest Quiz</h6>
                        <hr class="hr-light mb-1">
                        <?php
                            $query = mysqli_query($con, "select quiz_master.quiz_id,quiz_master.quiz_name,quiz_master.course_id, course_master.course_name, course_master.course_id, quiz_master.created_on from quiz_master,course_master where course_master.course_id = quiz_master.course_id ORDER BY quiz_master.id desc limit 1");
                            $check=mysqli_num_rows($query);
                            if($check>0){	
                                while($row = mysqli_fetch_array($query)){
                                    $class_date=DateTime::createFromFormat('Y-m-d H:i:s', $row["created_on"]);
                        ?>
                            <h4 class="mt-3 fw-bold"><a href="quizzes/<?php echo $row['quiz_id']?>" target="_blank"><?php echo $row["quiz_name"]?></a></h4>
                            
                            <div class="class-details">
                                <div class="d-flex">
                                    <i class="icon ion-android-time me-2"></i>
                                    <div>
                                    <span><?php echo $class_date->format('dS F, Y')?></span>
                                    <p>Dated</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <i class="icon ion-android-time me-2"></i>
                                    <div>
                                    <span><?php echo $row["course_name"]?></span>
                                    <p>Course Name</p>
                                    </div>
                                </div>
                            </div>
                        <?php } }?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body py-5 text-center">
                            <?php
                            $count = mysqli_query($con,"select count(id) as total_count from visitor");
                            $row = mysqli_fetch_assoc($count);
                            ?>
                            <h5>Visitor's Count</h5>
                            <span><?php echo $row["total_count"]?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php include_once("front/scripts.php")?>
</html>