<?php $page_title = "Manager for your website, manage students, teachers, notifications, quizzes, classes..."?>

    <?php include_once("front/styles.php")?>


<body>

    <?php include_once("front/navigator.php")?>

    <?php include_once("front/sidebar.php")?>

    <div class="main-wrapper">
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
                <div class="card p-3">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-2 border-end">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" data-bs-toggle="tab" href="#v-pills-home" role="tab">Classes</a>
                                <a class="nav-link" data-bs-toggle="tab" href="#v-pills-profile" role="tab">Quizzes</a>
                                <a class="nav-link" data-bs-toggle="tab" href="#v-pills-messages" role="tab">Notifications</a>
                                <a class="nav-link" data-bs-toggle="tab" href="#v-pills-settings" role="tab">Users</a>
                                <a class="nav-link" data-bs-toggle="tab" href="#v-pills-payment" role="tab">Uploads</a>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="paddingx-10 paddingy-10 pt-5">
                                    <h5>Add Class Details</h5>
                                    <hr class="hr-light">
                                    <form method="post" id="add_class" autocomplete="off">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="mb-1">Class Name</label>
                                                        <div class="mb-3"><input class="form-control" type="text" name="class_name" placeholder="Title"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                    <label class="mb-1">Class Info</label>
                                                        <div class="mb-3"><textarea class="form-control" name="class_description" placeholder="Class Description" rows="3"></textarea></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                    <label class="mb-1">Youtube Video Link</label>
                                                    <div class="mb-3"><input class="form-control" type="text" name="video_id" placeholder="https://www.youtube.com/watch?v=LSwBsUlYq4U"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3"><span>Choose course Category for the class</span>
                                                        <select class="form-select custom-select custom-selection" name="course_category">
                                                        <option value selected>Choose Course Category</option>
                                                        <?php
                                        
                                                            $query = mysqli_query($con, "select * from course_master ORDER BY id");
                                                            $check=mysqli_num_rows($query);
                                                            if($check>0){	
                                                                while($row = mysqli_fetch_array($query)){
                                                        ?>
                                                                <option value="<?php echo $row["course_id"]?>"><?php echo $row["course_name"]?></option>
                                                            
                                                            <?php } }?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <label>Choose Class Date, Start & End Time</label>
                                                <div class="row mt-2">
                                                <div class="col-md-4">
                                                    
                                                    <div class="mb-3"><input class="form-control" type="date" name="class_date" placeholder="Class Date"></div>
                                                    </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3"><input class="form-control" type="time" name="start_time" placeholder="Start Time"></div>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                    <div class="mb-3"><input class="form-control" type="time" name="end_time" placeholder="End Time"></div>
                                                    </div>
                                                </div>
                                            <button class="btn btn-primary btn-detail mt-5 btn-block" type="submit">Create a Class</button>
                                            </form>
                                    </div>
                                
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div class="paddingx-10 paddingy-10 pt-5">
                                    <h5>Add Quiz</h5>
                                    <hr class="hr-light">
                                    <form method="post" id="quiz_form">
                                <div class="row">
                                    <div class="col-8"><label class="form-label">Quiz Name</label><input class="form-control" type="text" name="quiz_name"></div>
                                    <div class="col-4">
                                        <label class="form-label">Select Category</label>
                                        <select class="form-select custom-select custom-selection" name="category">
                                            <option value="" selected>Choose Course Category</option>
                                            <?php
                            
                                                $query = mysqli_query($con, "select * from course_master ORDER BY id");
                                                $check=mysqli_num_rows($query);
                                                if($check>0){	
                                                    while($row = mysqli_fetch_array($query)){
                                            ?>
                                                    <option value="<?php echo $row["course_id"]?>"><?php echo $row["course_name"]?></option>
                                                
                                                <?php } }?>
                                        </select>
                                    </div>
                                </div>
                                <hr class="hr-light m-4"/>
                                <div class="questions_wrapper">
                                <div id="question_inner_wrapper">
                                <div class="row mt-3">
                                        <div class="col-12"><div class="d-flex flex-row justify-content-between align-items-center"><div>Question #<input class="q-num border-0" value="1" readonly></div></div></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12"><label class="form-label">Question Description</label><textarea class="form-control" rows="3" style="resize: none;" name="question[]"></textarea></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-6"><label class="form-label">Option A</label><input class="form-control" type="text" name="ans1[]"></div>
                                        <div class="col-lg-6"><label class="form-label">Option B</label><input class="form-control" type="text" name="ans2[]"></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-6"><label class="form-label">Option C</label><input class="form-control" type="text" name="ans3[]"></div>
                                        <div class="col-lg-6"><label class="form-label">Option D</label><input class="form-control" type="text" name="ans4[]"></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12"><label class="form-label">Answer Description</label><textarea class="form-control" rows="3" style="resize: none;" name="answer[]"></textarea></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12"><label class="form-label">Correct Answer</label>
                                        <select class="form-select custom-select custom-selection" name="correct_ans[]">
                                                <option value="option_a">Option A</option>
                                                <option value="option_b">Option B</option>
                                                <option value="option_c">Option C</option>
                                                <option value="option_d">Option D</option>
                                            </select></div>
                                    </div>
                                    <hr class="hr-light m-4">
                                </div>
                                
                                </div>
                                    <div class="row mt-3">
                                        <div class="col-12 d-flex flex-row justify-content-between align-items-end">
                                            <button class="btn btn-primary btn-detail" type="submit">Generate Quiz</button>
                                            <button id="add-q" data-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Add a Question?" class="btn btn-primary btn-detail" type="button">+</button>
                                        </div>
                                    </div>
                            </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    <div class="paddingx-10 paddingy-10 pt-5">
                                    <h5>Add Notifications</h5>
                                    <hr class="hr-light">
                                        <form method="post" id="add_notify" autocomplete="off">
                                            <textarea class="form-control" name="notification" placeholder="Enter a string of characters, will generate a notification in the dashboards..." rows="3" spellcheck="false" id="note" required></textarea>
                                            <button class="btn btn-primary btn-detail mt-5" type="submit">Done</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    <div class="paddingx-10 paddingy-10 pt-5">
                                        <h5>Add Students</h5>
                                        <hr class="hr-light">
                                        <form method="post" id="add_student_form" autocomplete="off">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3"><input class="form-control" type="text" name="first_name" placeholder="First Name"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3"><input class="form-control" type="text" name="middle_name" placeholder="Middle Name"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3"><input class="form-control" type="text" name="last_name" placeholder="Last Name"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                    <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="mb-3"><input class="form-control" type="tel" name="contact" placeholder="Contact Number"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                    <div class="mb-3"><input class="form-control" type="tel" name="additional_contact" placeholder="Additional Contact"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <select class="form-select custom-select custom-selection" name="gender">
                                                                <option selected value="">Choose Gender</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="others">Not to specify</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                    <div class="mb-3"><input class="form-control js-datepicker" type="text" name="dob" placeholder="Date of Birth"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="mb-3"><input class="form-control" type="text" name="institute_name" placeholder="Enter College's Name"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                    <div class="mb-3"><textarea class="form-control" name="address" placeholder="Currently Address" rows="3"></textarea></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-8">
                                                    <div class="mb-3" style="position:relative"><input class="form-control" type="text" name="password" id="spassword" placeholder="Generate random Password" readonly><img src="<?php echo FRONT_SITE_PATH?>assets/img/clipboard.svg" class="copy-bar" alt="" onclick="copySPassword()"></div>
                                                    </div>
                                                    <div class="col-4">
                                                    <div class="mb-3"><button class="btn btn-primary btn-detail" id="spass_generator" type="button">Generate Password</button></div>
                                                    </div>
                                                </div>
                                                <div class="text-center mt-5">
                                                <button class="btn btn-primary btn-detail" type="submit">Generate Student</button>
                                                </div>
                                            </form>
                                        
                                            <hr class="hr-light mt-5">

                                        <h5 class="mt-5">Add Teacher</h5>
                                        <hr class="hr-light">
                                            <form method="post" id="add_teacher" class="mt-5" autocomplete="off">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3"><input class="form-control" type="text" name="full_name" placeholder="Full Name"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <select class="form-select custom-select custom-selection" name="gender">
                                                                <option selected value="">Choose Gender</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="others">Not to specify</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="mb-3"><input class="form-control" type="tel" name="contact" placeholder="Contact Number"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                    <div class="mb-3"><textarea class="form-control" name="address" placeholder="Currently Living at" rows="3"></textarea></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    
                                                    <div class="col-8">
                                                    <div class="mb-3" style="position:relative"><input class="form-control" type="text" name="password" id="tpassword" placeholder="Generate random Password" readonly><img src="<?php echo FRONT_SITE_PATH?>assets/img/clipboard.svg" class="copy-bar" alt="" onclick="copyTPassword()"></div>
                                                    </div>
                                                    <div class="col-4">
                                                    <div class="mb-3"><button class="btn btn-primary btn-detail" id="tpass_generator" type="button">Generate Password</button></div>
                                                    </div>
                                                </div>
                                                <div class="text-center mt-5">
                                                <button class="btn btn-primary btn-detail" type="submit">Generate Teacher</button>
                                                </div>
                                            
                                            </form>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    <div class="paddingx-10 paddingy-10 pt-5">
                                        <h5>Upload Files</h5>
                                        <hr class="hr-light">
                                        <form method="post" id="upload_files">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label>File Name</label>
                                                    <div class="mb-3"><input class="form-control" type="text" name="file_name" placeholder="Specify a Name"></div>
                                                </div>
                                                <div class="col-12">
                                                    <label>File URL</label>
                                                    <div class="mb-3"><input class="form-control" type="text" name="file_link" placeholder="https://l88d-my.sharepoint.com/"></div>
                                                </div>
                                            </div>
                                            <label>File Category</label>
                                            <select class="form-select custom-select custom-selection" name="category">
                                            <option value="" selected>Choose Course Category</option>
                                            <?php
                            
                                                $query = mysqli_query($con, "select * from course_master ORDER BY id");
                                                $check=mysqli_num_rows($query);
                                                if($check>0){	
                                                    while($row = mysqli_fetch_array($query)){
                                            ?>
                                                    <option value="<?php echo $row["course_id"]?>"><?php echo $row["course_name"]?></option>
                                                
                                                <?php } }?>
                                        </select>
                                        <button class="btn btn-primary btn-detail mt-4" type="submit">Submit File</button>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index:100">
            <div id="message" class="bg-dark p-4 text-white toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                <div class="toast-body"></div>
            </div>
        </div>
        </div>
    </div>
    
</body>
<?php include_once("front/scripts.php")?>

</html>