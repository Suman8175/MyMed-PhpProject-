<?php
session_start();
$id="";
$firstmedication="";
$secondmedication="";
$thirdmedication="";
$bloodpressure="";
$heartrate="";
$respiratoryrate="";
$primarydiagnosis="";
$pescribedmedications="";
$surgeries="";
$therapyplans="";
$cardiovascularReport="";
$respiratoryReport="";
$gastrointestinalReport="";
$AppointmentReportImage1="";
$AppointmentReportImage2="";
$AppointmentReportImage3="";
$AppointmentReportImage4="";
$AppointmentReportImage5="";

require '../connection.php';
require 'nabbar.php';
include '../bootstrap.php';
if (isset($_GET['id'])){
    $id=$_GET['id'];
    
}
$sqlalter="SELECT *
FROM appointmenttable AS a
JOIN appointmentreporttable AS ar ON a.appointid = ar.appointid
JOIN appointmentreportimage AS ai ON ar.AiId = ai.AiId
WHERE a.appointid = $id;";
$res=mysqli_query($conn,$sqlalter);
$row = mysqli_fetch_array($res);
$firstmedication=$row['firstmedication'];
$secondmedication=$row['secondmedication'];
$thirdmedication=$row['thirdmedication'];
$bloodpressure=$row['bloodpressure'];
$heartrate=$row['heartrate'];
$respiratoryrate=$row['respiratoryrate'];
$primarydiagnosis=$row['primarydiagnosis'];
$secondarydiagnosis=$row['secondarydiagnosis'];
$pescribedmedications=$row['pescribedmedications'];
$surgeries=$row['surgeries'];
$therapyplans=$row['therapyplans'];
$cardiovascularReport=$row['cardiovascularReport'];
$respiratoryReport=$row['respiratoryReport'];
$gastrointestinalReport=$row['gastrointestinalReport'];
$AppointmentReportImage1=$row['AppointmentReportImage1'];
$AppointmentReportImage2=$row['AppointmentReportImage2'];
$AppointmentReportImage3=$row['AppointmentReportImage3'];
$AppointmentReportImage4=$row['AppointmentReportImage4'];
$AppointmentReportImage5=$row['AppointmentReportImage5'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>MyMed</title>
	<style>
		  hr {
      border: 2px solid black;
      height: 2px;
      background-color: black; /* Change the color here */
    }
	.preview-image{
            border: 2px solid blue;
            margin-right: 100px;
            margin-top: 30px;
            height:150px;
            width:auto;
        }
	</style>
</head>
<body>
	
<br><br><br>
<div class="container">
    <h1 class="well">Checkup Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
					<div class="col-sm-12">
									
						<div class="row">
						<div class="d-flex justify-content-center">
      <label class="text-center">Medications and Injections</label>
    </div>
	<hr >
							<div class="col-sm-4 form-group">
								<label>1</label>
								<input type="text"  name="firstmedication" value="<?= $firstmedication;?>" class="form-control" disabled>
							</div>		
							<div class="col-sm-4 form-group">
								<label>2</label>
								<input type="text"  name="secondmedication" value="<?= $secondmedication;?>" class="form-control" disabled>
							</div>	
							<div class="col-sm-4 form-group">
								<label>3</label>
								<input type="text"   name="thirdmedication" value="<?= $thirdmedication;?>"  class="form-control" disabled>
							</div>	
						</div>
						<hr>						
						<div class="row">
						<div class="d-flex justify-content-center">
      <label class="text-center">Vital Signs</label>
    </div>
	<hr >
							<div class="col-sm-4 form-group">
								<label>Blood Pressure</label>
								<input type="text"  value="<?= $bloodpressure;?>" name="bloodpressure" class="form-control" disabled>
							</div>		
							<div class="col-sm-4 form-group">
								<label>Heart Rate</label>
								<input type="text" value="<?= $heartrate;?>" name="heartrate" class="form-control" disabled>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Respiratory rate</label>
								<input type="text"   value="<?= $respiratoryrate;?>" name="respiratoryrate" class="form-control" disabled>
							</div>	
						</div>	
						<hr >
						<div class="row">
							
							<div class="d-flex justify-content-center">
      <label class="text-center">Physician's Diagnosis For That Visit</label>
    </div>
	<hr >
							<div class="col-sm-6 form-group">
								<label>Primary Diagnosis</label>
								<input type="text"  value="<?= $primarydiagnosis;?>" name="primarydiagnosis" class="form-control" disabled>
							</div>		
							<div class="col-sm-6 form-group">
								<label>Other Diagnosis</label>
								<input type="text" value="<?= $secondarydiagnosis;?>" name="secondarydiagnosis" class="form-control" disabled>
							</div>	
						</div>
						<hr>
						<div class="d-flex justify-content-center">
      <label class="text-center">Treatment Plan</label>
    </div>
	<hr >					
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Prescribed medications</label>
								<input type="text" value="<?= $pescribedmedications;?>"  name="pescribedmedications" class="form-control" disabled>
							</div>		
							<div class="col-sm-4 form-group">
								<label>Recommended procedures or surgeries</label>
								<input type="text" value="<?= $surgeries;?>"  name="surgeries" class="form-control" disabled>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Rehabilitation or therapy plans</label>
								<input type="text" value="<?= $therapyplans;?>" name="therapyplans" class="form-control" disabled>
							</div>	
						</div>		
						<hr>
						<div class="d-flex justify-content-center">
      <label class="text-center">Physical Examination Record</label>
    </div>
	<hr>					
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Cardiovascular Report</label>
								<input type="text" value="<?= $cardiovascularReport;?>"  name="cardiovascularReport" class="form-control" disabled>
							</div>		
							<div class="col-sm-4 form-group">
								<label>Respiratory Report</label>
								<input type="text" value="<?= $respiratoryReport;?>" name="RespiratoryReport" class="form-control" disabled>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Gastrointestinal Report</label>
								<input type="text" value="<?= $gastrointestinalReport;?>" name="GastrointestinalReport" class="form-control" disabled>
							</div>	
						</div>	
						<hr>
						<div class="row">
							<div class="col-sm-4 form-group" id="Container1">
								<label class="ml-5">First Image Report</label>
								<div style="width: 150px; height: 150px; border: 2px solid blue;margin-left:4vw;">
								<img src="<?=$AppointmentReportImage1 ?>" alt="First Image" style="object-fit: contain;object-position: center; width: 100%; height: 100%;" id="myImage1">
							</div>		
							</div>		
							<div class="col-sm-4 form-group" id="Container2">
								<label  class="ml-5">Second Image Report</label>
								<div style="width: 150px; height: 150px; border: 2px solid blue;margin-left:4vw;">
								<img src="<?=$AppointmentReportImage2 ?>" alt="First Image" style="object-fit: contain;object-position: center; width: 100%; height: 100%;" id="myImage2">
							</div>	
							</div>	
							<div class="col-sm-4 form-group" id="Container3">
								<label>Third Image Report</label>
								<div style="width: 150px; height: 150px; border: 2px solid blue;margin-left:4vw;">
								<img src="<?=$AppointmentReportImage3 ?>" alt="First Image" style="object-fit: contain;object-position: center; width: 100%; height: 100%;" id="myImage3">
							</div>	
							</div>	
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group" id="Container4">
								<label class="ml-5">Fourth Image Report</label>
								<div style="width: 150px; height: 150px; border: 2px solid blue;margin-left:4vw;">
								<img src="<?=$AppointmentReportImage4 ?>" alt="First Image" style="object-fit: contain;object-position: center; width: 100%; height: 100%;" id="myImage4">
							</div>		
							</div>		
							<div class="col-sm-4 form-group" id="Container5">
								<label  class="ml-5">Fifth Image Report</label>
								<div style="width: 150px; height: 150px; border: 2px solid blue;margin-left:4vw;">
								<img src="<?=$AppointmentReportImage5 ?>" alt="First Image" style="object-fit: contain;object-position: center; width: 100%; height: 100%;" id="myImage5">
							</div>	
							</div>		
						</div>	
									
					</div>
				</div>
	</div>
	</div>
    <br><br><br>
		<script>
			var img1 = document.getElementById('myImage1');
			var img2 = document.getElementById('myImage2');
			var img3 = document.getElementById('myImage3');
			var img4 = document.getElementById('myImage4');
			var img5 = document.getElementById('myImage5');
			var container1=document.getElementById('Container1');
			var container2=document.getElementById('Container2');
			var container3=document.getElementById('Container3');
			var container4=document.getElementById('Container4');
			var container5=document.getElementById('Container5');

			if (!(img1.src.endsWith('.jpg') || img1.src.endsWith('.png')|| img1.src.endsWith('.jpeg'))) {
				container1.style.display="none";
}
if (!(img2.src.endsWith('.jpg') || img2.src.endsWith('.png')|| img2.src.endsWith('.jpeg'))) {
				container2.style.display="none";
}
			if (!(img3.src.endsWith('.jpg') || img3.src.endsWith('.png')|| img3.src.endsWith('.jpeg'))) {
				container3.style.display="none";
}
			if (!(img4.src.endsWith('.jpg') || img4.src.endsWith('.png')|| img4.src.endsWith('.jpeg'))) {
				container4.style.display="none";
}
			if (!(img5.src.endsWith('.jpg') || img5.src.endsWith('.png')|| img5.src.endsWith('.jpeg'))) {
				container5.style.display="none";
}
		</script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>




