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
    $BloodGroup = $_POST['BloodGroup'];
    $mobile = $_POST['Mobile'];
    $imagename=$_FILES["chooseimg"]["name"];
    $tempfile=$_FILES["chooseimg"]["tmp_name"];
     $folder="../profilepicture/".$imagename;
     if (!empty($imagename)) {
     $updateSql = "UPDATE logintable lt
     JOIN patientdetails pd ON lt.LoginId = pd.LoginId
     SET lt.Username = '$username', lt.`D.O.B` = '$dob', pd.City = '$city', pd.State = '$state',
         pd.HouseNo = '$house', pd.BloodGroup = '$BloodGroup',
         pd.Mobile = '$mobile', pd.ProfilePicture = '$imagename'
     WHERE lt.LoginId = $LoginId";
    $resultquery=mysqli_query($conn,$updateSql);
    move_uploaded_file($tempfile,$folder);
    if ($resultquery){
        header("Location:editinfopatient.php");
    }
    else{
        $editerror='<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Not done!</strong> Something is wrong.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        $_SESSION['erroredit']=$editerror;
        header("Location:editinfopatient.php");
    }
     }
     else{
        $updateSql = "UPDATE logintable lt
        JOIN patientdetails pd ON lt.LoginId = pd.LoginId
        SET lt.Username = '$username', lt.`D.O.B` = '$dob', pd.City = '$city', pd.State = '$state',
            pd.HouseNo = '$house', pd.BloodGroup = '$BloodGroup',
            pd.Mobile = '$mobile'
        WHERE lt.LoginId = $LoginId";
    

    $resultquery = mysqli_query($conn, $updateSql);


    if ($resultquery){
        header("Location:editinfopatient.php");
    }
    else{
        $editerror='<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Not done!</strong> Something is wrong.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        $_SESSION['erroredit']=$editerror;
         header("Location:editinfopatient.php");
    }
}
}
?>