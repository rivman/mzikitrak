<? php
include('conn.php');


if(isset($_POST) & !empty($_POST)){
  $check=$_SESSION['SESS_username'];
  $session43=sqlsrv_query($conn, "SELECT * FROM LoginCredentials WHERE Username='$check' ");
  $res = sqlsrv_query($connection, $sql);
  $count = sqlsrv_num_rows($res);
  if($count == 1){
    echo "Send email to user with password";
  }else{
    echo "User name does not exist in database";
  }
}

$r = sqlsrv_fetch_assoc($res);
$password = $r['password'];
$to = $r['email'];
$subject = "Your Recovered Password";
 
$message = "Please use this password to login " . $password;
$headers = "From : vivek@codingcyber.com";
if(mail($to, $subject, $message, $headers)){
  echo "Your Password has been sent to your email id";
}else{
  echo "Failed to Recover your password, try again";
}

?>