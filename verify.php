<?php
session_start();
$verifymessage="";


require 'connection.php';
if (isset($_GET['email']) && isset($_GET['verification'])){
   $Email= $_GET['email'];
   $vericode=$_GET['verification'];
   $query="select * from `logintable` WHERE Email = '$Email' AND verificationcode='$vericode'"; 
   $result=mysqli_query($conn,$query);

   if ($result)
   {
      if (mysqli_num_rows($result)==1){
         $resultfetch=mysqli_fetch_assoc($result);
         if ($resultfetch['isverified']==0){
            
            $updatesql="UPDATE `logintable` SET `isverified` = '1' WHERE `Email` ='$Email'";
            $resultupdate=mysqli_query($conn,$updatesql);
           $verifymessage='<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Wow!</strong> This email is now  verified.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            if ($resultfetch['Role']=="Patient"){
            $_SESSION['emailverified']=$verifymessage;
            header("location:signupdetails.php?verified=true"); 
            }
            else{
               $_SESSION['emaildocverified']=$verifymessage;
            header("location:signupdetails.php?verified=true");
            }
         }
         else{
            $verifymessage='<div class="alert alert-warning alert-dismissible fade show" role="alert">
                   <strong>Wrong!</strong> This email is already  verified.
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>';
                   $_SESSION['emailnotverified']=$verifymessage;
                   header("location:index.php");
         }

      }
      else{
         $verifymessage='<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Wrong!</strong> This email is already in database or not approved by admin.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                $_SESSION['emailalreadyuse']=$verifymessage;
                header("location:index.php");
      }
   }
   
}
?>


