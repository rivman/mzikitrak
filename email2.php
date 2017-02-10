<?php
$email=$_GET['email'];
$password=$_GET['password'];


$to = $email; // this is your Email address
    $from ="alerts@mzikitrak.com"; // this is the sender's Email address
    
    $subject = "Password reset  details";
    $subject2 = "Copy of your form submission";
    $message = " These are Your  are your password  Details:"."\n\n"."http://mzikitrak.azurewebsites.net/newpass.php" . "\n\n"."Email Address"."\n\n" . $email."\n\n"."password"."\n\n" .$password;
   // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    
    
    header('location:http://mzikitrak.azurewebsites.net/newpass.php?var=pass1_successful');
?>

