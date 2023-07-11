<?php
session_start();
$editerror="";
if ($_SERVER["REQUEST_METHOD"]=="POST" ){
    require('../connection.php'); 
    include '../bootstrap.php';
    $LoginId = $_POST['Loginid'];
    $username = $_POST['username'];
    $dob = $_POST['date'];
    $city = $_POST['City'];
    $state = $_POST['state'];
    $house = $_POST['House'];
    $specialization = $_POST['specialization'];
    $mobile = $_POST['Mobile'];
    $imagename=$_FILES["chooseimg"]["name"];
    $tempfile=$_FILES["chooseimg"]["tmp_name"];
     $folder="../profilepicture/".$imagename;
    $starttime=$_POST['starttime'];
    $endtime=$_POST['endtime'];
  

     if (!empty($imagename)) {
     $updateSql = "UPDATE logintable lt
     JOIN doctordetails dd ON lt.LoginId = dd.LoginId
     SET lt.Username = '$username', lt.`D.O.B` = '$dob', dd.City = '$city', dd.State = '$state',
         dd.HouseNo = '$house', dd.Specialization = '$specialization',
         dd.Mobile = '$mobile', dd.ProfilePicture = '$imagename',dd.starttime='$starttime',dd.endtime='$endtime'
     WHERE lt.LoginId = $LoginId";
    $resultquery=mysqli_query($conn,$updateSql);
    move_uploaded_file($tempfile,$folder);
    if ($resultquery){
        header("Location:doctoredit.php");
    }
    else{
        $editerror='<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Not done!</strong> Something is wrong.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        $_SESSION['erroredit']=$editerror;
        header("Location:doctoredit.php");
    }
     }
     else{
        $updateSql = "UPDATE logintable lt
        JOIN doctordetails dd ON lt.LoginId = dd.LoginId
        SET lt.Username = '$username', lt.`D.O.B` = '$dob', dd.City = '$city', dd.State = '$state',
            dd.HouseNo = '$house', dd.Specialization = '$specialization',
            dd.Mobile = '$mobile',dd.starttime='$starttime',dd.endtime='$endtime'
        WHERE lt.LoginId = $LoginId";


    $resultquery = mysqli_query($conn, $updateSql);

    if ($resultquery){
        header("Location:doctoredit.php");
    }
    else{
        echo  mysqli_error($conn);
        $editerror='<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Not done!</strong> Something is wrong.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        $_SESSION['erroredit']=$editerror;
        header("Location:doctoredit.php");
    }
}
    }
?>