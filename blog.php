<?php

$name = $_POST['name'];
$email = $_POST['email'];
$commnt = $_POST['comment'];

$email_from = 'xyz@mydomain.com';

$email_subject = 'Comment From User';

$email_body = "User Name: $name. \n".
                "User Email: $email. \n".
                "Comment: $: $Comment. \n";

$to = 'harkaransingh528@gmail.com';

$headers = "From: $email_from \r\n";
$headers . = "Reply-To: $email \r\n";

mail($to, $email_from, $email_body, $headers);

header("Location: blogs.html");

?>
