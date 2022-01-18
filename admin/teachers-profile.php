<?php $page_title = "Students Record, Manage Students..."?>

    <?php include_once("front/styles.php")?>


<body>

    <?php include_once("front/navigator.php")?>

    <?php include_once("front/sidebar.php")?>

<?php
$teacher_url = $_GET["id"];

$query_url = mysqli_query($con, "select * from teachers where slug_url='$teacher_url'");
$res = mysqli_fetch_assoc($query_url);
$slug_url = $res["email_id"];
$teacher_id = $res["id"];
$did = $slug_url;

?>

    <div class="main-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo FRONT_SITE_PATH?>admin"><span>Home</span></a></li>
            <li class="breadcrumb-item"><a href="<?php echo FRONT_SITE_PATH?>admin/teachers-list"><span>Teachers Record</span></a></li>
            <li class="breadcrumb-item"><span><?php echo $res["full_name"]?></span></li>
        </ol>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <div class="card">
                            <div class="card-body">
                            <?php
                                $query = mysqli_query($con, "select * from teachers where email_id='$did'");
                                $check=mysqli_num_rows($query);
                                if($check>0){	
                                    $row = mysqli_fetch_assoc($query);

                            ?>
                            <div class="row">
                                <div class="col-md-3 d-flex align-items-center justify-content-center">
                                    <img src="<?php echo FRONT_PATH_STUDENT?>image/<?php echo $row["profileimg"]?>" class="img rounded-circle" width="150" height="150"/>
                                </div>
                                <div class="col-md-9 mt-5">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        <h4 class="mb-0"><?php echo $row["full_name"]?></h4>
                                        <button class="btn btn-primary">Edit Profile</button>
                                    </div>
                                    <hr class="hr-light mt-5"/>
                                    <div class="py-5">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    
                                                    <td width="40%" class="fw-bold">Name</td>
                                                    <td><?php echo $row["full_name"]?></td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-bold">Email ID</td>
                                                    <td><?php echo $row["email_id"]?></td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-bold">Contact</td>
                                                    <td><?php echo $row["contact"]?></td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-bold">Gender</td>
                                                    <td><?php echo ucfirst($row["gender"])?></td>
                                                </tr>
                                                <tr>
                                                <td class="user_id d-none"><?php echo $row['id']?></td>
                                                    <td class="fw-bold">Teaching Status</td>
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
                                    <hr class="hr-light mt-3"/>
                                    <div class="py-3">
                                        <div class="d-flex flex-row justify-content-between">
                                            <h5>Courses</h5>
                                            <div>
                                                <div id="t_id" class="d-none"><?php echo $teacher_id?></div>
                                                <select class="custom-select custom-selection" name="category" id="teacher_enroll_course">
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
                                    </div>

                                    <div class="my-4">
                                                <?php
                                                    $query = mysqli_query($con, "select course_master.course_name from teachers,teacher_courses, course_master where teachers.id = teacher_courses.teacher_id and teacher_courses.course_id = course_master.course_id and teachers.id='$teacher_id'");
                                                    $check=mysqli_num_rows($query);
                                                    if($check>0){	
                                                        while($row = mysqli_fetch_array($query)){

                                                ?>
                                                    <span class="badge bg-primary"><?php echo $row["course_name"]?></span>
                                                <?php } }?>
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

</body>
<?php include_once("front/scripts.php")?>
</html>