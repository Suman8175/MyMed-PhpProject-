<?php
echo "<br>";
echo "<br>";
session_start();
if (isset($_SESSION['doctorverificationcomplete'])){
  echo $_SESSION['doctorverificationcomplete'];
  unset($_SESSION['doctorverificationcomplete']);
}
if (isset($_SESSION['doctordeletedsucessfully'])){
  echo $_SESSION['doctordeletedsucessfully'];
  unset($_SESSION['doctordeletedsucessfully']);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>doctor verify</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  </head>
  <body>
      

<?php

require 'navbar.php';
?>
<br>


<span class="title">Verify</span>
<br>
<br>

<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>NMC No</th>
                <th>View Files</th>
                <th>Verify Doctor</th>
                <th>Delete Doctor</th>
            </tr>
        </thead>
        <tbody>
           
            <?php
            require '../connection.php';
  $sql="SELECT *
  FROM logintable
  WHERE Role = 'Doctor' AND isverified = '1'  AND verifieddoctor = '0'  AND userdelete = '0'";
$res=mysqli_query($conn,$sql);

  while($answer=mysqli_fetch_array($res)){

   echo "<tr>
  <td>".$answer['LoginId']."</td>
  <td>".$answer['Username']."</td>
   <td>".$answer['Email']."</td>
   <td>".$answer['NMCno']."</td>
    <td><a href='viewfiles.php?did=".$answer['LoginId']."'>View</a></td>
  <td>
    <button type='button' class='btn btn-success verifyButton' data-bs-toggle='modal' data-bs-target='#verifyModal' data-LoginId='" . $answer['LoginId'] ."'>Verify</button></td>
    <td> <button type='button' class='btn btn-danger deleteButton' data-bs-toggle='modal' data-bs-target='#deleteModal' data-vLoginId='" . $answer['LoginId'] ."'>Delete</button></td>
   
   </tr>";
  }
  ?>

    </table>


    <div class="modal fade" id="verifyModal" tabindex="-1" aria-labelledby="verifyModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verifyModalLabel">Verify Doctor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to verify?</p>
      </div>
      <div class="modal-footer">
      <form id="verifyForm" action="verifydoctorcode.php" method="POST">
                    <input type="hidden" id="LoginIdInput" name="LoginId">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                </form>
      </div>
    </div>
  </div>
</div>


<!-- DoctorDeleteModal -->

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Verify Doctor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete the doctor?</p>
      </div>
      <div class="modal-footer">
      <form id="verifyForm" action="deletedoctorcode.php" method="POST">
                    <input type="hidden" id="LoginIdInputv" name="LoginId">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                </form>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
<script>
    var verifyButtons = document.getElementsByClassName("verifyButton");
    for (var i = 0; i < verifyButtons.length; i++) {
        verifyButtons[i].addEventListener("click", function() {
            var LoginId = this.getAttribute("data-LoginId");
            document.getElementById("LoginIdInput").value = LoginId;
        });
    }
</script>
<script>
    var deleteButtons = document.getElementsByClassName("deleteButton");
    for (var j = 0; j < deleteButtons.length; j++) {
        deleteButtons[j].addEventListener("click", function() {
            var LoginId = this.getAttribute("data-vLoginId");
            document.getElementById("LoginIdInputv").value = LoginId;
        });
    }
</script>

<body>
    </html>