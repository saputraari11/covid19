<?php
session_start();
// var_dump($_SESSION);die;
session_destroy();
header("Location: http://localhost/adminc/login/form-login.php");
exit;
?>