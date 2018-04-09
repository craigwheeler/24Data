<?php
//variables
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$zipCode = $_POST['zipcode'];
$phoneNum = $_POST['phone'];
$emailAddress = $_POST['emailaddress'];

//recipient
$to = 'kimberlys@24datainc.com';

//email content
$subject = 'Craig Wheeler SkillsAssessment | Lead Form Submission';
$body = "First Name is: " . $firstName . "\n" .
        "Last Name is: " . $lastName . "\n" .
        "Zipcode is: " . $zipCode . "\n" .
        "Phone number is: " . $phoneNum . "\n" .
        "Email address is: " . $emailAddress;

//header info
$from = 'From: From Address <craig@craigwheeler.net>' . "\r\n";
$option = "-ffrom.address@gmail.com";

mail($to, $subject, $body, $from, $option);
echo "<p>Email Sent...</p>";

?>