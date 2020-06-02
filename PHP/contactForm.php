<?php

if(isset($_POST['submit'])){
    $name = $_POST['company'];
    $subject = $_POST['subject'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];

    $mailTo = "dlaminilungelo17@gmail.com";
    $header = "From: website ";
    $txt = "You have recieve contact from Company".$name.".\n Phone number".$phone."\n".$emailFrom;

    mail($mailTo,$subject,$txt,$header);
}