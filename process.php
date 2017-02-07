
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



$file =rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$new_file_name = strtolower($file);
$final_file=str_replace(' ','-',$new_file_name);
$folder1='uploadid/'.$final_file;
move_uploaded_file ($file_loc, $folder1);


$file1 =rand(1000,100000)."-". $_FILES['file1']['name'];
$file_loc1 = $_FILES['file1']['tmp_name'];
$new_file_name1 = strtolower($file1);
$final_file1=str_replace(' ','-',$new_file_name1);
$folder2='uploadimages/'.$final_file1;
move_uploaded_file ($file_loc1, $folder2);




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
                  //alert("Account Opened successfully.");
                  top.location.href = "dashboard.php"; //the page to redirect
            </script>

