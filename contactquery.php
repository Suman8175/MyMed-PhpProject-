<?php   
$name="";
$email1="";
$subject1="";
$message1="";
  if ($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['name1'];
    $email1=$_POST['email1'];
    $subject1=$_POST['subject1'];
    $message1=$_POST['message1'];
    


}
  
    ?>



<?php
 if (!session_id()) session_start();
 $mailing="sumandevkota75@gmail.com";
 $showmails="";
 //This is use to send mail through PHPMailer.
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

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
     $mail->setFrom($email1);
     //addAddress is the destination email address to which you have to send mail
     $mail->addAddress($mailing); 
     $mail->isHTML(true); 
     $mail->Subject = $subject1;
     // Using below link will provide email and verification code through url through which we can verify a user
     $mail->Body = "<b>".$message1."</b><br><br><br>.<em>message sent from email </em>".$email1;
     $mail->send();
   $showmails='<div class="alert alert-success alert-dismissible fade show" role="alert">
    Your email has been received.
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
     $_SESSION['contactquery']=$showmails;
     header("location:contactus.php");
 
     }
     catch(Exception $e){
         echo "Message could not be send";
         header("location:contactus.php");
     }

?>


