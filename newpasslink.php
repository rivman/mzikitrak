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
header("Location:passrest.php");
}

$session431=sqlsrv_query($conn, "SELECT * FROM ClientInfo WHERE Email='$check' ");
$row431=sqlsrv_fetch_array($session431);
$acc=$row431['AccountNo'];


$y2= $_POST['password'];



function encrypt_decrypt($action, $string) {
    $output = false;

    $encrypt_method = "AES-256-CBC";
    $secret_key = '5637282hhhrhrhrdn';
    $secret_iv = 'grgr%%%%&***&&^Hjhnnh';

    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}

$encrypted_txt = encrypt_decrypt('encrypt', $y2);


$sql3="UPDATE loginCredentials SET Status='1',Password='$encrypted_txt' WHERE AccountNo='$acc'";

$stmt3 = sqlsrv_query( $conn, $sql3);
if( $stmt3 === false ) {
     die( print_r( sqlsrv_errors(), true));
}

                
 header('location:newpass.php?var=pass_successful');
?>