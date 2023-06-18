<?php
require 'docwelcome.php';

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
	</style>
</head>
<body>
	

<div class="container">
    <h1 class="well">Checkup Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Patient's Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Patient's Mobile Number</label>
								<input type="text"  class="form-control">
							</div>
						</div>					
						<div class="form-group">
							<label>Patient's Problem</label>
							<textarea  rows="3" class="form-control"></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Patient's Blood Group</label>
								<input type="text"  class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Patient's Address</label>
								<input type="text"  class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Patient's Email</label>
								<input type="text"  class="form-control">
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
								<input type="text" placeholder="Enter Diagnosis Here.." class="form-control">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Other Diagnosis</label>
								<input type="text" placeholder="Enter Company Name Here.." class="form-control">
							</div>	
						</div>	
						<hr >					
						<div class="row">
						<div class="d-flex justify-content-center">
      <label class="text-center">Medications and Injections</label>
    </div>
	<hr >
							<div class="col-sm-4 form-group">
								<label>1</label>
								<input type="text" placeholder="" class="form-control">
							</div>		
							<div class="col-sm-4 form-group">
								<label>2</label>
								<input type="text" placeholder="" class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>3</label>
								<input type="text" placeholder="" class="form-control">
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
								<input type="text" placeholder="" class="form-control">
							</div>		
							<div class="col-sm-4 form-group">
								<label>Heart Rate</label>
								<input type="text" placeholder="" class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Respiratory rate</label>
								<input type="text" placeholder="" class="form-control">
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
								<input type="text" placeholder="" class="form-control">
							</div>		
							<div class="col-sm-4 form-group">
								<label>Recommended procedures or surgeries</label>
								<input type="text" placeholder="" class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Rehabilitation or therapy plans</label>
								<input type="text" placeholder="" class="form-control">
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
								<input type="text" placeholder="" class="form-control">
							</div>		
							<div class="col-sm-4 form-group">
								<label>Respiratory Report</label>
								<input type="text" placeholder="" class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Gastrointestinal Report</label>
								<input type="text" placeholder="" class="form-control">
							</div>	
						</div>	
					<button type="button" class="btn btn-lg btn-info">Submit</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>