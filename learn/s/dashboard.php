<?php

$page_title = "Dashboard";
include_once("front/styles.php");

?>

<body>
    <?php include_once("front/navigator.php")?>
    <?php include_once("front/sidebar.php")?>

    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="m-3">Hello <?php echo $row["first_name"]?>,</h3>
                        </div>
                        <div class="col-12">
                            <div class="card">
                            <div class="card-header bg-orange"><h6 class="my-3 text-white">Latest Updates to hear...</h6></div>
                                <div class="card-body announcements-tab">
                                
                                    <?php
                                    $query = mysqli_query($con, "select * from announcements where `status` = '1' order by id desc");
                                    $check=mysqli_num_rows($query);
                                    if($check>0){	
                                        while($row=mysqli_fetch_array($query)){
                                ?>
                                    <span class="news-span"><?php echo $row["news_description"]?></span>
                                    <?php } }?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                    <div class="card">
                    <div class="card-header bg-blue"><h6 class="my-3 text-white">Feedbacks, Queries...</h6></div>
                        <div class="card-body">
                            <div class="container  pt-3">
                                <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                <form method="post" class="query-form mb-4" id="query">
                                    <div class="mb-3"><input type="hidden" name="userID" value="<?php echo $_SESSION["user_id"]?>" class="form-control"></div>
                                    <label class="mb-1">Your Feedback or Query has a subject...</label>
                                    <div class="mb-3"><input type="text" name="enquiry_subject" value="" class="form-control" placeholder="Subject"></div>
                                    <label class="mb-1">Would you like to share your concerns with us?</label>
                                    <div class="mb-3"><textarea name="message" class="form-control" placeholder="Drop in a Message" rows="5"></textarea></div>
                                    <div class="message text-center my-3"></div>
                                    <div class="mb-3 text-center"><button type="submit" class="btn btn-primary btn-blue btn-detail btn-block">Submit Query</button></div>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header bg-green"><h6 class="my-3 text-white">Upcoming Class</h6></div>
                        <div class="card-body ms-4">
                        
                        <?php
                            $query = mysqli_query($con, "select class_master.class_visibility, class_master.class_id,class_master.class_name,class_master.class_description, course_master.course_id, class_master.date, class_master.start_time, class_master.end_time from class_master,student_courses, course_master,students where student_courses.student_id = students.id and class_master.date >= CURDATE() and student_courses.course_id = course_master.course_id and course_master.course_id = class_master.course_id and students.id = ".$_SESSION["user_id"]." group by class_master.course_id ORDER BY student_courses.id limit 1");
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
                            <div class="book">
                                <?php if($row["class_visibility"] == 1){?>
                                <div class="text-end mt-3"><a class="btn btn-detail btn-primary btn-block btn-green" role="button" href="classes/v/<?php echo $row["class_id"]?>">Join this Class</a></div>
                                <?php }else{?>
                                    <div class="text-center class-status">Class not yet announced</div>
                                <?php }?>
                                </div>
                        <?php } }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php include_once("front/scripts.php")?>
</html>