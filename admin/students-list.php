<?php $page_title = "Students Record, Manage Students..."?>

    <?php include_once("front/styles.php")?>


<body>

    <?php include_once("front/navigator.php")?>

    <?php include_once("front/sidebar.php")?>

    <div class="main-wrapper">
        <ol class="breadcrumb ms-5">
            <li class="breadcrumb-item"><a href="<?php echo FRONT_SITE_PATH?>admin"><span>Home</span></a></li>
            <li class="breadcrumb-item"><a href="students-list"><span>Students Record</span></a></li>
        </ol>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <?php
                            $select_value = "1";
                            $query = mysqli_query($con, "select * from students ORDER BY id ");
                            $check=mysqli_num_rows($query);
                            if($check>0){	
                                while($row = mysqli_fetch_array($query)){
                                    $student_id = $row["id"];
                                    $date=date_create($row["date_birth"]);
                        ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-1 border-end"><img class="rounded-circle img-fluid" src="<?php echo FRONT_PATH_STUDENT.'image/'.$row['profileimg']?>" width="100px" height="100px"/></div>
                                    <div class="col-6">
                                        <h5 class="mb-1 fw-bold"><?php echo $row["first_name"]." ".$row["middle_name"]." ".$row["last_name"]?></h5>
                                        <p class="mb-0"><?php echo $row["email"]?></p>
                                        <?php
                                            if($row["status"] == 1){
                                                $status = "active";
                                        ?>
                                        <p class="mb-0 text-success <?php echo $status?>"><?php echo ucfirst($status)?></p>
                                        <?php
                                            }else{
                                                $status = "Disabled";
                                        ?>
                                        <p class="mb-0 text-danger <?php echo $status?>"><?php echo ucfirst($status)?></p>
                                        <?php }?>
                                    </div>
                                    <div class="col-4">
                                        <?php
                                            $qcourse = mysqli_query($con, "select course_master.course_name, course_master.course_id from students,student_courses, course_master where students.id = student_courses.student_id and student_courses.course_id = course_master.course_id and students.id='$student_id'");
                                            $ch=mysqli_num_rows($qcourse);
                                            if($ch>0){	
                                                while($course = mysqli_fetch_array($qcourse)){

                                        ?>
                                            <img class="img-fluid" src="image/courses/<?php echo $course["course_id"]?>.png" width="50" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" title="<?php echo $course["course_name"]?>"/>
                                        <?php } }?>
                                        
                                    </div>
                                    <div class="col-1 text-center">
                                        <div class="dropdown"><button class="btn" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="icon-options-vertical"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="student-profile/<?php echo $row["slug_url"]?>">View Details</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            }
                        ?>
                        
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
<?php include_once("front/scripts.php")?>
</html>