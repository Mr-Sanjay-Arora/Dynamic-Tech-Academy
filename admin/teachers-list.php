<?php $page_title = "Students Record, Manage Students..."?>

    <?php include_once("front/styles.php")?>


<body>

    <?php include_once("front/navigator.php")?>

    <?php include_once("front/sidebar.php")?>

    <div class="main-wrapper">
        <ol class="breadcrumb ms-5">
            <li class="breadcrumb-item"><a href="<?php echo FRONT_SITE_PATH?>admin"><span>Home</span></a></li>
            <li class="breadcrumb-item"><a href="teachers-list"><span>Teachers Record</span></a></li>
        </ol>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive order-desc text-center">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th style="border:none" width="10%">Sr. No</th>
                                                <th class="text-start" style="border:none">Teacher's Name</th>
                                                <th style="border:none">Email ID</th>
                                                <th style="border:none">Status</th>
                                                <th style="border:none">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $query = mysqli_query($con, "select * from teachers ORDER BY id");
                                            $check=mysqli_num_rows($query);
                                            if($check>0){	
                                                while($row = mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <td><?php echo $row["id"]?></td>
                                                <td class="text-start"><?php echo $row["full_name"]?></td>
                                                <td><?php echo $row["email_id"]?></td>
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
                                                <td><a class="" href="teacher-profile/<?php echo $row["slug_url"]?>">View Details</a></td>
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
        </div>

</body>
<?php include_once("front/scripts.php")?>
</html>