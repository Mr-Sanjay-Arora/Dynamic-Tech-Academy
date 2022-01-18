<?php

$page_title = "Attend Quiz, analyze your skills & win your battle";
include_once("front/styles.php");

?>

<body>
    <?php include_once("front/navigator.php")?>
    <?php include_once("front/sidebar.php")?>
    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="mt-3 mx-lg-5">
                        <ul class="nav nav-tabs" role="tablist">
                        <?php
                                    $query = mysqli_query($con,"select count(quiz_master.quiz_id) as total from quiz_master, course_master, students, student_courses where quiz_master.course_id = course_master.course_id and course_master.course_id = student_courses.course_id and student_courses.student_id = students.id and students.id = '".$_SESSION['user_id']."'");
                                    if(mysqli_num_rows($query) > 0){ $row = mysqli_fetch_assoc($query);?>
                            <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#all_quizz">All Quizzes</a></li>
                            <?php }?>
                            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#coming_quizz">Completed Quizzes</a></li>
                            
                        </ul>
                        <div class="tab-content mt-5">
                            <div class="tab-pane fade show active" role="tabpanel" id="all_quizz">
                                <div class="row">
                                <?php
                                    $query = mysqli_query($con,"SELECT * from quiz_master order by created_on desc");
                                    if(mysqli_num_rows($query) > 0){
                                        while($row = mysqli_fetch_array($query)){
                                            $quiz_date=DateTime::createFromFormat('Y-m-d H:i:s', $row["created_on"]);
                                            ?>
                                    <div class="col-lg-3">

                                    
                                        <div class="card quiz-card">
                                            <div class="card-body p-5">
                                                <h6 class="fw-bold mb-0"><?php echo $row["quiz_name"]?><br></h6>
                                                <p><i class="icon ion-android-time me-2"></i>Quiz Created:&nbsp;<?php echo $quiz_date->format('M d, Y')?><br></p>
                                                <hr class="hr-light">
                                                <a href="quizzes/r/<?php echo $row['quiz_id']?>" class="btn mt-3" role="button">View Quiz</a>
                                            </div>
                                        </div>
                                            
                                        

                                    </div>
                                    <?php
                                        }
                                    } else{?>
                                    <h5>No Quiz was found!</h5>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="coming_quizz">
                            <div class="row">
                            <?php
                                    $query = mysqli_query($con,"SELECT * from student_quizzes,students, quiz_master where student_quizzes.quiz_id = quiz_master.quiz_id and student_quizzes.student_id = students.id and students.id = '".$_SESSION["user_id"]."'");
                                    if(mysqli_num_rows($query) > 0){
                                        while($rowq = mysqli_fetch_array($query)){
                                            $submitted_date=DateTime::createFromFormat('Y-m-d H:i:s', $rowq["date_created_on"]);
                                            ?>
                                    <div class="col-lg-3">

                                        <div class="card quiz-card">
                                            <div class="card-body p-5">
                                                <h6 class="fw-bold mb-0"><?php echo $rowq["quiz_name"]?><br></h6>
                                                <p><i class="icon ion-android-time me-2"></i>Submitted On:&nbsp;<?php echo $submitted_date->format('M d, Y')?><br></p>
                                                <hr class="hr-light">
                                                <a href="quizzes/r/<?php echo $rowq['quiz_id']?>" class="btn mt-3" role="button">View Result</a>
                                            </div>
                                        </div>

                                    </div>
                                    <?php
                                        }
                                    } else{?>
                                    <h5>No Quiz was found!</h5>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php include_once("front/scripts.php")?>
</html>