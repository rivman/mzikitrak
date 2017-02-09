<?php

session_start();
	
include('conn.php');


   $session43=sqlsrv_query($conn, "SELECT Email from ClientInfo where Email='$rt3' ");
$row43=sqlsrv_fetch_array($session43);
   $emailg=$row43['Email'];
  if($emailg==$rt3)
   {
      header('location:index.php?var=error');
   }
   if($emailg!=$rt3){

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

$plain_txt = $_POST['password'];

$encrypted_txt = encrypt_decrypt('encrypt', $plain_txt);

$username=$_POST['Email'];

 

$sql = "SELECT * FROM LoginCredentials WHERE Username='$username' AND Password='$encrypted_txt'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt = sqlsrv_query( $conn, $sql , $params, $options );

$row_count = sqlsrv_num_rows( $stmt );
   
if ($row_count == 0){
   header('location:index.php?msg=wrong_details');
   
}
else{
   $result = sqlsrv_query($conn,"SELECT * FROM LoginCredentials WHERE  Username='$username' AND Password='$encrypted_txt' ") or die (sqlsrv_errors()); 



    while( $member = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
    
            $dbuser = $member['Username'];
            $dbpass = $member['Password'];
            
           if($dbuser=$username){
                $_SESSION['SESS_username']= $dbuser;
                
               
              


header ('location:dashboard.php');
}
    }

}
}

?>

