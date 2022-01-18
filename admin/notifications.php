<?php $page_title = "Generate Notifications..."?>

    <?php include_once("front/styles.php")?>


<body>

    <?php include_once("front/navigator.php")?>

    <?php include_once("front/sidebar.php")?>

    <div class="main-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo FRONT_SITE_PATH?>admin"><span>Home</span></a></li>
            <li class="breadcrumb-item"><a href="notifications"><span>Notifications</span></a></li>
        </ol>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <div class="card">
                            <div class="card-body">
                                
                                    <!-- <span class="align-right">Sort By<select id="status_change" class="custom-select custom-selection my-3">
                                    <option value="all">All</option>
                                    <option value="active">Active</option>
                                    <option value="deactive">Deactive</option>
                                </select></span> -->
                                <div class="table-responsive text-center">
                                    <table class="table table-borderless" id="notify">
                                        <thead>
                                            <tr>
                                                <th style="border:none" width="10%">Sr. No</th>
                                                <th style="border:none" class="text-start">News Description</th>
                                                <th style="border:none">Date</th>
                                                <th style="border:none">Status</th>
                                                <th style="border:none">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $select_value = "1";
                                            $query = mysqli_query($con, "select * from announcements ORDER BY id ");
                                            $check=mysqli_num_rows($query);
                                            if($check>0){	
                                                $id = 1;
                                                while($row = mysqli_fetch_array($query)){
                                                    $date=date_create($row["created_on"]);
                                        ?>
                                            <tr>
                                            <td><div class="d-none note_id"><?php echo $row["id"]?></div><?php echo $id?></td>
                                                <td class="text-start"><?php echo $row["news_description"]?></td>
                                                <?php if($row["created_on"]){?>
                                                <td><?php echo date_format($date,"d M Y")?></td>
                                                <?php } else{?>
                                                <td class="not-available">Not Available</td>
                                                <?php }?>
                                                <td>
                                                <label class="switch me-3"><input class="modify_notif" type="checkbox" name="type" id="<?php echo $row["id"]?>" value="<?=$row['status']?>" <?=$row['status'] == '0' ? '' : 'checked' ;?>><span class="slider round"></span></label>
                                                </td>
                                                <td><btn class="delete_note" style="cursor:pointer">Delete</btn></td>
                                            </tr>
                                        <?php
                                                $id++;
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
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div class="toast align-items-center bg-primary text-white" id="notification" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    
            </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
</body>
<?php include_once("front/scripts.php")?>
</html>