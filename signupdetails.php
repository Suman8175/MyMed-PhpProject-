<?php
session_start();
//include bootstrap to access bootstrap elements used
include 'bootstrap.php';
//Requiring maile.php because in maile.php we have created a function through which we can send mail
require 'maile.php';
//Empty variable so we can assign a certain value when required
$showalert="";
$showsucess="";
 if (isset($_GET['verified']) && $_GET['verified'] == 'true') {
    $showsucess='<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Congrats!</strong> Signup Sucess.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    $_SESSION['sucessstatus']=$showsucess;
     // header is used to redirect to another  file.
    header("location:signuploginpage.php");
        }
       
if ($_SERVER['REQUEST_METHOD']=="POST"){
    include 'connection.php';
    //$_POST['something'] is used to mainly get a value from form through post method
    $Username=$_POST['Username'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $ConfirmPassword=$_POST['ConfirmPassword'];
    $DOB=$_POST['DOB'];
    $Gender=$_POST['Gender'];
    $Role=$_POST['Role'];
    $NMC=$_POST['NMC'];
    $filename=$_FILES["choosefile"]["name"];
    $tempfile=$_FILES["choosefile"]["tmp_name"];
     $folder="pdffiles/".$filename;
     //To check if the email already exists

     $exists="select * from `logintable` WHERE Email = '$Email'";
    $existsquery=mysqli_query($conn,$exists);
    $noofrows=mysqli_num_rows($existsquery);
    //To check if the email is already use.If noofrows is greater than 0 which means email is already in use
    if ($noofrows>0)
    {
        $showalert='<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> Email is already in use.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        //Session is used here to redirect a message got from this page(signupdetails.php) to another page (index.php)
        $_SESSION['status']=$showalert;
        // header is used to redirect to another php file.Suppose i have only backend work in this file and html files in 
        // index.html so after a certain work is done through this php file it will redirect it into index.html 
        header("location:signuploginpage.php");
    }
    else{
        if ($ConfirmPassword==$Password){
           
            //If the signup is for patient directly do signup without any confirmation from admin
            if ($Role=="Patient"){
                //password_hash is a given function in php to hash the password.2 parameters(passwordvalue,PASSWORD_DEFAULT)
                $hash = password_hash($Password, PASSWORD_DEFAULT);
                // random_bytes() is used to generate a random byte and bin2hex() will transform those random byte into hexadecimal
                $vcode=bin2hex(random_bytes(16));
            $sql="INSERT INTO `logintable` (`LoginId`, `Username`, `Email`, `Password`, `D.O.B`, `Gender`, `Role`, `AccountCreation`, `verificationcode`) 
            VALUES (NULL, '$Username', '$Email', '$hash', '$DOB', '$Gender', '$Role', current_timestamp(),'$vcode')";
            $result=mysqli_query($conn,$sql);
            //To check if both query as well as email is gone then signup shall be sucessful and user shall be rediect to verify his account
                if ($result){
                    $newid=mysqli_insert_id($conn);
                    $sqlre="INSERT INTO `patientdetails` (`PatientId`, `LoginId`)
                    VALUES (NULL, '$newid')";
                    $res2=mysqli_query($conn,$sqlre);
                 sendmail($Email,$vcode);
                    

                }
                    else{
                        
                    } 
                
            } 
           else{
                $hash = password_hash($Password, PASSWORD_DEFAULT);
                $vcode=bin2hex(random_bytes(16));
                if(!$filename == ""){
            $sql="INSERT INTO `logintable` (`LoginId`, `Username`, `Email`, `Password`, `D.O.B`, `Gender`, `Role`,`AccountCreation`, `verificationcode`,`certificate`,`NMCno`) 
            VALUES (NULL, '$Username', '$Email', '$hash', '$DOB', '$Gender', '$Role', current_timestamp(),'$vcode','$filename','$NMC')";
                 $resultdoctor=mysqli_query($conn,$sql);
                 move_uploaded_file($tempfile,$folder); 
                if($resultdoctor ){
                    $newid=mysqli_insert_id($conn);
                    $sqlre="INSERT INTO `doctordetails` (`Did`, `LoginId`)
                    VALUES (NULL, '$newid')";
                    $res2=mysqli_query($conn,$sqlre);
                    sendmail($Email,$vcode);
                    mysqli_close($conn);
                    $showsucess='<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Congrats!</strong> Now your account needs to be verified by admin.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                }
                else{
                    echo "Not nice";
                    echo("Uncessful due to ".mysqli_error($conn));
                }

             
                
                
               }
               else{
                echo "Not Done";
               }
            }
            } 
                else{
                    $showalert='<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Warning!</strong> Please enter your password correctly on both field.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    $_SESSION['status']=$showalert;
                     // header is used to redirect to another file.
                    header("location:signuploginpage.php");
                }
            }
        }
            ?>
    
    
    