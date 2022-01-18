<?php

$page_title = "Get your scores for your quizzes!";
include_once("front/styles.php");

$quiz_id = $_GET["quiz_id"];

?>
<body style="background:url('<?php echo FRONT_SITE_PATH?>assets/img/quiz_bg_2.svg') no-repeat;background-attachment:fixed;background-size:105%">
    <?php include_once("front/navigator.php")?>
    <?php include_once("front/sidebar.php")?>
<style>
    .score{
        background: rgb(51, 51, 51);
        border-radius: 12px;
        font-size: 2.5rem;
        padding: 5px 12px;
        margin: 15px 2.5px;
        flex-shrink: 0;
        color: rgb(255, 255, 255);
        display: inline-flex;
        -webkit-box-align: center;
        align-items: center;
    }
</style>
<div class="main-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 offset-lg-2">
                <div class="card">
                    <div class="card-body">
                    <?php
                        $queryouter = mysqli_query($con,"select * from student_quizzes where student_id = '".$_SESSION["user_id"]."' and quiz_id = '".$quiz_id."'");
                        if(mysqli_num_rows($queryouter) == 0){
                            redirect(FRONT_PATH_STUDENT.'quiz');
                        }
                    ?>
                        <h4 class="my-3 text-center">Your Scoreboard</h4>
                    </div>
                </div>
                <?php
                    $query = mysqli_query($con,"select * from quiz_response, quiz_format, students where quiz_response.question_id = quiz_format.question_id and quiz_response.student_id = students.id and quiz_response.quiz_id = quiz_format.quiz_id and quiz_response.quiz_id='".$quiz_id."' and student_id = '".$_SESSION["user_id"]."'");
                    if(mysqli_num_rows($query) > 0){
                        
                ?>
                    <?php
                        $sr = 1;
                        $count_row = mysqli_num_rows($query);
                        $count_correct = 0;
                        $count = 0;
                        while($row = mysqli_fetch_array($query)){
                            $response = $row["student_answer"];
                            $correct_answer = $row["correct_answer"];


                    ?>
                <div class="card">
                    <div class="card-body">
        
                    <div>
                        <p class="mt-2"><span><?php echo str_pad($sr,2,'0',STR_PAD_LEFT)?></span>) <?php echo $row["quiz_description"]?></p>
                        <div class="answer-box">
                            <?php if($row[$correct_answer] == $row[$response]){$count_correct++;}?>
                            <?php if($response == $correct_answer){?>
                            <div class="true"><p class="d-block mb-0">Your Response: <?php echo $row["$response"]?></p></div>
                            <div><p class="mt-2 mb-2">Correct Answer: <?php echo $row["$correct_answer"]?></p></div>
                            <div class="answer_description"><?php echo $row["answer_description"]?></div>
                            <?php }?>
                            
                            <?php if($response != $correct_answer){?>
                            <div class="false"><p class="d-block mb-0">Your Response: <?php echo $row["$response"]?></p></div>
                            <div><p class="mt-2 mb-2">Correct Answer: <?php echo $row["$correct_answer"]?></p></div>
                            <div class="answer_description"><?php echo $row["answer_description"]?></div>
                            <?php }?>
                        </div>
                    </div>
                    
                    </div>
                </div>
            
                
                <?php $sr++;}?>
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-0 text-center">You've answered <?php echo str_pad($count_correct,2,'0',STR_PAD_LEFT)?> out of <?php echo str_pad($count_row,2,'0',STR_PAD_LEFT)?> questions correct!</h6>
                     </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <?php 
                        $str = round(($count_correct/$count_row)*100);
                        $arr = str_split($str);
                        // echo $str;
                        
                            if(intval($str) >= 0 && intval($str) < 10){
                                ?>
                                <div class="text-center my-5">
                                    <h4>You've Scored <span class="score"><?php echo $arr[0]?></span></h4>
                                    <img src="https://hdsmileys.com/wp-content/uploads/2017/11/cry.gif" width="200" alt="">
                                    <p>Better luck next time.<br/>You need to study really very hard.</p>
                                </div>
                            <?php
                            }
                            elseif(intval($str) >= 10 && intval($str) < 50){
                                ?>
                                <div class="text-center my-5">
                                    <h4>You've Scored <span class="score"><?php echo $arr[0]?></span><span class="score"><?php echo $arr[1]?></span></h4>
                                    <img src="https://hdsmileys.com/wp-content/uploads/2017/11/cry.gif" width="200" alt="">
                                    <p>Better luck next time.<br/>You need to study really very hard.</p>
                                </div>
                                
                            <?php
                            }
                            elseif(intval($str) >= 50 && intval($str) < 100){
                                ?>
                                <div class="text-center my-5">
                                <h4>You've Scored <span class="score"><?php echo $arr[0]?></span><span class="score"><?php echo $arr[1]?></span></h4>
                                <img src="https://hdsmileys.com/wp-content/uploads/2017/11/perfect.gif" width="200" alt="">
                                <p>Good Job, you can excel next time!<br/>Keep studing hard.</p>
                                </div>
                            <?php
                            }
                            elseif($str = 100){
                                ?>
                                <div class="text-center my-5">
                                <h5 class="text-uppercase">You've Scored<br/><span class="score"><?php echo $arr[0]?></span><span class="score"><?php echo $arr[1]?></span><span class="score"><?php echo $arr[2]?></span></h5>
                                <img src="https://hdsmileys.com/wp-content/uploads/2017/11/dabbing.gif" width="200" alt="">
                                <p>Excellent, you are going great!</p>
                                </div>
                            <?php
                            }
                        ?>
                        
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>



</body>
<?php include_once("front/scripts.php")?>
</html>