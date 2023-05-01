<?php

$Server="localhost";
$username="root";
$password="";
$database="MyMed";
$conn=mysqli_connect($Server,$username,$password,$database);
if(!$conn){
    die("Wrong ".mysqli_connect_error());
}

?>