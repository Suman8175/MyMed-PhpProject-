


      <!--   $row = mysqli_fetch_assoc($result);
        $fileContent = $row['certificate'];
        $pdfFile = '../pdffiles' . $fileContent;
        header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' . basename($pdfFile) . '"');
}
} else {
    // Handle case when the file is not found or an error occurs
    echo 'File not found.';
} -->
<!-- ?> -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
      }
      .div1{
        margin-left: 170px;
      }
    </style>
  </head>
  <body>
    <div class="div1">
      <?php
     if (isset($_GET['did']) ){
        $LogId= $_GET['did'];
        require '../connection.php';

      $sql="SELECT certificate FROM logintable WHERE LoginId = $LogId";
      $query=mysqli_query($conn,$sql);
      while ($info=mysqli_fetch_array($query)) {


        $certificate = $info['certificate'];
        $pdfPath = '../pdffiles/' . $certificate;

        if (file_exists($pdfPath)) {
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: inline; filename="' . $certificate . '"');
            readfile($pdfPath);
            exit;
            
        }
      }
    }
        ?>
     <!--  <embed type="application/pdf" src="../pdffiles/<?php echo $info['certificate'] ; ?>" width="900" height="500">-->
  
      
 
    </div>

  </body>
</html>

