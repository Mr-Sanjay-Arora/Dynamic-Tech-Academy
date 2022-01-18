<?php

$page_title = "Watch Uploaded videos...";
include_once("front/styles.php");

?>

<link rel="stylesheet" href="https://cdn.plyr.io/3.6.9/plyr.css" />
<body>

    <?php include_once("front/navigator.php")?>

    <?php include_once("front/sidebar.php")?>
    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body m-3">
                            <h5 class="mb-0">Reference Videos</h5>
                            <p>Watch Videos, Refer them for your preparation..</p>
                            <hr class="hr-light">
                        <div class="row">
                        <?php
                            $select_value = "1";
                            
                            $query = mysqli_query($con, "select * from files, course_master, student_courses where files.course_category = course_master.course_id and files.course_category = student_courses.course_id and student_courses.student_id = '".$_SESSION["user_id"]."' ORDER BY files.file_id desc");
                            $check=mysqli_num_rows($query);
                            if($check>0){
                                while($row = mysqli_fetch_array($query)){
                                    $file_link = $row["file_link"];
                                    $file_category = $row["course_name"];
                                    $file_name = $row["file_name"];
                                    // $date=date_create($row["created_on"]);
                                    // $file_name = explode('.',$row["file_name"]);
                                    // $file_name = preg_replace("/[\-_]/"," ",$file_name);
                        ?>
                        <div class="col-md-3 mb-3">
                            
                            <!--<video class="player" controls playsinline>-->
                            <!--    <source src="<?php echo $file_link?>" type="video/mp4"/>-->
                            <!--</video>-->
                            <!--<p class="mt-2"><?php echo ucwords(reset($file_name))?></p>-->
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
<script language="JavaScript">

//   window.onload = function() {
//     document.addEventListener("contextmenu", function(e){
//       e.preventDefault();
//       alert("Right Click is disabled!");
//     }, false);
//     document.addEventListener("keydown", function(e) {
//     //document.onkeydown = function(e) {
//       // "I" key
//       if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
//         disabledEvent(e);
//       }
//       // "J" key
//       if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
//         disabledEvent(e);
//       }
//       // "S" key + macOS
//       if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
//         disabledEvent(e);
//       }
//       // "U" key
//       if (e.ctrlKey && e.keyCode == 85) {
//         disabledEvent(e);
//       }
//       // "F12" key
//       if (event.keyCode == 123) {
//         disabledEvent(e);
//       }
//     }, false);
//     function disabledEvent(e){
//       if (e.stopPropagation){
//         e.stopPropagation();
//       } else if (window.event){
//         window.event.cancelBubble = true;
//       }
//       e.preventDefault();
//       return false;
      
//     }
//   };
</script>
<script src="https://cdn.plyr.io/3.6.9/plyr.polyfilled.js"></script>
<script>
//   const player = new Plyr('.player');
  const players = Array.from(document.querySelectorAll('.player')).map(p => new Plyr(p));
</script>
</html>