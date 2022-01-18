<?php

session_start();

include("../../env/database.php");
include("../../env/constants.php");
include("../../env/functions.php");

// set_time_limit(2000000);

$category = get_safe_value($_POST["category"]);
$file_name = $_FILES['video']['name'];
$tmp_name = $_FILES['video']['tmp_name'];
$file_size = $_FILES['video']['size'];


// // (A) HELPER FUNCTION - SERVER RESPONSE
// function verbose ($ok=1, $info="") {
//   if ($ok==0) { http_response_code(400); }
//   exit(json_encode(["ok"=>$ok, "info"=>$info]));
// }

// // (B) INVALID UPLOAD
// if (empty($_FILES) || $_FILES["video"]["error"]) {
//   verbose(0, "Failed to move uploaded file.");
// }

// // (C) UPLOAD DESTINATION - CHANGE FOLDER IF REQUIRED!
// $filePath = __DIR__ . DIRECTORY_SEPARATOR . "videos";
// if (!file_exists($filePath)) { if (!mkdir($filePath, 0777, true)) {
//   verbose(0, "Failed to create $filePath");
// }}
// $fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : $_FILES["video"]["name"];
// $filePath = $filePath . DIRECTORY_SEPARATOR . $fileName;

// // (D) DEAL WITH CHUNKS
// $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
// $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;
// $out = @fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
// if ($out) {
//   $in = @fopen($_FILES["video"]["tmp_name"], "rb");
//   if ($in) { while ($buff = fread($in, 4096)) { fwrite($out, $buff); } }
//   else { verbose(0, "Failed to open input stream"); }
//   @fclose($in);
//   @fclose($out);
//   @unlink($_FILES["video"]["tmp_name"]);
// } else { verbose(0, "Failed to open output stream"); }

// // (E) CHECK IF FILE HAS BEEN UPLOADED
// if (!$chunks || $chunk == $chunks - 1) { rename("{$filePath}.part", $filePath); }
// verbose(1, "Upload OK");

// if($file_size < 50000000){
    $file = explode('.', $file_name);
    $end = end($file);
    $allowed_ext = array('avi', 'flv', 'wmv', 'mov', 'mp4','mkv');
    if(in_array($end, $allowed_ext)){
        if(move_uploaded_file($tmp_name, "../../videos/".$file_name)){
            mysqli_query($con, "INSERT INTO `videos`(`file_name`,`course_category`) VALUES('$file_name','$category')");
            echo "Video Uploaded";
        }
    }else{
        echo "Wrong video format";
    }
// }else{
//     echo "File too large to upload";
// }

?>