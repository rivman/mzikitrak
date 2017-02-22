<?php
	$email=$_GET['email'];
	$password=$_GET['password'];
	$phone=$_GET['phone'];
	$fname=$_GET['fname'];
	$lname=$_GET['lname'];
	
	//For testing purposes
	/*$email="";
	$password="SomeSecretPassword";
	$phone="000000000000";
	$fname="User";
	$lname="Anonymous";*/
	
	$to = $email; // this is your Email address
	$from ="alerts@mzikitrak.com"; // this is the sender's Email address   
	$subject = "Login  details";
	$message = "
	<html>
	  <head>
	    <style>
	      .colored {
	        text-decoration: none;
	      }
	      a {text-decoration: none;}
	      #body {
	        font-size: 14px;
	      }
	      #mzikitrak{
	      	background-color: #4cb6cb;
	      	width:100%;
	      	height:100%;
	      	color:#fff;
	      	text-align: center;	      
	      }
	      #mzikitrak img {	      
	      	margin-top:20px;
	      	margin-bottom:20px;
	      }
	      #bcontent{
			background-color: #f1f1f1;
			color:#000;
			height:100%;
			text-align: left;	      
	      }
	      p{
	    	font-family: Arial, Helvetica, sans-serif;
		}
		.details{
		font-weight:bold;
		}
	    </style>
	  </head>
	  <body>
	    <div id='body'>
	    <div id ='mzikitrak'>	    	
	    	<img src='http://mzikitrak.azurewebsites.net/mtrakLogo.png'>	    
	    <div id='bcontent'>
	    <div style='height:20px;'></div>
	      <h4 style='margin-left:20px;'>Hey, $fname!</h4>
	      <p style='margin-left:20px;'>
	      	Thank you for registering. <br>
	      	Below is the guard code you need to login to your account.These are your MzikiTrak login details: <br>	      	
	      </p>
	      <p style='margin-left:20px;'>
	      	Your email : <span>$email</span><br>
	      	Your password : <span>$password</span><br>
	      </p>
	      <p style='margin-left:20px;'>
	      	<a href='http://mzikitrak.azurewebsites.net/index.php'>Click here<a> to complete your registration. <br>	      	
	      </p>	      
	      <p style='margin-left:20px;'>
	      	Thank you again for your registration. If you have any questions, please let me know! 
	      </p>
	      <p class='admin' style='margin-left:20px;'>
	      	Regards, <br>
	      	<a href='mailto:admin@mzikitrak.com' class='colored'>Admin</a>, MzikiTrak
	      </p>
	      <p style='margin-left:20px;'>
	      	<small>For any issues with your registration, please send an email to admin@mzikitrak.com</small><br>
	      	Visit our page <a href='http://mzikitrak.com/'> mzikitrak.com<a>
	      </p>
	    </div>  
	    </div>
	    </div>
	  </body>
	</html>
	";
	
	$headers = "From:" . $from;
	$headers .= "\r\nContent-Type: text/html; boundary=\"PHP-alt-".$random_hash."\"";
	$headers2 = "From:" . $to;
	mail($to,$subject,$message,$headers);
	//mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
	    
	    
	    $to = "mike.omoyo@gmail.com "; // Administrator's email address
	    $from ="alerts@mzikitrak.com"; // Host's email address
	    
	    $subject = "User Registered : " .$fname ." " .$lname;
	    $message = "
	    <html>
	    <head>
	    <style>
	    	#mzikitrak{
	      	background-color: #4cb6cb;
	      	width:100%;
	      	height:100%;
	      	color:#fff;
	      	text-align: center;	      
	      }
	      #mzikitrak img {	      
	      	margin-top:20px;
	      	margin-bottom:20px;
	      }
	      #bcontent{
	      background-color: #f1f1f1;
	      color:#000;
	      height:100%;
	      text-align: left;	      
	      }
	      p{
	    	font-family: Arial, Helvetica, sans-serif;
		}  
	    	.details_name{
		font-weight:bold;
		text-transform:capitalize;
		}
		.details{
		font-weight:bold;
		}
	    </style>
	    </head>
	    <body>
	    <div id ='mzikitrak'>	    	
	    	<img src='http://mzikitrak.azurewebsites.net/mtrakLogo.png'>	    
	    <div id='bcontent'>
	    <div style='height:20px;'></div>
	      <p style='text-align: center;'>
	    <span class='details_name'>$fname $lname</span>". " has registered with the phone number ". "<span class='details'>$phone</span>" . " and email " ."<span 						class='details'>$email </span>". ".
	    </p>
	    </div>  
	    </div>	    
	    </body>
	    </html>
	    ";
	
	    $headers = "From:" . $from;
	    $headers .= "\r\nContent-Type: text/html; boundary=\"PHP-alt-".$random_hash."\"";
	    $headers2 = "From:" . $to;
	    mail($to,$subject,$message,$headers);
        
    header('location:http://mzikitrak.azurewebsites.net/index.php?var=successful');
?>

