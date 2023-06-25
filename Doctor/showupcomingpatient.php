<?php
if (!session_id()) session_start();
$username="";
$idd="";
if (isset($_SESSION['docusername'])){
  $username=$_SESSION['docusername'];
}
if (isset($_SESSION['docid'])){
  $idd=$_SESSION['docid'];
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Appointments</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  </head>
  <body>
      

<?php
require 'docwelcome.php';
require '../connection.php';
?>
<br>
<br>
<span class="title">Upcoming Appointments</span>
<br>
<br>

<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
            <th>SNo</th>
                <th>Patient Name</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>Problem</th>
                <th>Checkup</th>
               
            </tr>
        </thead>
        <tbody>
        <?php
                $querys="SELECT a.docid, a.patientid AS patientid,a.Concern, a.appointid,a.appointmenttime,a.appointmentdate, l.Username, l.Email
                FROM appointmenttable a
                INNER JOIN logintable l ON a.patientid = l.LoginId  WHERE appointmentdate > CURDATE() AND docid = '$idd' AND appointmentdone=0
                ORDER BY appointmentdate ASC";
                
            $resulsts = mysqli_query($conn, $querys);
            while ($answerss = mysqli_fetch_array($resulsts)) {
                echo "<tr>
  <td>" . $answerss['appointid'] . "</td>
  <td>".$answerss['Username']."</td>
   <td>" . $answerss['appointmentdate'] . "</td>
   <td>" . $answerss['appointmenttime'] . "</td>
   <td>" . $answerss['Concern'] . "</td>
   <td> <button type='button' class='btn btn-success appointButton' style='text-decoration:none;' data-bs-toggle='modal' data-bs-target='#appointModal' data-appointmentId='" . $answerss['appointid'] ."'>Check Up</button></td>
   </tr>";
            }
            ?>
            
</tfoot>
    </table>

    <div class="modal fade" id="appointModal" tabindex="-1" aria-labelledby="appointModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verifypaModalLabel">CheckUp From?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to check up the patient?</p>
      </div>
      <div class="modal-footer">
      <form id="verifyForm" action="checkupform.php" method="POST">
                    <input type="hidden" id="appoin" name="LoginIds">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name= "subm" class="btn btn-danger">Yes</button>
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
    var verifyButtonsc = document.getElementsByClassName("appointButton");
    for (var i = 0; i < verifyButtonsc.length; i++) {
        verifyButtonsc[i].addEventListener("click", function() {
            var LoginId = this.getAttribute("data-appointmentId");
            document.getElementById("appoin").value = LoginId;
        });
    }
</script>


<body>
    </html>