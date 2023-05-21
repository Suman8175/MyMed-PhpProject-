<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>appoint doctor</title>
    <link rel="stylesheet" href="../css/editinfopatient.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="../javascript/script.js" defer></script>

  </head>
  <body>
      

<?php
require 'welcome.php';
?>

<div class="editpatient">
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Full Name</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-8">
  <label>Date of Birth</label>
    <input type="date" placeholder="Enter birth date" required>
  </div>

  <div class="col-md-6">
    <label for="inputState" class="form-label">Gender</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>Male</option>
      <option>Female</option>
      <option>Others</option>
    </select>
    <br>
    <br>

  </div>
  
  <?php
include 'adddetails.php';
?>
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Details
</button>
<br>
<br>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Upload</button>
  </div>
  
</form>
        
</div>








   

               


</body>
</html>


</body>
<html>
