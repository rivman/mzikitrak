<?php

$session431=sqlsrv_query($conn, "SELECT * FROM ClientInfo WHERE Email='$check' ");
$row431=sqlsrv_fetch_array($session431);
$acc=$row431['AccountNo'];
$image=$row431['PassportPhoto'];



 
 <?php echo $row431 ['Username'];  ?>

 ?>



