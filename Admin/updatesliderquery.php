<?php
    $sliderid="";
    $sliderheading="";
    $slidercontent="";
    $sliderimage="";
if ($_SERVER["REQUEST_METHOD"]=="POST" ){
    require('../connection.php'); 
    $sliderid = $_POST['sliderid'];
    $sliderheading = $_POST['titlee'];
    $slidercontent = $_POST['paragraph'];
    $imagename=$_FILES["imageFile"]["name"];
    $tempfile=$_FILES["imageFile"]["tmp_name"];
     $folder="sliderimages/".$imagename;
     echo $sliderheading;
    if (!empty($imagename)){
  $sql2 = "UPDATE slidertable SET sliderheading = '$sliderheading', sliderparagraph = '$slidercontent', sliderimage = '$imagename' WHERE sliderid = '$sliderid'";
      $res2=mysqli_query($conn,$sql2);
      move_uploaded_file($tempfile,$folder);
      if($res2){
       header("Location:addslider.php");

}
 
}
else{
    $sql2 = "UPDATE slidertable SET sliderheading = '$sliderheading', sliderparagraph = '$slidercontent' WHERE sliderid = '$sliderid'";
    $res2=mysqli_query($conn,$sql2);
    if($res2){
     header("Location:addslider.php");
}
}
}
?>