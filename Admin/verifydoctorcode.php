<?php
session_start();
$showmessage="";
     if (isset($_GET['did']) ){
        $LogId= $_GET['did'];
        require '../connection.php';
        $query="select * from `logintable` WHERE LoginId = '$LogId'"; 
        $result=mysqli_query($conn,$query);
        if ($result){
            $resultfetch=mysqli_fetch_assoc($result);
            $updatesql="UPDATE `logintable` SET `verifieddoctor` = '1' WHERE `LoginId` ='$LogId'";
            $resultupdate=mysqli_query($conn,$updatesql);
            $showmessage='<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Well Done!</strong> This doctor is now  verified.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            $_SESSION['doctorverificationcomplete']=$showmessage;
            header("Location:DoctorVerify.php");
        }
     }
     ?>