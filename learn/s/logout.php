<?php
session_start();

include('../../env/constants.php');
include('../../env/functions.php');

unset($_SESSION['user_loggedIn']);
unset($_SESSION['userType']);
unset($_SESSION['userName']);

session_destroy();

redirect(FRONT_PATH_STUDENT);
?>