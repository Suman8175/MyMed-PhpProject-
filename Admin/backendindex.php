<?php 
require ('../connection.php');
   if( $_SERVER['REQUEST_METHOD']=="POST"){
      $one=1;
    $footertitle1=$_POST['footertitle'];
    $footerdesc1=$_POST['footerdesc'];
    $firstfacility=$_POST['facility1'];
    $secondfacility=$_POST['facility2'];
    $thirdfacility=$_POST['facility3'];
   $mymail1=$_POST['mymail'];
   $mynumber=$_POST['mynumber'];
   $font1=$_POST['font1'];
   $font2=$_POST['font2'];
   $font3=$_POST['font3'];
   $font4=$_POST['font4'];
   $fonttitle1=$_POST['fonttitle1'];
   $fonttitle2=$_POST['fonttitle2'];
   $fonttitle3=$_POST['fonttitle3'];
   $fonttitle4=$_POST['fonttitle4'];
   $fontdesc1=$_POST['fontdesc1'];
   $fontdesc2=$_POST['fontdesc2'];
   $fontdesc3=$_POST['fontdesc3'];
   $fontdesc4=$_POST['fontdesc4'];
   $abouttitle1=$_POST['abouttitle'];
   $firstimagetitle=$_POST['imagetitle1'];
   $secondimagetitle=$_POST['imagetitle2'];
   $thirdimagetitle=$_POST['imagetitle3'];
   $contactparagraph=$_POST['contactparagraph'];
   $filename1=$_FILES["imagefirst"]["name"];
   $tempfile1=$_FILES["imagefirst"]["tmp_name"];
    $folder1="../picture/".$filename1;
   $filename2=$_FILES["imagesecond"]["name"];
   $tempfile2=$_FILES["imagesecond"]["tmp_name"];
    $folder2="../picture/".$filename2;
   $filename3=$_FILES["imagethird"]["name"];
   $tempfile3=$_FILES["imagethird"]["tmp_name"];
    $folder3="../picture/".$filename3;

    $sqll="UPDATE footercontact SET
    FooterTitle = '$footertitle1',
    FooterDesc = '$footerdesc1',
    Facility1 = '$firstfacility',
    Facility2 = '$secondfacility',
    Facility3 = '$thirdfacility',
    Email = '$mymail1',
    Mobile = '$mynumber',
   FontAwesomeIcon1='$font1',
   FontAwesomeIcon1Title='$fonttitle1',
   FontAwesomeIcon1Desc='$fontdesc1',
   FontAwesomeIcon2='$font2',
   FontAwesomeIcon2Title='$fonttitle2',
   FontAwesomeIcon2Desc='$fontdesc2',
   FontAwesomeIcon3='$font3',
   FontAwesomeIcon3Title='$fonttitle3',
   FontAwesomeIcon3Desc='$fontdesc3',
   FontAwesomeIcon4='$font4',
   FontAwesomeIcon4Title='$fonttitle4',
   FontAwesomeIcon4Desc='$fontdesc4',

    AboutTitle = '$abouttitle1',
    FirstImgTitle = '$firstimagetitle',
    SecondImgTitle = '$secondimagetitle',
    ThirdImgTitle = '$thirdimagetitle'
  WHERE FId ='$one'";
     $resultc=mysqli_query($conn,$sqll);
      if ($resultc){
         if (!empty($filename1)) {  
            $sql001="UPDATE footercontact SET
            FirstImage = '$filename1'";
             $resultquerys=mysqli_query($conn,$sql001);
             move_uploaded_file($tempfile1,$folder1);
      }
         if (!empty($filename2)) {  
            $sql002="UPDATE footercontact SET
            SecondImage = '$filename2'";
             $resultquery2=mysqli_query($conn,$sql002);
             move_uploaded_file($tempfile2,$folder2);
      }
         if (!empty($filename3)) {  
            $sql003="UPDATE footercontact SET
            ThirdImage = '$filename3'";
             $resultquery3=mysqli_query($conn,$sql003);
             move_uploaded_file($tempfile3,$folder3);
      }
      header("Location:manageindex.php");
   }
}