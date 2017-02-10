
<?php


include ('conn.php');

session_start();
$check=$_SESSION['SESS_username'];
$session43=sqlsrv_query($conn, "SELECT * FROM LoginCredentials WHERE Username='$check' ");
$row43=sqlsrv_fetch_array($session43);
$login_session=$row43['Username'];
$status=$row43['Status'];
if(!isset($login_session))
{
header("Location:index.php");
}

$session431=sqlsrv_query($conn, "SELECT * FROM ClientInfo WHERE Email='$check' ");
$row431=sqlsrv_fetch_array($session431);
$acc=$row431['AccountNo'];


$rt1=$_POST['fname'];
$rt2=$_POST['lname'];
$rt3=$_POST['email'];
$rt4=$_POST['pnumber'];


$y= $_POST['county'];
$y1= $_POST['address'];
$y2= $_POST['password'];
$y3= $_POST['fname'];
$y4= $_POST['lname'];
$y5= $_POST['pnumber'];
$y6= $_POST['eaddress'];
$date=date('d/m/Y');


if (isset($_POST['savechanges']))

{



$sql="UPDATE ClientInfo SET County='$y',FirstName='rt1',LastName='rt2',PhoneNumber='rt4',Email='rt3' WHERE AccountNo='$acc'";

$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

$sql1="UPDATE NextofKin SET  FirstName='y3',LastName='y4',PhoneNumber='y5',Email='y6' WHERE AccountNo='$acc'";

$stmt = sqlsrv_query( $conn, $sql1);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

}

                


?>


