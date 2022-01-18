<?php

$page_title = "Read stored PDFs...";
include_once("front/styles.php");

?>


<body>

    <?php include_once("front/navigator.php")?>

    <?php include_once("front/sidebar.php")?>
    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body m-3">
                        <h5 class="mb-0">Study Material for you!</h5>
                        <p>Study Notes Online, Refer them for your preparation..</p>
                            <hr class="hr-light">
                        <div class="row">
                        <?php
                            $select_value = "1";
                            $query = mysqli_query($con, "select * from pdfs, student_courses where pdfs.course_category = student_courses.course_id and student_courses.student_id = '".$_SESSION["user_id"]."' ORDER BY pdfs.id desc");
                            $check=mysqli_num_rows($query);
                            if($check>0){
                                $sr = 1;
                                while($row = mysqli_fetch_array($query)){
                                    $date=date_create($row["created_on"]);
                                    $file_name = explode('.',$row["file_name"]);
                                    $file_name = preg_replace("/[\-_]/"," ",$file_name);
                        ?>
                        <div class="col-md-2">
                            <div class="pdf-frame">
                                <a href="<?php echo FRONT_SITE_PATH?>pdfs/<?php echo $row["file_name"]?>" class="" target="_blank">
                                    <img src="<?php echo FRONT_SITE_PATH."assets/img/file-icons/".end($file_name)?>.png" alt="">
                                    <?php echo ucwords(reset($file_name))?>
                                </a>
                            </div>
                        </div>
                        <?php $sr++; } }?>
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