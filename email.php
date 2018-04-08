<?php

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$zipCode = $_POST['zipcode'];
$phoneNum = $_POST['phone'];
$emailAddress = $_POST['email'];

$to = 'iamnumber2407@gmail.com';
$subject = 'This is the subject!!!!';
$body = 'First Name is: ' . $firstName;
$from = 'From: From Address <craig@craigwheeler.net>' . "\r\n";
$option = "-ffrom.address@gmail.com";

mail($to, $subject, $body, $from, $option);
echo "<p>Email Sent...</p>";
echo $firstName;

?>