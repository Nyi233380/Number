<?php
 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
 

if (isset($_POST["send"])) {
 
  $mail = new PHPMailer(true);
 
 
    $mail->isSMTP();                              
    $mail->Host       = 'smtp.gmail.com';       
    $mail->SMTPAuth   = true;            
    $mail->Username   = 'nnyi60277@gmail.com';   
    $mail->Password   = 'cuim eubi dctu hnne';      
    $mail->SMTPSecure = 'ssl';           
    $mail->Port       = 465;                                    
 
 
    $mail->setFrom( $_POST["email"], $_POST["name"]); 
    $mail->addAddress('kun996995@gmail.com');       
    $mail->addReplyTo($_POST["email"], $_POST["name"]); 
 
   
    $mail->isHTML(true);      
    $mail->email = $_POST["email"];        
    $mail->Subject = "contact letter";   
    $mail->Body    = $_POST["message"];
      
   
    $mail->send();
    if(!empty($_SERVER['HTTP_REFERER']))
    echo $_SERVER['HTTP_REFERER'];
    $localdi = $_SERVER['HTTP_REFERER'];
    header("Location: $localdi");
}