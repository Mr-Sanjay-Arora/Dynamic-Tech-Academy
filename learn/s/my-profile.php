<?php 

$page_title = "Student Profile";
include_once("front/styles.php");

?>

<body>
    <?php include_once("front/navigator.php")?>
    <?php include_once("front/sidebar.php")?>

    <div class="main-wrapper">
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
        <div class="toast align-items-center bg-primary text-white" id="notification" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    
            </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="card">
                        <div class="card-body profile-body">
                            <form enctype="multipart/form-data" method="post" id="student_profiler">
                            <div class="text-center my-5">
                                <div class="profile-pic">
                                <input type="hidden" value="<?php echo $row["id"]?>" name="student_id">
                                <label class="-label" for="file">
                                    <span class="glyphicon glyphicon-camera"></span>
                                    <span>Change Image</span>
                                </label>
                                <input id="file" type="file" name="profileimg"/>
                                <img src="image/<?php echo $row["profileimg"]?>" id="output" width="200"/>
                                </div>
                            </div>
                                
                            </form>
                            <h6 class="text-center mb-1">Hello, I'm</h6>
                            <h4 class="text-center fw-bold mt-0 m-3"><?php echo $row["first_name"]. " ".$row["middle_name"]." ".$row["last_name"]?><br></h4>
                            <div class="accordion accordion-flush" role="tablist" id="personal_info">
                                <div class="accordion-item">
                                    <h4 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#personal_info .item-1" aria-expanded="false" aria-controls="personal_info .item-1"><strong>Personal Information</strong></button></h4>
                                    <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#personal_info">
                                        <div class="accordion-body">
                                            <div class="text-end"><button class="btn btn-primary btn-sm btn-detail" type="button">Edit Profile</button></div>
                                        <?php
                                            $query = mysqli_query($con, "select * from students where id='".$_SESSION['user_id']."'");
                                            $check=mysqli_num_rows($query);
                                            if($check>0){	
                                                $row=mysqli_fetch_assoc($query);
                                        ?>
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="40%">Full Name</td>
                                                            <td><?php echo $row["first_name"]. " ".$row["last_name"]?><br></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Parent's Name</td>
                                                            <td><?php echo $row["middle_name"]. " ".$row["last_name"]?><br></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Contact No</td>
                                                            <td><?php echo $row["contact"]?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Additional Contact No</td>
                                                            <td><?php echo $row["additional_contact"]?><br></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email ID</td>
                                                            <td><?php echo $row["email"]?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gender</td>
                                                            <td><?php echo ucfirst($row["gender"])?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Date of Birth</td>
                                                            <?php if($row["date_birth"] == null){?>
                                                                <td class="not-available">Not Available</td>
                                                            <?php } else{ $date=date_create($row["date_birth"]);?>
                                                                <td><?php echo date_format($date,"d M, Y")?></td>
                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td>School/College's Name</td>
                                                            <td><?php echo $row["institute_name"]?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Current Residential Address</td>
                                                            <?php if($row["curent_address"] == null){?>
                                                                <td class="not-available">Not Available</td>
                                                            <?php } else{ ?>
                                                                <td><?php echo $row["curent_address"]?></td>
                                                            <?php }?>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="accordion accordion-flush" role="tablist" id="profile_settings">
                                <div class="accordion-item">
                                    <h4 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#profile_settings .item-1" aria-expanded="false" aria-controls="profile_settings .item-1"><strong>Settings</strong></button></h4>
                                    <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#profile_settings">
                                        <div class="accordion-body" id="password_update_box">
                                        
                                        <div class="table-responsive">
                                                <table class="table table-borderless">
                                                    
                                                    <tbody>
                                                    <form method="post" class="query-form my-4" id="passUpdate">
                                                        <tr>
                                                            <td width="30%"><input type="text" name="password_change" class="form-control" placeholder="Enter New Password"/></td>
                                                            <td><button class="btn btn-primary btn-detail py-2" button="submit">Change Password</button></td>
                                                        </tr>
                                                    </form>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <small class="text-center">Note: Password updates will be reflected on your next login.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="accordion accordion-flush" role="tablist" id="profile_orders">
                                <div class="accordion-item">
                                    <h4 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#profile_orders .item-1" aria-expanded="false" aria-controls="profile_orders .item-1"><strong>Your Orders</strong></button></h4>
                                    <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#profile_orders">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center" width="15%">Date</th>
                                                            <th width="40%">Name</th>
                                                            <th class="text-center" width="10%">Amount</th>
                                                            <th class="text-center" width="20%">Payment Status</th>
                                                            <th class="text-center" width="10%">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $query = mysqli_query($con, "select * from students, orders, course_master where students.id = orders.student_id and orders.course_id = course_master.course_id and students.id='".$_SESSION["user_id"]."'");
                                                    $check=mysqli_num_rows($query);
                                                    if($check>0){	
                                                        while($row = mysqli_fetch_array($query)){
                                                            $enroll_date=DateTime::createFromFormat('Y-m-d H:i:s', $row["date_created_on"]);

                                                ?>
                                                        <tr>
                                                            <td class="text-center"><?php echo $enroll_date->format('dS M Y')?></td>
                                                            <td><?php echo $row["course_name"]?></td>
                                                            <td class="text-center">$<?php echo $row["amount_paid"]?></td>
                                                            <td class="text-center"><?php echo ucfirst($row["fees_status"])?></td>
                                                            <td class="text-center">
                                                                <a class="btn btn-sm btn-primary btn-detail" href="pdf?purchase=<?php echo $row["order_number"]?>"><img src="<?php
                                                             echo FRONT_SITE_PATH?>assets/img/download.svg" alt=""></a></td>
                                                        </tr>
                                                        <?php }
                                                    }?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="accordion accordion-flush" role="tablist" id="profile_courses">
                                <div class="accordion-item">
                                    <h4 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#profile_courses .item-1" aria-expanded="false" aria-controls="profile_courses .item-1"><strong>Your Courses</strong></button></h4>
                                    <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#profile_courses">
                                        <div class="accordion-body">
                                        <?php
                                                    $query = mysqli_query($con, "select course_master.course_name from students,student_courses, course_master where students.id = student_courses.student_id and student_courses.course_id = course_master.course_id and students.id='".$_SESSION["user_id"]."'");
                                                    $check=mysqli_num_rows($query);
                                                    if($check>0){	
                                                        while($row = mysqli_fetch_array($query)){

                                                ?>
                                                    <span class="badge bg-primary fw-normal"><img src="<?php echo FRONT_SITE_PATH?>assets/img/tag-white.svg" alt="" width="15"> <?php echo $row["course_name"]?></span>
                                                <?php } }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center copyright-bar"><small><?php echo FRONT_SITE_NAME?> © <span id="current_year"><?php echo date("Y")?></span>. All Rights Reserved & made with ❤ by Dynamiers Lab</small></p>
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