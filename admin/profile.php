<?php $page_title = "Admin's Profile"?>

    <?php include_once("front/styles.php")?>



<body>
    <?php include_once("front/navigator.php")?>
    <?php include_once("front/sidebar.php")?>
    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                            <form enctype="multipart/form-data" method="post" id="admin_profiler">
                            <div class="text-center my-5">
                                <div class="profile-pic">
                                <input type="hidden" value="<?php echo $row["id"]?>" name="admin_id">
                                <label class="-label" for="file">
                                    <span class="glyphicon glyphicon-camera"></span>
                                    <span>Change Image</span>
                                </label>
                                <input id="file" type="file" name="profileimg"/>
                                <img src="image/<?php echo $row["profileimg"]?>" id="output" width="200"/>
                                </div>
                            </div>
                                
                            </form>
                            </div>
                            <h4 class="text-center fw-bold m-3">Welcome, <?php echo $row["full_name"]?><br></h4>
                            <div class="accordion accordion-flush" role="tablist" id="personal_info">
                                <div class="accordion-item">
                                    <h4 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#personal_info .item-1" aria-expanded="false" aria-controls="personal_info .item-1"><strong>Personal Information</strong></button></h4>
                                    <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#personal_info">
                                        <div class="accordion-body"><button class="btn btn-primary btn-sm edit-profile" type="button">Edit Profile</button>
                                        <?php
                                            $query = mysqli_query($con, "select * from admin where full_name='".$_SESSION['userName']."'");
                                            $check=mysqli_num_rows($query);
                                            if($check>0){	
                                                $row=mysqli_fetch_assoc($query);
                                        ?>
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="40%">Full Name</td>
                                                            <td><?php echo $row["full_name"]?><br></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email ID</td>
                                                            <td><?php echo $row["email"]?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php  }?>
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
                                        <div class="accordion-body" id="password-update-box">
                                            <p class="mb-0">Password -&nbsp;<button class="btn btn-edit" type="button">Change Password</button></p>
                                        </div>
                                    </div>
                                </div>
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