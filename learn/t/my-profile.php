<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dynamic Tech Academy - Profile</title>
    <?php include_once("front/styles.php")?>
</head>

<body>
    <?php include_once("front/navigator.php")?>
    <?php include_once("front/sidebar.php")?>
    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="card">
                        <div class="card-body">
                        <form enctype="multipart/form-data" method="post" id="teacher_profiler">
                        <div class="profile-pic">
                                <input type="hidden" value="<?php echo $row["id"]?>" name="teacher_id">
                                <label class="-label" for="file">
                                    <span class="glyphicon glyphicon-camera"></span>
                                    <span>Change Image</span>
                                </label>
                                <input id="file" type="file" name="profileimg"/>
                                <img src="image/<?php echo $row["profileimg"]?>" id="output" width="200" />
                                </div>
                                
                            </form>
                            <h4 class="text-center fw-bold m-3"><?php echo $_SESSION["userName"]?><br></h4>
                            <div class="accordion accordion-flush" role="tablist" id="personal_info">
                                <div class="accordion-item">
                                    <h4 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#personal_info .item-1" aria-expanded="false" aria-controls="personal_info .item-1"><strong>Personal Information</strong></button></h4>
                                    <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#personal_info">
                                        <div class="accordion-body"><button class="btn btn-primary btn-sm edit-profile" type="button">Edit Profile</button>
                                        <?php
                                            $query = mysqli_query($con, "select * from teachers where full_name='".$_SESSION['userName']."'");
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
                                                            <td>Contact No</td>
                                                            <td><?php echo $row["contact"]?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email ID</td>
                                                            <td><?php echo $row["email_id"]?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gender</td>
                                                            <td><?php echo ucfirst($row["gender"])?></td>
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
                                        <div class="accordion-body" id="password-update-box">
                                            <p class="mb-0">Password -&nbsp;<button class="btn btn-edit" type="button">Change Password</button></p>
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

</body>
<?php include_once("front/scripts.php")?>
</html>