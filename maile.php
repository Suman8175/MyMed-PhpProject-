<?php

 if (!session_id()) session_start();
$showmail="";
//This is use to send mail through PHPMailer.
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function sendMail($mailing,$code)
{
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
    $mail=new PHPMailer(true);
    try{
    $mail->isSMTP(); 
    $mail->Host  = 'smtp.gmail.com'; 
    $mail->SMTPAuth   = true;
    $mail->Username   = 'dssuman525@gmail.com';  
    $mail->Password   = 'khinayteolqapwyp'; 
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    //setFrom is for your email address through which you send mail
    $mail->setFrom('iamarpan15@gmail.com', 'MyMed');
    //addAddress is the destination email address to which you have to send mail
    $mail->addAddress($mailing); 
    $mail->isHTML(true); 
    $mail->Subject = "Please use below verification link";
    // Using below link will provide email and verification code through url through which we can verify a user
    $mail->Body = "Here is the verification link
    <a href='http://localhost/project/verify.php?email=$mailing&verification=$code'>Verify</a>";
    $mail->send();
  $showmail='<div class="alert alert-success alert-dismissible fade show" role="alert">
   Please Check your email to verify your account.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    $_SESSION['mailstatus']=$showmail;
    header("location:signuploginpage.php");

    }
    catch(Exception $e){
        echo "Message could not be send";
        header("location:signuploginpage.php");
    }

  
}

?>