<?php
   $to = 'general@protectionlawgroup.com' ;    
    //email address on which you want to receive the information

   $ipaddress = $_SERVER['REMOTE_ADDR']; 
   $datetime = date('d/m/Y H:i:s');
   
   $subject = 'Enquiry From Contact Form';   //set the subject of email.
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   $headers .= "From: $email" . PHP_EOL . "Reply-To: $email";  
   $message = "Name: ".$_POST['name']."\r\nEmail: "
   .$_POST['email']."\r\nContact #: "
   .$_POST['telephone']."\r\nEnquiry: "
   .$_POST['enquiry']."\r\nMessage : "
   .$_POST['message']."\r\n";
			   
   //Send mail using PHP			   
   mail($to, $subject, $message, $headers);
   //Redirect
   header('Location: success.html');
?>