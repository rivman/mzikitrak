<?php
include('conn.php');

$rt1=$_POST['fname'];
$rt2=$_POST['lname'];
$rt3=$_POST['email'];
$rt4=$_POST['pnumber'];
//$s_name=$_POST['stagename'];
$rt12=date('d/m/Y');



//$rt5=md5(uniqid(rand(10000,10000), true));

   $session43=sqlsrv_query($conn, "SELECT Email from ClientInfo where Email='$rt3' ");
$row43=sqlsrv_fetch_array($session43);
   $emailg=$row43['Email'];
  if($emailg==$rt3)
   {
      header('location:signup.php?var=successful');
   }
   if($emailg!=$rt3){


$result3=sqlsrv_query($conn,"SELECT MAX(ID) as max FROM ClientInfo");
                            $row12=sqlsrv_fetch_array($result3);

$cnt= $row12["max"];


$cnt++;


$accountno="FLG00".$cnt.$rt12;



function generate_random_password($length = 10) {
   $password = '';

  //Initialize a random desired length
  $desired_length = rand(8, 12);

  for($length = 0; $length < $desired_length; $length++) {
    //Append a random ASCII character (including symbols)
    $password .= chr(rand(32, 126));
  }

  return $password;
}

$rt5= generate_random_password(8) ;

function generate_random_password2($length = 10) {
 $password = '';

  //Initialize a random desired length
  $desired_length = rand(8, 12);

  for($length = 0; $length < $desired_length; $length++) {
    //Append a random ASCII character (including symbols)
    $password .= chr(rand(32, 126));
  }

  return $password;
}
    
  

$rt6= "user";

function generate_random_password1($length = 10) {
    $alphabets = range('A','Z');
    $numbers = range('0','9');
     $char = range('*','$');
   
    $final_array = array_merge($alphabets,$numbers,$char);
         
    $password = '';
  
    while($length--) {
      $key = array_rand($final_array);
      $password .= $final_array[$key];
    }
  
    return $password;
  }
  





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

$rt7= generate_random_password1(10) ;



$encrypted_txt = encrypt_decrypt('encrypt', $rt7);

$var="0";
$var1="1";



$query = "INSERT INTO ClientInfo (FirstName,LastName,Email,PhoneNumber,AccountNo,StageName,DateRegistered)
                        VALUES  (?,?,?,?,?,?,?)";

                $params = array($rt1,$rt2,$rt3,$rt4,$rt12,$accountno,$s_name);        
            $stmt = sqlsrv_query( $conn, $query, $params);

            if( $stmt === false ) {
         die( print_r( sqlsrv_errors(), true));
                }

$query1 = "INSERT INTO LoginCredentials(Username,Password,activationCode,accountNo,Status)
                        VALUES  (?,?,?,?,?)";

                $params1 = array($rt3,$encrypted_txt,$rt5,$accountno,$var);        
            $stmt1 = sqlsrv_query( $conn, $query1, $params1);

            if( $stmt1 === false ) {
         die( print_r( sqlsrv_errors(), true));
                }


header("Location: http://www.mzikitrak.com/portal/email/email1.php?email=$rt3&activation=$rt5&lname=$rt2&password=$rt7&fname=$rt1&phone=$rt4");

}


?>

