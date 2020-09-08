<?php

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $messge = trim($_POST['messge']);
    $subject = trim($_POST['subject']);

    $myMail = "muhghost97@gmail.com";
    $header = "From: ". $email;
    $messge2 = "you have reseved a messge from" . $name . "." . $messge;
    mail($myMail , $subject , $messge2 , $header);
    header("Location: index.php?mailsent");
}




?>