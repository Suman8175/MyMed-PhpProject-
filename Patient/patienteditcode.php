<?php
session_start();
$editerror="";
if ($_SERVER["REQUEST_METHOD"]=="POST" ){
    require('../connection.php'); 
    include '../bootstrap.php';
    $LoginId = $_POST['Loginid'];
    $username = $_POST['usernamepa'];
    $dob = $_POST['datepa'];
    $city = $_POST['Citypa'];
    $state = $_POST['statepa'];
    $house = $_POST['Housepa'];
    $BloodGroup = $_POST['BloodGroupPatient'];
    $mobile = $_POST['MobileNopa'];
    $imagename=$_FILES["chooseimgpa"]["name"];
    $tempfile=$_FILES["chooseimgpa"]["tmp_name"];
     $folder="../profilepicture/".$imagename;
     if (!empty($imagename)) {
     $updateSql = "UPDATE logintable lt
     JOIN patientdetails pd ON lt.LoginId = pd.LoginId
     SET lt.Username = '$username', lt.`D.O.B` = '$dob', pd.PatientCity = '$city', pd.PatientState = '$state',
         pd.PatientHouseNo = '$house', pd.PatientBloodGroup = '$BloodGroup',
         pd.PatientMobile = '$mobile', pd.PatientProfilePicture = '$imagename'
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
        SET lt.Username = '$username', lt.`D.O.B` = '$dob', pd.PatientCity = '$city', pd.PatientState = '$state',
            pd.PatientHouseNo = '$house', pd.PatientBloodGroup = '$BloodGroup',
            pd.PatientMobile = '$mobile'
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