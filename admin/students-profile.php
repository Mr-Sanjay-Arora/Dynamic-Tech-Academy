<?php $page_title = "Students Record, Manage Students..."?>

    <?php include_once("front/styles.php")?>


<body>

    <?php include_once("front/navigator.php")?>

    <?php include_once("front/sidebar.php")?>

<?php
$student_url = $_GET["id"];

$query_url = mysqli_query($con, "select * from students where slug_url='$student_url'");
$res = mysqli_fetch_assoc($query_url);
$slug_url = $res["email"];
$student_id = $res["id"];
$did = $slug_url;

?>

    <div class="main-wrapper">
        <ol class="breadcrumb ms-3">
            <li class="breadcrumb-item"><a href="<?php echo FRONT_SITE_PATH?>admin"><span>Home</span></a></li>
            <li class="breadcrumb-item"><a href="<?php echo FRONT_SITE_PATH?>admin/students-list"><span>Students Record</span></a></li>
            <li class="breadcrumb-item"><span><?php echo $res["first_name"]." ".$res["last_name"]?></span></li>
        </ol>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <div class="card">
                            <div class="card-body">
                            <?php
                                $query = mysqli_query($con, "select * from students where email='$did'");
                                $check=mysqli_num_rows($query);
                                if($check>0){	
                                    $row = mysqli_fetch_assoc($query);

                            ?>
                            <div class="row">
                                <div class="col-md-3 d-flex mt-5 justify-content-center">
                                    <img src="https://learn.dynamictechacademy.com/s/image/<?php echo $row["profileimg"]?>" class="img rounded-circle" width="150" height="150"/>
                                </div>
                                <div class="col-md-9 mt-5">
                                    <div class="d-md-flex flex-md-row justify-content-between align-items-center text-center">
                                        <h4 class="mb-md-0"><?php echo $row["first_name"]." ".$row["middle_name"]." ".$row["last_name"]?></h4>
                                    </div>
                                    <hr class="hr-light mt-5"/>
                                    <div class="py-3">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    
                                                    <td width="40%" class="fw-bold">Name</td>
                                                    <td><?php echo $row["first_name"]." ".$row["middle_name"]." ".$row["last_name"]?></td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-bold">Email ID</td>
                                                    <td><?php echo $row["email"]?></td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-bold">Contact</td>
                                                    <td><?php echo $row["contact"]?></td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-bold">Additional Contact</td>
                                                    <td><?php echo $row["additional_contact"]?></td>
                                                </tr>
                                                <tr>
                                                <td class="user_id d-none"><?php echo $row['id']?></td>
                                                    <td class="fw-bold">Learning Status</td>
                                                    <td>
                                                    <label class="switch me-3"><input class="mode" type="checkbox" name="type" id="<?php echo $row["id"]?>" value="<?=$row['status']?>" <?=$row['status'] == '0' ? '' : 'checked' ;?>><span class="slider round"></span></label>
                                                    <?php if($row["status"] == 0){?>
                                                        <span id="status">Deactive</span>
                                                    <?php } elseif($row["status"] == 1){?>
                                                        <span id="status">Active</span>
                                                        <?php }?>
                                                    </td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    <hr class="hr-light mt-3"/>
                                    <div class="py-3">
                                        <div class="d-flex flex-row justify-content-between">
                                            <h5>Courses Enrolled</h5>
                                            <div>
                                                <div id="sid" class="d-none"><?php echo $student_id?></div>
                                                <select class="custom-select custom-selection" name="category" id="enroll_course">
                                                    <option value="" selected>Choose Course Category</option>
                                                    <?php
                                    
                                                        $query = mysqli_query($con, "select * from course_master ORDER BY id");
                                                        $check=mysqli_num_rows($query);
                                                        if($check>0){	
                                                            while($row = mysqli_fetch_array($query)){
                                                    ?>
                                                            <option value="<?php echo $row["course_id"]?>"><?php echo $row["course_name"]?></option>
                                                        
                                                        <?php } }?>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        
                                    <div class="my-4">
                                                <?php
                                                    $query = mysqli_query($con, "select course_master.course_name from students,student_courses, course_master where students.id = student_courses.student_id and student_courses.course_id = course_master.course_id and students.id='$student_id'");
                                                    $check=mysqli_num_rows($query);
                                                    if($check>0){	
                                                        while($row = mysqli_fetch_array($query)){

                                                ?>
                                                    <span class="badge bg-primary"><?php echo $row["course_name"]?></span>
                                                <?php } }?>
                                    </div>
                                    </div>
                                    <hr class="hr-light mt-3"/>
                                    <div class="py-3">
                                        <h5>Payment Terms</h5>
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                                
                            </div>
                            <?php
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		</svg>
	</div>
</body>
<?php include_once("front/scripts.php")?>
</html>