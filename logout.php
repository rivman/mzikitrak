<?php
session_start();
$check=$_SESSION['SESS_username'];
if(session_destroy()) // Destroying All Sessions
{
header("Location: index.php"); // Redirecting To Home Page
}
?>