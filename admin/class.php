<?php $page_title = "Create Classes, manage classes for students..."?>

    <?php include_once("front/styles.php")?>


<body>

    <?php include_once("front/navigator.php")?>

    <?php include_once("front/sidebar.php")?>

    <div class="main-wrapper">
    <ol class="breadcrumb ms-5">
            <li class="breadcrumb-item"><a href="<?php echo FRONT_SITE_PATH?>admin"><span>Home</span></a></li>
            <li class="breadcrumb-item"><a href="class"><span>Manage Classes</span></a></li>
        </ol>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body m-3">
                        <div class="table-responsive text-center">
                                    <table class="table table-borderless" id="student-list">
                                        <thead>
                                            <tr>
                                                <th style="border:none" width="10%">Sr. No</th>
                                                <th style="border:none;text-align:left">Class Name</th>
                                                <th style="border:none">Course Category</th>
                                                <th style="border:none">Class Date</th>
                                                <th style="border:none">Status</th>
                                                <th style="border:none">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        
                                            $query = mysqli_query($con, "select class_master.id,class_master.class_name,course_master.course_name,class_master.date,class_master.status from class_master, course_master where class_master.course_id = course_master.course_id ORDER BY id ");
                                            $check=mysqli_num_rows($query);
                                            if($check>0){	
                                                while($row = mysqli_fetch_array($query)){
                                                    $date=date_create($row["date"]);
                                        ?>
                                            <tr>
                                                <td><?php echo $row["id"]?></td>
                                                <td class="text-start"><?php echo $row["class_name"]?></td>
                                                <td><?php echo $row["course_name"]?></td>
                                                <?php if($row["date"]){?>
                                                <td><?php echo date_format($date,"d M Y")?></td>
                                                <?php } else{?>
                                                <td class="not-available">Not Available</td>
                                                <?php }?>
                                                <td>
                                                    <?php
                                                        if($row["status"] == 1){
                                                            $status = "active";
                                                    ?>
                                                    <span class="<?php echo $status?>"><?php echo ucfirst($status)?></span>
                                                    <?php
                                                        }else{
                                                            $status = "Disabled";
                                                    ?>
                                                    <span class="<?php echo $status?>"><?php echo ucfirst($status)?></span>
                                                    <?php }?>
                                                </td>
                                                <td><a class="" href="classes-outline/<?php echo $row['id']?>">View Details</a></td>
                                            </tr>
                                        <?php
                                                }
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
<?php include_once("front/scripts.php")?>
</html>