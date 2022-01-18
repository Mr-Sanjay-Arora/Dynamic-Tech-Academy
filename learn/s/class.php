<?php 

$page_title = "Attend Class";
include_once("front/styles.php");

?>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.9/plyr.css" />
</head>
<?php

$class_url = $_GET["class_id"];

?>
<body>
    <?php include_once("front/navigator.php")?>
    <?php include_once("front/sidebar.php")?>
    <?php

            $query_url = mysqli_query($con, "select class_master.id, class_master.class_name, class_master.class_description, class_master.video_id, course_master.course_name from class_master,course_master where class_master.course_id = course_master.course_id and class_master.id='$class_url'");
            if(mysqli_num_rows($query_url) > 0){
            while($row = mysqli_fetch_array($query_url)){
        ?>
        <div class="video-frame" style="height:450px">
            <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="<?php echo $row["video_id"]?>"></div>
        </div>
        <!--<div class="video-frame">-->
        <!--<iframe allowfullscreen="" frameborder="0" src="https://www.youtube-nocookie.com/embed/<?php echo $row["video_id"]?>?rel=0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="60%"></iframe>-->
        <!--</div>-->
    <div class="main-wrapper mt-0">
        
        
        <div class="container">
            <div class="row">
                <div class="col-12 my-4 mb-2 px-3">
                <hr class="hr-light"/>
                <?php
                    $attended = mysqli_query($con, "select * from attendance where class_id='$class_url' and student_id='".$_SESSION['user_id']."'");
                    if(mysqli_num_rows($attended) > 0){
                ?>
                    <p class="text-end">You have marked your attendance for this class!</p>
                    <?php } else {?>
                        <div class="d-flex align-items-center justify-content-between">
                        <input type="hidden" value="<?php echo $class_url?>" id="class_id">
                        <input type="hidden" value="<?php echo $_SESSION["user_id"]?>" id="student_id">
                        <p class="mb-0">Mark your attendance now...</p><button class="btn btn-primary btn-sm ms-2 btn-detail" type="button" id="btn_attend">Mark as Present</button>
                    </div>
                    <?php }?>
                    <hr class="hr-light"/>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-md-8 offset-2">
                    <div class="card">
                        <div class="card-body mb-5">
                            
                            <div class="row p-4">
                                <div class="col-12">
                                    <h4><?php echo $row["class_name"]?></h4>
                                    <div class="text-end my-3">
                                        <span class="badge bg-primary"><img src="<?php echo FRONT_SITE_PATH?>assets/img/tag-white.svg" alt="" width="15">&nbsp;<?php echo $row["course_name"]?></span>
                                    </div>
                                        <p><?php echo $row["class_description"]?></p>
                                </div>

                                
                            </div>
                            <?php
                                } 
                            }
                            else{ 
                                redirect(FRONT_PATH_STUDENT."calendar");
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