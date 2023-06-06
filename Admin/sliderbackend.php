<?php 
session_start();
$showslider="";  
require ('../connection.php');
include('../bootstrap.php');
   if( $_SERVER['REQUEST_METHOD']=="POST"){
    $title=$_POST['title'];
    $content=$_POST['paragraph'];
    $imagename=$_FILES["imageFile"]["name"];
    $tempfile=$_FILES["imageFile"]["tmp_name"];
     $folder="sliderimages/".$imagename;
    if (isset($_FILES["imageFile"]) && $_FILES["imageFile"]["error"] == 0) {
            // File upload successful
          
            $sql="INSERT INTO `slidertable` (`sliderid`, `sliderheading`, `sliderparagraph`,`sliderimage`) 
            VALUES (NULL, '$title','$content','$imagename')";
            
            if ($conn->query($sql) === TRUE) {
                move_uploaded_file($tempfile,$folder);
                $showslider='<div class="alert alert-success alert-dismissible fade show" role="alert">
                 You have now added a new slider.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                $_SESSION['sliderdetails']=$showslider;
                 // header is used to redirect to another file.
                header("location:addslider.php");
            } 

    }
   }
?>

?>