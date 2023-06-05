<?php
session_start();
$showmessage="";
if ($_SERVER['REQUEST_METHOD']=="POST"){
        $LogId= $_POST['LoginId'];
        require '../connection.php';
        echo $LogId;
        /* $query = "UPDATE logintable SET userdelete = '1' WHERE LoginId = '$LogId'";
        $result=mysqli_query($conn,$query);
        if ($result){
            $showmessage='<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>ok!</strong> This doctor is now  deleted.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            $_SESSION['doctordeletedsucessfully']=$showmessage;
            header("Location:deleteverifydoctor.php");
        } */
     }
     ?>