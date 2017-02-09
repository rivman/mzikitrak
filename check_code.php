<?php
include('conn.php');





$sql = "SELECT Email FROM ClientInfo ";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt = sqlsrv_query( $conn, $sql , $params, $options );

$row_count = sqlsrv_num_rows($stmt);
   
if ($row_count == 0)
   die('<img src="cross.png" />');
else
   die('<img src="tick.png" />');




?>
