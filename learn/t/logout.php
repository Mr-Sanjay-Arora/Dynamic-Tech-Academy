<?php
session_start();

include('../../env/constants.php');
include('../../env/functions.php');

session_unset();

session_destroy();

redirect(FRONT_PATH_TEACHER);
?>