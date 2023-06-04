<?php
$sliderid="";
$sliderheading="";
    $slidercontent="";
    $sliderimage="";
if ($_SERVER["REQUEST_METHOD"]=="POST" ){
    require('../connection.php'); 
    $sliderid = $_POST['sliderid'];
    $sliderheading = $_POST['title'];
    $slidercontent = $_POST['paragraph'];
    $targetDir = "sliderimages/"; // Path to the folder where images will be saved
    $targetFile = $targetDir . basename($_FILES["imageFile"]["name"]);
    $imageLink = $targetFile;
  $sql2 = "UPDATE slidertable SET sliderheading = ' $sliderheading', sliderparagraph = '$slidercontent', sliderimage = '$imageLink' WHERE sliderid = '$sliderid'";
      $res2=mysqli_query($conn,$sql2);
      move_uploaded_file($_FILES["imageFile"]["tmp_name"], $targetFile);
      if($res2){
       header("Location:addslider.php");

}
 
}

?>