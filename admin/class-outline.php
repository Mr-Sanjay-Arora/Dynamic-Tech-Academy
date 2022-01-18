<?php 


$page_title = "Class Outline";

include_once("front/styles.php");


$class_url = $_GET["class_id"];

?>
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.9/plyr.css" />
<body>
    <?php include_once("front/navigator.php")?>
    <?php include_once("front/sidebar.php")?>
    <div class="main-wrapper">
        <?php

            $query_url = mysqli_query($con, "select class_master.id, class_master.class_name, class_master.class_description, class_master.video_id, course_master.course_name from class_master,course_master where class_master.course_id = course_master.course_id and class_master.id='$class_url'");
            if(mysqli_num_rows($query_url) > 0){
            while($row = mysqli_fetch_array($query_url)){
        ?>
        <div class="video-frame" style="height:450px">
            <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="<?php echo $row["video_id"]?>"></div>
        <!--<iframe allowfullscreen="" frameborder="0" src="https://www.youtube-nocookie.com/embed/<?php echo $row["video_id"]?>?rel=0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="60%"></iframe>-->
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 my-4 mb-2 px-5 ">
                <hr class="hr-light"/>
                        <div class="d-flex align-items-center justify-content-between">
                        <input type="hidden" value="<?php echo $class_url?>" id="class_id">
                        <?php
                                $query = mysqli_query($con, "select * from class_master where class_id='$class_url'");
                                $check=mysqli_num_rows($query);
                                if($check>0){	
                                    $rowstatus = mysqli_fetch_assoc($query);

                            ?>
                        <p class="mb-0">Allow students to attend class now...</p><label class="switch me-3"><input class="toggle-class-view" type="checkbox" name="type" id="<?php echo $rowstatus["id"]?>" value="<?=$rowstatus['class_visibility']?>" <?=$rowstatus['class_visibility'] == '0' ? '' : 'checked' ;?>><span class="slider round"></span></label>
                        <?php }?>              
                    </div>
                    <hr class="hr-light"/>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body mb-5 px-5">
                        <h6 class="fw-bold my-3">Students present for the Class</h6>
                        <hr class="hr-light" />
                        <?php
                                $query = mysqli_query($con, "select * from attendance,students where attendance.class_id='$class_url' and attendance.student_id = students.id order by students.first_name");
                                $check=mysqli_num_rows($query);
                                if($check>0){	
                                    while($list = mysqli_fetch_array($query)){
                            ?>
                        <ul class="list-group">
                            <li class="list-group-item mb-0" style="border:none;padding:.2rem 0rem"><?php echo $list["first_name"]." ".$list["last_name"]?></li>
                        </ul>
                        <?php } }?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="card">
                        <div class="card-body mb-5">    
                            <div class="row p-4">
                                <div class="col-12">
                                    <h6 class="fw-bold mb-1">Class #</h6>
                                    <h4>(<?php echo str_pad($row["id"],2,'0',STR_PAD_LEFT).") - ".$row["class_name"]?></h4>
                                    <div class="text-end my-3">
                                        <span class="badge bg-primary"><?php echo $row["course_name"]?></span>
                                    </div>
                                        <p class="text-justify"><?php echo $row["class_description"]?></p>
                                </div>

                                
                            </div>
                            <?php
                                } 
                            }
                            else{ 
                                redirect(FRONT_SITE_PATH."admin/class");
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
<script src="https://cdn.plyr.io/3.6.9/plyr.polyfilled.js"></script>
<script>
//   const player = new Plyr('.player');
  const players = Array.from(document.querySelectorAll('#player')).map(p => new Plyr(p));
</script>
</html>