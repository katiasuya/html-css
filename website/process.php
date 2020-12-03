<?php

if(isset($_POST['submit'])) {

    $to="edvin@codingfaculty.com";
    $subject=$_POST['subject'];
    $email=$_POST['email'];
    $txt=$_POST['txt'];
    $headers= "From: " .$email . "\r\n" .
    "CC: somebodyelse@example.com";

    mail($to, $subject, $message, $headers);
    hearer("Location: contact.html");
}

?>