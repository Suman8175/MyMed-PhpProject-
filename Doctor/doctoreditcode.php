<?php
$LoginId="";
    $username="";
    $dob="";
if ($_SERVER["REQUEST_METHOD"]=="POST" ){
    require('../connection.php'); 
    $LoginId = $_POST['Loginid'];
    $username = $_POST['username'];
    $dob = $_POST['$dob'];
    echo $LoginId;
    echo $username;
    echo $dob;
 
}

?>