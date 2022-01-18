<?php


$page_title = "Attend Quiz, analyze your skills & win your battle";
include_once("front/styles.php");

$quiz_id = $_GET["quiz_id"];

?>
<body>
    <?php include_once("front/navigator.php")?>
    <?php include_once("front/sidebar.php")?>

    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-5 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-none" id="quizID"><?php echo $quiz_id?></div>
                            <div class="d-none" id="studentID"><?php echo $_SESSION["user_id"]?></div>
                        <?php
                        $queryouter = mysqli_query($con,"select * from student_quizzes where student_id = '".$_SESSION["user_id"]."' and quiz_id = '".$quiz_id."'");
                        if(mysqli_num_rows($queryouter) > 0){
                            redirect(FRONT_PATH_STUDENT.'quizzes/r/'.$quiz_id);
                        }
                                $query_outer = mysqli_query($con,"select * from quiz_master where quiz_id='".$quiz_id."'");
                                if(mysqli_num_rows($query) > 0){
                                    $quiz = mysqli_fetch_assoc($query_outer);
                            ?>
                            <h4><?php echo $quiz["quiz_name"]?></h4>
                            <p class="mb-0">Please attempt all the questions in the quiz</p>
                            <?php }?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <?php
                                $query = mysqli_query($con,"select * from quiz_format where quiz_id='".$quiz_id."'");
                                if(mysqli_num_rows($query) > 0){
                            ?>
                            <form method="post" id="quiz_submit">
                                <?php
                                    $sr = 1;
                                    $count = 1;
                                    $countminus = 0;
                                    while($row = mysqli_fetch_array($query)){
                                ?>
                                <div class="quiz-frame">
                                    <p><span class="me-2"><?php echo "[".str_pad($sr,2,'0',STR_PAD_LEFT)."] : :"?></span><?php echo $row["quiz_description"]?></p>
                                    <div class="form-check quiz-options"><input class="form-check-input" type="radio" value="option_a" id="ans-<?php echo $count++?>" name="ans_<?php echo $row['question_id']?>" onchange="submitans(this.value,<?php echo $row['question_id']?>,<?php echo $quiz_id?>,<?php echo $_SESSION['user_id']?>)"><label class="form-check-label d-block" for="ans-<?php echo ++$countminus?>"><?php echo $row["option_a"]?></label></div>
                                    <div class="form-check quiz-options"><input class="form-check-input" type="radio" value="option_b" id="ans-<?php echo $count++?>" name="ans_<?php echo $row['question_id']?>" onchange="submitans(this.value,<?php echo $row['question_id']?>,<?php echo $quiz_id?>,<?php echo $_SESSION['user_id']?>)"><label class="form-check-label d-block" for="ans-<?php echo ++$countminus?>"><?php echo $row["option_b"]?></label></div>
                                    <div class="form-check quiz-options"><input class="form-check-input" type="radio" value="option_c" id="ans-<?php echo $count++?>" name="ans_<?php echo $row['question_id']?>" onchange="submitans(this.value,<?php echo $row['question_id']?>,<?php echo $quiz_id?>,<?php echo $_SESSION['user_id']?>)"><label class="form-check-label d-block" for="ans-<?php echo ++$countminus?>"><?php echo $row["option_c"]?></label></div>
                                    <div class="form-check quiz-options"><input class="form-check-input" type="radio" value="option_d" id="ans-<?php echo $count++?>" name="ans_<?php echo $row['question_id']?>" onchange="submitans(this.value,<?php echo $row['question_id']?>,<?php echo $quiz_id?>,<?php echo $_SESSION['user_id']?>)"><label class="form-check-label d-block" for="ans-<?php echo ++$countminus?>"><?php echo $row["option_d"]?></label></div>
                                    <hr class="hr-light">
                                </div>
                                <?php $sr++;}?>
                                <button class="btn btn-primary btn-detail my-3" type="button" onclick="window.location.href = '<?php echo FRONT_PATH_STUDENT.'quizzes/r/'.$quiz_id?>'">End Quiz</button>
                            </form>
                            <?php }
                            else{
                                redirect(FRONT_PATH_STUDENT.'quiz');
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		</svg>
	</div>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index:100">
            <div id="message" class="bg-dark p-4 text-white toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                <div class="toast-body"></div>
            </div>
        </div>
</body>
<?php include_once("front/scripts.php")?>
</html>