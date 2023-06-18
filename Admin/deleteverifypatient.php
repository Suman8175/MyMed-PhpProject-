<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctor delete</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  </head>
  <body>
      

<?php
require 'navbar.php';
require '../connection.php';
?>
<br>
<br>
<span class="title">Delete Patient</span>
<br>
<br>

<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
            <th>SNo</th>
                <th>Profile Picture</th>
                <th>Name</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Account Created Date</th>
                <th>MobileNo</th>
                <th>Delete User</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $querys = "SELECT lt.`LoginId`, lt.`Email`, lt.`D.O.B`, lt.`Username`,lt.`AccountCreation`,dd.`PatientMobile`,  dd.`PatientProfilePicture` FROM `logintable` lt JOIN `patientdetails` dd ON lt.`LoginId` = dd.`LoginId` WHERE lt.`userdelete` = 0 AND lt.`isverified` = 1 ";
            $resulst = mysqli_query($conn, $querys);
            while ($answer = mysqli_fetch_array($resulst)) {
                $loginId = $answer['LoginId'];
                $image = '../profilepicture/' . $answer['PatientProfilePicture'];
                echo "<tr>
  <td>" . $answer['LoginId'] . "</td>
  <td><img src='" . $image . "' alt='Image'  class='img-fluid rounded-circle'  style='width: 80px; height: auto;'></td>
  <td>" . $answer['Username'] . "</td>
   <td>" . $answer['Email'] . "</td>
   <td>" . $answer['D.O.B'] . "</td>
   <td>" . $answer['AccountCreation'] . "</td>
   <td>" . $answer['PatientMobile'] . "</td>
   <td> <button type='button' class='btn btn-link verifypaButton' data-bs-toggle='modal' data-bs-target='#verifypaModal' data-verLogId='" . $answer['LoginId'] ."'>Delete</button></td>
   </tr>";
            }
            ?>
            
</tfoot>
    </table>

    <div class="modal fade" id="verifypaModal" tabindex="-1" aria-labelledby="verifypaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verifypaModalLabel">Delete Patient</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete the patient?</p>
      </div>
      <div class="modal-footer">
      <form id="verifyForm" action="delpatient.php" method="POST">
                    <input type="hidden" id="LoginIdInput" name="LoginIds">
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
    var verifyButtonsc = document.getElementsByClassName("verifypaButton");
    for (var i = 0; i < verifyButtonsc.length; i++) {
        verifyButtonsc[i].addEventListener("click", function() {
            var LoginId = this.getAttribute("data-verLogId");
            document.getElementById("LoginIdInput").value = LoginId;
        });
    }
</script>

<body>
    </html>