<?php
session_start();
include '../bootstrap.php';
require 'nabbar.php';

$Loginid="";
if (isset($_SESSION['id'])){
  $Loginid=$_SESSION['id'];
}
if (isset($_SESSION['erroredit'])){
  echo $_SESSION['erroredit'];
  unset($_SESSION['erroredit']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  /* Custom CSS */
  .custom-top-spacing {
    margin-top: 70px!important; /* Adjust the value as needed */
  }
</style>
</head>
<body>
<?php
$Username="";
$dob="";
$city="";
$state = "";
$houseNo="";
$BloodGroup="";
$mobile="";
$profilePicture ="";
require ('../connection.php');
$sqlpa= "SELECT lt.Username, lt.`D.O.B`, pd.City, pd.State, pd.HouseNo, pd.BloodGroup, pd.Mobile, pd.ProfilePicture
FROM logintable lt
JOIN patientdetails pd ON lt.LoginId = pd.LoginId
WHERE lt.LoginId = '$Loginid'";
$resultpa=mysqli_query($conn,$sqlpa);
while($row=mysqli_fetch_assoc($resultpa)){
  $username = $row['Username'];
  $dob = $row['D.O.B'];
  $city = $row['City'];
  $state = $row['State'];
  $houseNo = $row['HouseNo'];
  $BloodGroup = $row['BloodGroup'];
  $mobile = $row['Mobile'];
  $profilePicture = "../profilepicture/".$row['ProfilePicture'];
}
?>
<div class="container mt-5 custom-top-spacing">
<form id="editpaForm" class="row g-3" action="patienteditcode.php" method="POST" enctype="multipart/form-data" >
<div class="col-md-2">
    <label for="chooseimg" class="form-label">Choose Image</label>
    <input type="file" name="chooseimg" id="chooseimg">
  </div>
<div class="col-md-6">
  <div class="d-flex justify-content-center">
  <div class="rounded-circle overflow-hidden" style="width: 150px; height: 150px; border: 2px solid blue;">
    <img id="profilePicture" src=<?= $profilePicture; ?> alt="Profile Picture" class="img-fluid rounded-circle" style="object-fit: cover; width: 100%; height: 100%;" value="<?php echo $profilePicture?>">
  </div>
</div>
</div>
  <div class="col-md-6">
    <label for="Username" class="form-label">Username</label>
    <input type="text" class="form-control" name= "username" id="Username" value="<?php echo $username?>">
    <input type="hidden" class="form-control" name= "Loginid" id="Username" value="<?php echo $Loginid?>">
  </div>
  <div class="col-md-6">
    <label for="date" class="form-label">D.O.B</label>
    <input type="date" class="form-control" name="date" id="date" value="<?php echo $dob?>">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" name="City" id="inputCity" value="<?php echo $city?>">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select name="state" id="inputState" class="form-select">
      <option value= "Province1" <?php if ($state == "Province1") echo " selected"; ?>>Province1</option>
      <option value= "Province2" <?php if ($state == "Province2") echo " selected"; ?>>Province2</option>
      <option value= "Province3" <?php if ($state == "Province3") echo " selected"; ?>>Province3</option>
      <option value= "Province4" <?php if ($state == "Province4") echo " selected"; ?>>Province4</option>
      <option value= "Province5" <?php if ($state == "Province5") echo " selected"; ?>>Province5</option>
      <option value= "Province6" <?php if ($state == "Province6") echo " selected"; ?>>Province6</option>
      <option value= "Province7" <?php if ($state == "Province7") echo " selected"; ?>>Province7</option>
      <option value= "Province8" <?php if ($state == "Province8") echo " selected"; ?>>Province8</option>
      
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputhouse" class="form-label">House No.</label>
    <input type="text" class="form-control" name="House" id="inputhouse" value="<?php echo $houseNo?>">
  </div>
  <div class="col-md-6">
    <label for="Doctorreg" class="form-label">Blood Group</label>
    <select name="BloodGroup" id="BloodGroup" class="form-select">
      <option value= "A+" <?php if ($BloodGroup == "A+") echo " selected"; ?>>A+</option>
      <option value= "A-" <?php if ($BloodGroup  == "A-") echo " selected"; ?>>A-</option>
      <option value= "AB+" <?php if ($BloodGroup  == "AB+") echo " selected"; ?>>AB+</option>
      <option value= "AB-" <?php if ($BloodGroup  == "AB-") echo " selected"; ?>>AB-</option>
      <option value= "B-" <?php if ($BloodGroup  == "B-") echo " selected"; ?>>B-</option>
      <option value= "B+" <?php if ($BloodGroup  == "B+") echo " selected"; ?>>B+</option>
      <option value= "O-" <?php if ($BloodGroup  == "O-") echo " selected"; ?>>O-</option>
</select>
  </div>
  <div class="col-md-6">
    <label for="mobileno" class="form-label">Mobile No.</label>
    <input type="tel" class="form-control" name="Mobile" id="mobileno" pattern="[0-9]+" value="<?php echo $mobile?>">
  </div>
  <div class="col-md-4">
  <div class="text-center">
    <button type='button' class='btn btn-danger editPatientDetails' data-bs-toggle='modal' data-bs-target='#editPatientDetailsModal' data-sliderid=".$answer['sliderid'].">Edit</button>
  </div>
</div>

</form>
</div>
<div class="modal fade" id="editPatientDetailsModal" tabindex="-1" aria-labelledby="editPatientDetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPatientDetailsModalLabel">Yes!Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to edit?Once edited information</p>
        <p>will be changed?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="submit" form="deleteForm" class="btn btn-danger">Yes</button> -->
        <button type="button" class="btn btn-danger" onclick="submitForm()">Yes</button>

      </div>
    </div>
  </div>
</div>

<script>
  const inputElement = document.getElementById("chooseimg");
  const imageElement = document.getElementById("profilePicture");

  inputElement.addEventListener("change", function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
      imageElement.src = e.target.result;
    };

    reader.readAsDataURL(file);
  });
</script>
<script>
    function submitForm() {
        document.getElementById("editpaForm").submit();
    }
</script>

</body>
</html>
