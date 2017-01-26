<?php
$serverName = "mziki.database.windows.net"; //serverName\instanceName
$connectionInfo = array( "Database"=>"MzikiTrak", "UID"=>"mziki", "PWD"=>"John3:16");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    
}else{
    
     die( print_r( sqlsrv_errors(), true));
}
?>