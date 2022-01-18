<?php

function get_safe_value($str){
	global $con;
	$str=mysqli_real_escape_string($con,$str);
	return $str;
}

function pr($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	die();
}

function redirect($link){
	?>
	<script>
	window.location.href='<?php echo $link?>';
	</script>
	<?php
	die();
}

function random(){
    $str=str_shuffle("abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz0123456789");
	echo $str=substr($str,0,15);
}

?>