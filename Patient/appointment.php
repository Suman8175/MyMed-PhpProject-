<?php
session_start();
require '../connection.php';
$patientid="";

  if (isset($_SESSION['patientid'])){
   $patientid=$_SESSION['patientid'];
  }
  if ($_SERVER['REQUEST_METHOD']=="POST"){
    $appointdate=$_POST['appointment-date'];
    $appointtime=$_POST['appointment-time'];
    $doctorid=$_POST['doctorid'];

    $sql="INSERT INTO `appointmenttable` (`appointid`, `docid`,`patientid`,`appointmentdate`,`appointmenttime`)
    VALUES (NULL, '$doctorid','$patientid','$appointdate','$appointtime')";
    $queryfire=mysqli_query($conn,$sql);
    if ($queryfire){
        echo "Done";
        header("Location:appointdoctor.php");
    }
    else{
        echo "Not Done";
    }

  }

?>
