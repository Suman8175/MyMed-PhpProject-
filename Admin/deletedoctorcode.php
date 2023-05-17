<?php
session_start();
$showmessage="";
     if (isset($_GET['did']) ){
        $LogId= $_GET['did'];
        require '../connection.php';
        $query="DELETE FROM logintable
        WHERE LoginId = '$LogId'"; 
        $result=mysqli_query($conn,$query);
        if ($result){
            $showmessage='<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>ok!</strong> This doctor is now  deleted.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            $_SESSION['doctordeletedsucessfully']=$showmessage;
            header("Location:DoctorVerify.php");
        }
     }
     ?>