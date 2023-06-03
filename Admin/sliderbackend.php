<?php 
session_start();
$showslider="";  
require ('../connection.php');
include('../bootstrap.php');
   if( $_SERVER['REQUEST_METHOD']=="POST"){
    $title=$_POST['title'];
    $content=$_POST['paragraph'];
   
    if (isset($_FILES["imageFile"]) && $_FILES["imageFile"]["error"] == 0) {
        
        $targetDir = "sliderimages/"; // Path to the folder where images will be saved
        $targetFile = $targetDir . basename($_FILES["imageFile"]["name"]);
        if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $targetFile)) {
            // File upload successful
            $imageLink = $targetFile;// Save the image link in the database
            $sql="INSERT INTO `slidertable` (`sliderid`, `sliderheading`, `sliderparagraph`,`sliderimage`) 
            VALUES (NULL, '$title','$content','$imageLink')";
            
            if ($conn->query($sql) === TRUE) {
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
}
?>

?>