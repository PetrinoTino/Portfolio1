<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$EmailTo = "petrinotino@gmail.com";
$Title = "New Message Received";

// prepare email body text
$Fields = "Name: " . $name . "\n";
$Fields .= "Email: " . $email . "\n";
$Fields .= "Subject: " . $subject . "\n";
$Fields .= "Message: " . $message . "\n";

// send email
$success = mail($EmailTo,  $Title,  $Fields, "From:".$email);

if ($success) {
    echo "Message sent successfully.";
} else {
    echo "An error occurred while sending the message.";
}
?>
</body>
</html>
<?php

