<? php


$to = $_POST['email']; // this is your Email address
    $from ="alerts@flag42.com"; // this is the sender's Email address
    
    $subject = "Login  details";
    $subject2 = "Copy of your form submission";
    $message = " These are Your  Mzikitrak Dashboard Login  Details:"."\n\n"."http://mzikitrak.com/index.php/" . "\n\n"."Email Address"."\n\n" . $_POST['email']."\n\n"."password"."\n\n" .$random_string;
   // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
?>