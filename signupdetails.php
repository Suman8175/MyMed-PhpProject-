<?php
session_start();
include 'bootstrap.php';
$showalert='<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Warning!</strong> You cannot sign up.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
$showsucess='<div class="alert alert-sucess alert-dismissible fade show" role="alert">
<strong>Warning!</strong> You cannot sign up.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
if ($_SERVER['REQUEST_METHOD']=="POST"){
    include 'connection.php';
    $Username=$_POST['Username'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $ConfirmPassword=$_POST['ConfirmPassword'];
    $DOB=$_POST['DOB'];
    $Gender=$_POST['Gender'];
    $Role=$_POST['Role'];

     //To check if the email already exists

     $exists="select * from `logintable` WHERE Email = '$Email'";
    $existsquery=mysqli_query($conn,$exists);
    $noofrows=mysqli_num_rows($existsquery);
    if ($noofrows>0)
    {
        $_SESSION['status']=$showalert;
        header("location:index.php");
    }
    else{
        if ($ConfirmPassword==$Password){
            $hash = password_hash($Password, PASSWORD_DEFAULT);
            $sql="INSERT INTO `logintable` (`LoginId`, `Username`, `Email`, `Password`, `D.O.B`, `Gender`, `Role`, `AccountCreation`) 
            VALUES (NULL, '$Username', '$Email', '$hash', '$DOB', '$Gender', '$Role', current_timestamp())";
            $result=mysqli_query($conn,$sql);
            if ($result){
                $_SESSION['sucessstatus']=$showalert;
                header("location:index.php");
                    }
                }
                else{
                    $_SESSION['status']=$showalert;
                    header("location:index.php");
                }
            }
            }
            ?>
    
    
    