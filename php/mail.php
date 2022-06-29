<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailHeader = "From: " .$name."<".$email.">\r\n";
$recipient = "nikashio42@gmail.com";

mail($email, 'Job offer', $message, $mailHeader)
    or die('error');

echo '<meta http-equiv="refresh" content="0; url=http://example.com/">';
