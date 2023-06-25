<?php
session_start();
require('../connection.php');
if(isset($_POST["submit"])) {
    if (isset($_FILES['files'])) {
        $appointid = $_POST['appointid'];
        $firstmedication = $_POST['firstmedication'];
        $secondmedication = $_POST['secondmedication'];
        $thirdmedication = $_POST['thirdmedication'];
        $bloodpressure = $_POST['bloodpressure'];
        $heartrate = $_POST['heartrate'];
        $respiratoryrate = $_POST['respiratoryrate'];
        $primarydiagnosis = $_POST['primarydiagnosis'];
        $secondarydiagnosis = $_POST['secondarydiagnosis'];
        $pescribedmedications = $_POST['pescribedmedications'];
        $surgeries = $_POST['surgeries'];
        $therapyplans = $_POST['therapyplans'];
        $cardiovascularReport = $_POST['cardiovascularReport'];
        $respiratoryReport = $_POST['RespiratoryReport'];
        $gastrointestinalReport = $_POST['GastrointestinalReport'];
        $uploadedFiles = $_FILES['files'];
        $report = $_FILES['filepdf']["name"];
        $reporttmp = $_FILES['filepdf']["tmp_name"];
        $maxImages = 5;
        $count=0;
        $folderr = "../AppointmentReport/".$report;
        foreach ($uploadedFiles['tmp_name'] as $key => $tmpName) {
            $count++;
        }
        if($count>=5){
            $toomuchimage='<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Warning!</strong> Too much Image.Can insert maximum 5 image.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            $_SESSION['toomuchfile']=$toomuchimage;
            $_SESSION['appointssid']=$appointid;
            header("location:checkupform.php");
        }
        else{
            for ($i = 0; $i < $maxImages; $i++) {
                if (isset($uploadedFiles['tmp_name'][$i])) {
                $fileName = $uploadedFiles['name'][$i];
                $tmpName = $uploadedFiles['tmp_name'][$i];
                $fileSize = $uploadedFiles['size'][$i];
                $fileType = $uploadedFiles['type'][$i];
        
                $folder = "../AppointmentReport/".$fileName;
                if (move_uploaded_file($tmpName, $folder)) {
                    $columnName = 'AppointmentReportImage'.($i + 1);
                    $imagePaths[] = $folder;
                }
            }
        }
            $imagePaths = array_pad($imagePaths, $maxImages, null);
            $sql = "INSERT INTO appointmentreportimage (AppointmentReportImage1, AppointmentReportImage2, AppointmentReportImage3, AppointmentReportImage4, AppointmentReportImage5) VALUES ";
$sql .= "('".implode("', '", $imagePaths)."')";
if (mysqli_query($conn,$sql)) {
    $newid=mysqli_insert_id($conn);
    move_uploaded_file($reporttmp,$folderr); 
   $sqlnew="INSERT INTO `appointmentreporttable` (`ArId`, `appointid`,`AiId`,  `firstmedication`, `secondmedication`, `thirdmedication`, `bloodpressure`, `heartrate`, `respiratoryrate`, `primarydiagnosis`,`secondarydiagnosis`,`pescribedmedications`,`surgeries`,`therapyplans`,`cardiovascularReport`,`respiratoryreport`,`gastrointestinalReport`,`reportfiles`) 
   VALUES (NULL, '$appointid','$newid', '$firstmedication', '$secondmedication', '$thirdmedication', '$bloodpressure', '$heartrate','$respiratoryrate','$primarydiagnosis','$secondarydiagnosis','$pescribedmedications','$surgeries','$therapyplans','$cardiovascularReport','$respiratoryReport','$gastrointestinalReport','$reporttmp')";
   $querygen=mysqli_query($conn,$sqlnew);
   if($querygen){
    $nextsql="UPDATE appointmenttable SET appointmentdone = 1 WHERE appointid = '$appointid'";
    $nextquery=mysqli_query($conn,$nextsql);
    header("location:appointmentdone.php");
   }
} else {
    echo "Error inserting images.";
}
           
        }

    }
}