<?php $page_title = "Quizzes..."?>

    <?php include_once("front/styles.php")?>

<?php

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
                        $query_outer = mysqli_query($con,"select * from quiz_master where quiz_id='".$quiz_id."'");
                                if(mysqli_num_rows($query) > 0){
                                    $quiz = mysqli_fetch_assoc($query_outer);
                            ?>
                            <h4><?php echo $quiz["quiz_name"]?></h4>
                            <p class="mb-0">All the questions in this quiz</p>
                            <?php }?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <?php
                                $query = mysqli_query($con,"select * from quiz_format where quiz_id='".$quiz_id."'");
                                if(mysqli_num_rows($query) > 0){
                            ?>
                                <?php
                                    $sr = 1;
                                    $count = 1;
                                    $countminus = 0;
                                    while($row = mysqli_fetch_array($query)){
                                        $correct_answer = $row["correct_answer"];
                                ?>
                                <div class="quiz-frame answer-box ">
                                    <p class="mt-3"><span class="me-2"><?php echo "[".str_pad($sr,2,'0',STR_PAD_LEFT)."] : :"?></span><?php echo $row["quiz_description"]?></p>
                                    <div class="quiz-options"><p class="mb-0"><?php echo $row["option_a"]?></p></div>
                                    <div class="quiz-options"><p class="mb-0"><?php echo $row["option_b"]?></p></div>
                                    <div class="quiz-options"><p class="mb-0"><?php echo $row["option_c"]?></p></div>
                                    <div class="quiz-options"><p class="mb-0"><?php echo $row["option_d"]?></p></div>
                                    <div><p class="mt-2 mb-2">Correct Answer: <?php echo $row["$correct_answer"]?></p></div>
                                    <div class="answer_description mb-4 mt-3">Answer Description: <?php echo $row["answer_description"]?></div>
                                    <hr class="hr-light"/>
                                </div>
                                <?php $sr++;} }
                            else{
                                redirect('../admin/quiz');
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
    