<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'cicaksolo25@gmail.com'

$email_subejct = ' New Form Submission'

$email_body = "User_Name: $name.\n".
                "user_Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User_Message: $message.\n";

$to = 'bernarduskanayari@gmail.com'

$header = "From = $email_from \r\n";

$header ="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);

header("Locaation: contact.html")