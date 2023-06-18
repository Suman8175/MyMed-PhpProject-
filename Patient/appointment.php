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
    $problem=$_POST['problem'];

    $sql="INSERT INTO `appointmenttable` (`appointid`, `docid`,`patientid`,`appointmentdate`,`appointmenttime`, `Concern`)
    VALUES (NULL, '$doctorid','$patientid','$appointdate','$appointtime','$problem')";
    $queryfire=mysqli_query($conn,$sql);
    if ($queryfire){
      $_SESSION['appdate']=$appointdate;
      $_SESSION['apptime']=$appointtime;
        header("Location:confirmationbox.php");
    }
    else{
        echo "Not Done";
    }

  }

?>
