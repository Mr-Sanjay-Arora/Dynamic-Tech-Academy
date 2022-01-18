<?php 
session_start();

include("../../env/database.php");
include("../../env/constants.php");
include("../../env/functions.php");

$quiz_name = get_safe_value($_POST['quiz_name']);
$category = get_safe_value($_POST['category']);

$question = $_POST['question'];

$ans1 = $_POST['ans1'];
$ans2 = $_POST['ans2'];
$ans3 = $_POST['ans3'];
$ans4 = $_POST['ans4'];

$answer = $_POST['answer'];
$correct_ans = $_POST['correct_ans'];

if(!empty($quiz_name)){

$query = mysqli_query($con,"select * from quiz_master order by quiz_id desc limit 1");
$check = mysqli_fetch_assoc($query);

if(!empty($category)){
    if($check["quiz_id"] >= 0){
    
        $quiz_number = intval($check["quiz_id"]) + 1;
        
    
        foreach($question as $key => $val){
            $quest = $val;
            $ansa = $ans1[$key];
            $ansb = $ans2[$key];
            $ansc = $ans3[$key];
            $ansd = $ans4[$key];
    
            $ansDesc = $answer[$key];
            $correct = $correct_ans[$key];
    
            $query_inner = mysqli_query($con,"select * from quiz_format order by question_id desc limit 1");
            $check_qid = mysqli_fetch_assoc($query_inner);
    
            $question_id = intval($check_qid["question_id"]) + 1;
            
    
        // prx($quiz_name ."<br/>". $category ."<br/>". $quest ."<br/>". $ansa ."<br/>". $ansb ."<br/>". $ansc ."<br/>". $ansd."<br/>". $ansDesc."<br/>". $correct."<br/>");
    
            if(!empty($quest) && !empty($ansa) && !empty($ansb) && !empty($ansc) && !empty($ansd) && !empty($ansDesc) && !empty($correct)){
                mysqli_query($con,"INSERT INTO `quiz_format`(`quiz_id`, `course_id`, `question_id`, `quiz_description`, `option_a`, `option_b`, `option_c`, `option_d`, `answer_description`, `correct_answer`) VALUES ('$quiz_number','$category','$question_id','$quest','$ansa','$ansb','$ansc','$ansd','$ansDesc','$correct')");
            }
            else{
                echo("Please complete all the fields");
            }
        }
        if(!empty($quest) && !empty($ansa) && !empty($ansb) && !empty($ansc) && !empty($ansd) && !empty($ansDesc) && !empty($correct)){
            mysqli_query($con,"INSERT INTO `quiz_master`(`quiz_id`, `quiz_name`, `course_id`, `status`) VALUES ('$quiz_number','$quiz_name','$category','1')");
            echo("Quiz created successfully!");
            redirect("master");
        }
        }
    }
    else{
        echo("Please choose a Category for the Quiz");
    }
}
else{
    echo("Please name your Quiz");
}
?>