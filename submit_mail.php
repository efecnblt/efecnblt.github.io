<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "e.canbolatlnx@gmail.com";
    $subject = "Yeni İletişim Mesajı";
    $body = "İsim: $name\nE-posta: $email\n\nMesaj:\n$message";
    mail($to, $subject, $body);
?>