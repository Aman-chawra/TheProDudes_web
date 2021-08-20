<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];


$email_from = 'info@theprodudes.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "message: $message.\n".


$to = 'akcchawra@gmail.com';
$headers = "From: email_from \r\n";
$headers = "Reply-to: $visitor_email \r\n";

email($to,$email_subject,$email_body,$headers);

header("blog-content: blog.html");

 ?>
