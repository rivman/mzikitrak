<?php
$email=$_GET['email'];
//$password=$_GET['password'];


$to = $email; // this is your Email address
    $from ="alerts@mzikitrak.com"; // this is the sender's Email address
    
    $subject = "Login  details";
    $subject2 = "Copy of your form submission";
    $message = " Click this link to reset your password:"."\n\n"."http://mzikitrak.azurewebsites.net/newpass.php" . "\n\n"."Email Address"."\n\n" . $email.//"\n\n"."password"."\n\n" .$password;
   // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
?>

<script language="javascript">
                  alert("We have sent the password reset link to your  email");
                  top.location.href = "http://mzikitrak.azurewebsites.net/index.php"; //the page to redirect
            </script>