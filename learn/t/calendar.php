<?php 


$page_title = "Online Classes";
include_once("front/styles.php");

?>
</head>

<body>
    <?php include_once("front/navigator.php")?>
    <?php include_once("front/sidebar.php")?>
    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3 ms-lg-2">
                        <div class="container-fluid">
                            <div class="row">
                        <?php
                                    $query = mysqli_query($con, "select * from class_master, course_master where class_master.course_id = course_master.course_id ORDER BY class_master.date desc");
                                    $check=mysqli_num_rows($query);
                                    if($check>0){	
                                        $sr = 1;
                                        while($row = mysqli_fetch_array($query)){
                                            $class_date=DateTime::createFromFormat('Y-m-d', $row["date"]);
                                            $start_time=DateTime::createFromFormat('H:i:s', $row["start_time"]);
                                            $end_time=DateTime::createFromFormat('H:i:s', $row["end_time"]);
                                ?>
                                
                                        <div class="col-md-6">
                                        <div class="card">
                                <div class="card-body">
                                    <div>
                                        <div class="row align-items-center">
                                            <div class="col-12 col-md-2">
                                                <div class="dated"><span class="class-day"><?php echo $class_date->format('D')?></span><span class="fw-bold class-date"><?php echo $class_date->format('d, Y')?></span><span><?php echo $class_date->format('M')?></span></div>
                                            </div>
                                            <div class="col-12 col-md-10">
                                                <div class="class_name">
                                                    <p class="mb-0"><?php echo $start_time->format('h:i a')." - ".$end_time->format('h:i a')?><br></p>
                                                    
                                                    <h5 class="fw-bold"><?php echo str_pad($row["class_id"],2,'0',STR_PAD_LEFT)." :: ".$row["class_name"]?></h5>
                                                    <span class="badge bg-primary"><small><img src="<?php echo FRONT_SITE_PATH?>assets/img/tag-white.svg" alt="" width="15">&nbsp;<?php echo $row["course_name"]?></small></span>
                                                </div>
                                                <?php if($row["class_visibility"] == 1){?>
                                                <div class="text-end mt-3"><a class="btn btn-primary btn-detail" role="button" href="classes/v/<?php echo $row["class_id"]?>">View Class</a></div>
                                                <?php }else{?>
                                                    <div class="text-end class-status">Class not yet announced</div>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                </div>
                            
                            </div>
                            <?php $sr++; } }  else{?>
                        <h5>No Class was found!</h5>
                        <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php include_once("front/scripts.php")?>
</html>