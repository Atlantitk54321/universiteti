<?php
$name =$_POST['name'];
$visitor_email =$_POST['Email'];
$subject = $_POST['subject'];
$message = $_POST['Message'];



$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                  "Subject: $subject.\n".
                    "User Message: $message.\n";




$to = 'atlantik.sallahu3@gmail.com';
$headers = "from: $email_from \r\n";
$headers = "Reply-to: $visitor_email\r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: Contact.html.html");


?>