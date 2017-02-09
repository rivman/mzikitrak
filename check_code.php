<?php
include('conn.php');


$r=$_POST['username'];




$session43=sqlsrv_query($conn, "SELECT Email from ClientInfo where Email='$r' ");
$row43=sqlsrv_fetch_array($session43);
   $emailg=$row43['Email'];
  if($emailg==$r)
   {
    die('<img src="cross.png" />');
   }
   if($emailg!=$r){

   	 die('<img src="tick.png" />');
   	}



?>
