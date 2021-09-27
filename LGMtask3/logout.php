<?php   
session_start();
session_destroy();
header("location:/LGMtask3/login.php");
exit();
?>