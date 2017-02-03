<?php
//profile.php

//require_once 'includes/global.php';

//check to see if they're logged in
if(!isset($_SESSION['Username'])) {
    header("Location: login.php");
}

$UserID = $_GET['userID'];
$CheckQuery = sqlsrv_query("SELECT * FROM ClientInfo WHERE Accountno='$acc'");

$CheckNumber = sqlsrv_num_rows($CheckQuery);
if ($CheckNumber !== 1)
{
    <?php echo $$row431;  ?>
}

// finding user and viewing it
$tools = new FindUser();
$user = $tools->get($_REQUEST['userID']);

?>