
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




$y= $_POST['county'];
$y1= $_POST['address'];
$y2= $_POST['password'];
$y3= $_POST['fname'];
$y4= $_POST['lname'];
$y5= $_POST['pnumber'];
$y6= $_POST['eaddress'];
$date=date('d/m/Y');


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



$sql="UPDATE ClientInfo SET County='$y',NationalID='$final_file',PassportPhoto='$final_file1',DateRegistered='$date' WHERE AccountNo='$acc'";

$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

$sql2="INSERT INTO NextofKin( FirstName,LastName,PhoneNumber,Email,AccountNumber)
VALUES(?,?,?,?,?)";
$params = array($y3,$y4,$y5,$y6,$acc);
$stmt12 = sqlsrv_query( $conn, $sql2, $params);

            if( $stmt12 === false ) {
         die( print_r( sqlsrv_errors(), true));
                }

 
$sql3="UPDATE loginCredentials SET Status='1',Password='$encrypted_txt' WHERE AccountNo='$acc'";

$stmt3 = sqlsrv_query( $conn, $sql3);
if( $stmt3 === false ) {
     die( print_r( sqlsrv_errors(), true));
}

                


?>
<script language="javascript">
                  alert("Profile edited successfully.");
                  top.location.href = "profile.php"; //the page to redirect
            </script>

