<?php
$name= $_POST['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$email_from= 'zainab.hashimi@auaf.edu.af';

$email_subject= 'New Form Submission';

$email_body= "User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "subject: $subject.\n".
             "User Message: $message.\n";



$to= 'zainab.hashimi@auaf.edu.af';

$headers= "From = $email-from /r/n";

$headers.= "Reply-to: $visitor_email /r/n";

mail($to, $email_subject, $email_body);

header("Location: contact.html");






?>