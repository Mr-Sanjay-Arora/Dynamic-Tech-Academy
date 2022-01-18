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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body m-3">
                        <h5 class="mb-0">Your Uploaded Files</h5>
                        <p>Documents, Video Links...</p>
                            <hr class="hr-light">
                        <div class="row">
                        <?php
                            $select_value = "1";
                            
                            $query = mysqli_query($con, "select * from files, course_master where files.course_category = course_master.course_id ORDER BY files.file_id desc");
                            $check=mysqli_num_rows($query);
                            if($check>0){
                                while($row = mysqli_fetch_array($query)){
                                    $file_link = $row["file_link"];
                                    $file_category = $row["course_name"];
                                    $file_name = $row["file_name"];
                        ?>
                        <div class="col-md-3 mb-3" style="position:relative">
                            <a href="<?php echo $file_link?>" target="_blank" class="text-center">
                                <img src="https://videopromotion.club/assets/images/default-video-thumbnail.jpg" alt="default img" class="img-fluid" width="100%">
                            </a>
                                <div class="d-flex flex-row align-items-center justify-content-between mt-3">
                                    <p class="mt-2 mb-0"><?php echo $file_name?></p> <span class="badge bg-primary"><small><img src="<?php echo FRONT_SITE_PATH?>assets/img/tag-white.svg" alt="" width="15">&nbsp;<?php echo $file_category?></small></span>
                                </div>
                                
                            
                            
                        </div>
                        <?php } }?>
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