<?php
session_start();
$check=$_SESSION['SESS_username'];
session_destroy();

header("Location: index.php");
exit;
?>