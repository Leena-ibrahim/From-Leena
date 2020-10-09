<?php
{
use phpmailer\phpmailer\phpmalier;
use phpmailer\phpmailer\Exeption;
    
    require_once 'vendor/autoload.php';
    
    $mail = new phpmailer();
    
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 2;
    $mail->Host ='smtp.gmail.com';
    $mail->Username ='leena.se92@gmail.com';
    $mail->Password = 'leenagit1992';
    $mail->SMTPsecure ='tls';
     $mail->Port = 587;
    
    
    
    
?>