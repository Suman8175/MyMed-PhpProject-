<?php   
    $sliderid="";
    require('../connection.php');
    if ($_SERVER['REQUEST_METHOD']=="POST"){
      $sliderid=$_POST['sliderid'];
      $query="DELETE FROM slidertable
      WHERE sliderid = '$sliderid'"; 
      $result=mysqli_query($conn,$query);
      if ($result){
        header("Location:addslider.php");

    }
  }
    ?>


