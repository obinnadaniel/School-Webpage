<?php

$name = $_POST['name'];
$user_email = $_POST['email'];
$message = $_POST['message'];
$to = "Obinnadaniel30@yahoo.com"
$subject = "Message From Website";
$body = "From: ".$name\n."Email Name: ".$user_email\n."Message: ".$message\n;


if(mail($to, $subject, $body)) {
    echo "Send Succesfully";
} else {
    echo "Cannot Send!";
}

?>