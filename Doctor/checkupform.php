<?php
require 'docwelcome.php';
require '../connection.php';
include '../bootstrap.php';
$mail="";
$pname="";
$pmob="";
$concern="";
$bg="";
$add="";
$appointid="";
if(isset($_POST["subm"])) {
$appointid=$_POST['LoginIds'];
}
echo "<br>";
echo "<br>";
echo "<br>";
if (isset($_SESSION['appointssid'])){
   $appointid= $_SESSION['appointssid'];
	unset($_SESSION['appointssid']);
}
if (isset($_SESSION['toomuchfile'])){
    echo $_SESSION['toomuchfile'];
    unset($_SESSION['toomuchfile']);
} 
$selectquery = "SELECT
    lt.Username,
    lt.Email,
    pd.PatientBloodGroup,
    pd.PatientCity,
    pd.PatientMobile,
	at.Concern
FROM
    appointmenttable at
    JOIN logintable lt ON at.patientid = lt.LoginId
    JOIN patientdetails pd ON pd.LoginId = lt.LoginId
WHERE
    at.appointid = '$appointid'";
$qry=mysqli_query($conn,$selectquery);
if($qry){
	$row = mysqli_fetch_assoc($qry);
	$pname=$row['Username'];
	$pmob=$row['PatientMobile'];
	$concern=$row['Concern'];
	$bg=$row['PatientBloodGroup'];
	$add=$row['PatientCity'];
	$mail=$row['Email'];

}
?>
<br><br><br>
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
	

<div class="container">
    <h1 class="well">Checkup Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Patient's Name</label>
								<input type="text" value="<?=$pname; ?>" class="form-control" disabled>
							</div>
							<div class="col-sm-6 form-group">
								<label>Patient's Mobile Number</label>
								<input type="text"   value="<?=$pmob; ?>" class="form-control" disabled>
							</div>
						</div>					
						<div class="form-group">
							<label>Patient's Problem</label>
							<textarea  rows="3" class="form-control" disabled><?=$concern;?> </textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Patient's Blood Group</label>
								<input type="text" value="<?=$bg; ?>" class="form-control" disabled>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Patient's Address</label>
								<input type="text"  value="<?=$add; ?>" class="form-control" disabled>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Patient's Email</label>
								<input type="text" value="<?=$mail; ?>" class="form-control" disabled>
							</div>		
						</div>
						
						<hr >	
						<form action="fillappointmentdetails.php" method="post" enctype="multipart/form-data">				
						<div class="row">
						<div class="d-flex justify-content-center">
      <label class="text-center">Medications and Injections</label>
    </div>
	<hr >
							<div class="col-sm-4 form-group">
								<label>1</label>
								<input type="text" placeholder="First Medication" name="firstmedication" class="form-control">
								<input type="hidden" placeholder="First Medication" value="<?=$appointid;?>" name="appointid" class="form-control">
							</div>		
							<div class="col-sm-4 form-group">
								<label>2</label>
								<input type="text" placeholder="Second Medication" name="secondmedication" class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>3</label>
								<input type="text" placeholder="Third Medication" name="thirdmedication" class="form-control">
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
								<input type="text" placeholder="Blood Pressure" name="bloodpressure" class="form-control">
							</div>		
							<div class="col-sm-4 form-group">
								<label>Heart Rate</label>
								<input type="text" placeholder="Heart Rate" name="heartrate" class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Respiratory rate</label>
								<input type="text" placeholder="Respiratory rate" name="respiratoryrate" class="form-control">
							</div>	
						</div>	
						<hr >
						<div class="row">
							
							<div class="d-flex justify-content-center">
      <label class="text-center">Physician's Diagnosis For This Visit</label>
    </div>
	<hr >
							<div class="col-sm-6 form-group">
								<label>Primary Diagnosis</label>
								<input type="text" placeholder="Enter Diagnosis Here.." name="primarydiagnosis" class="form-control">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Other Diagnosis</label>
								<input type="text" placeholder="Other Diagnosis Here.." name="secondarydiagnosis" class="form-control">
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
								<input type="text" placeholder="Prescribed medications"  name="pescribedmedications" class="form-control">
							</div>		
							<div class="col-sm-4 form-group">
								<label>Recommended procedures or surgeries</label>
								<input type="text" placeholder="Recommended procedures"  name="surgeries" class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Rehabilitation or therapy plans</label>
								<input type="text" placeholder="therapy plans" name="therapyplans" class="form-control">
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
								<input type="text" placeholder="Cardiovascular Report"  name="cardiovascularReport" class="form-control">
							</div>		
							<div class="col-sm-4 form-group">
								<label>Respiratory Report</label>
								<input type="text" placeholder="Respiratory Report" name="RespiratoryReport" class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Gastrointestinal Report</label>
								<input type="text" placeholder="Gastrointestinal Report" name="GastrointestinalReport" class="form-control">
							</div>	
						</div>	

						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Choose Image of Report</label>
								<input type="file" id="fileInput" name="files[]" \ multiple>
							</div>		
							<div id="previewContainer" >

							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Choose Report File</label>
								<input type="file" id="filepdf" name="filepdf">
							</div>		
						</div>
					<button type="submit"  name="submit" class="btn btn-lg btn-info">Submit</button>					
					</div>
					</form> 
				</div>
	</div>
	</div>
	<script>
// Get the file input element
// Get the file input element
const fileInput = document.getElementById('fileInput');

// Add an event listener for when files are selected
fileInput.addEventListener('change', function(event) {
  // Get the selected files
  const files = event.target.files;

  // Get the preview container element
  const previewContainer = document.getElementById('previewContainer');

  // Clear the existing previews
  previewContainer.innerHTML = '';

  // Loop through each selected file
  for (let i = 0; i < files.length; i++) {
    const file = files[i];

    // Create a FileReader object
    const reader = new FileReader();

    // Set up the FileReader onload function
    reader.onload = function(e) {
      // Create a new image element for the preview
      const img = document.createElement('img');
      img.src = e.target.result;

      // Add a CSS class for spacing
      if (img.src !== '') {
        // Add a CSS class for spacing and border
        img.classList.add('preview-image');
      }
   
      // Append the image to the preview container
      previewContainer.appendChild(img);
    };

    // Read the selected file as a Data URL
    reader.readAsDataURL(file);
  }
});



</script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>