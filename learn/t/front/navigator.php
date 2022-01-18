<!-- Start: Navigation -->
<nav class="navbar navbar-light navbar-expand fixed-top navtop">
    <div class="container-fluid"><a class="navbar-brand" href="<?php echo FRONT_PATH_STUDENT?>"><img src="<?php echo FRONT_SITE_PATH?>assets/img/logo.png" class="navbar-brand"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto">
                <?php
                    $query = mysqli_query($con, "select * from teachers where full_name='".$_SESSION['userName']."'");
                    $check=mysqli_num_rows($query);
                    if($check>0){	
                        $row=mysqli_fetch_assoc($query);
                ?>
                    <li class="nav-item"><a class="nav-link">Hello,&nbsp;<span><?php echo $row["full_name"]?></span></a></li>
                <?php }?>
                <li class="nav-item dropdown"><a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="javascript:void(0)"><img class="rounded-circle" src="<?php echo "https://learn.dynamictechacademy.com/t/image/".$row["profileimg"]?>" width="40" height="40" alt="Profile Image"></a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="<?php echo FRONT_PATH_TEACHER?>my-profile">
                            <p class="mb-0"><i class="material-icons me-2 ms-1 verified-user">verified_user</i>My Account</p>
                        </a>
                        <hr class="hr-light">
                        <a class="btn btn-cancel"  id="btn_logout" href="<?php echo FRONT_PATH_TEACHER?>logout" role="button"><i class="material-icons me-2 ms-1 log-off">power_settings_new</i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav><!-- End: Navigation -->