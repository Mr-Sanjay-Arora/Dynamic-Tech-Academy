<?php $page_title = "Watch Uploaded videos, Read stored PDFs..."?>

    <?php include_once("front/styles.php")?>
    <!--<link href="https://vjs.zencdn.net/7.17.0/video-js.css" rel="stylesheet" />-->
    <!--<link href="https://unpkg.com/@videojs/themes@1/dist/forest/index.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.9/plyr.css" />
    <style>
    .btn-delete{position:absolute;right:10px;top:8px;display:none;transition:0.2s ease;border-radius:100px;}
    .col-md-3:hover .btn-delete{
        display:block;
        transition:0.2s ease;
    }
    </style>


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
                            <a class="btn btn-primary btn-detail btn-delete" href="back/delete_link?id=<?php echo $row["file_id"]?>" style="">x</a>
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
<script src="https://cdn.plyr.io/3.6.9/plyr.polyfilled.js"></script>
<script>
//   const player = new Plyr('.player');
  const players = Array.from(document.querySelectorAll('.player')).map(p => new Plyr(p));
</script>
<!--<script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script>-->
</html>