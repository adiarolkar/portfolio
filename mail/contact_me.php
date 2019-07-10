<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));
	
// Create the email and send the message
$to = 'adityaarolkar@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "AdityaArolkar Website:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: client@adityaarolkar.com\n"; // This is the email address the generated message will be from. We recommend using something like website@adityaarolkar.com.
$headers .= "Reply-To: $email_address";	
$email_subject_reply = "Thank you - Aditya Arolkar";
$email_body_reply = "Hello,\n\n"."Thank you for reaching out to me. I will get back to you soon.\n\n"."Warm Regards,\n\n"."-Aditya Arolkar\n"."www.adityaarolkar.com";
$headers_reply = "From: admin@adityaarolkar.com\n";
$headers_reply .= "Reply-To: $to";	
mail($to,$email_subject,$email_body,$headers);
mail($email_address,$email_subject_reply,$email_body_reply,$headers_reply);
return true;			
?>