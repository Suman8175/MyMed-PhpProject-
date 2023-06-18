<?php
session_start();
$Logid = "";
if (isset($_SESSION['patientid'])) {
  $Logid = $_SESSION['patientid'];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyMed</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  </head>
  <body>
      

<?php
require 'nabbar.php';
require '../connection.php';
?>
<br>
<br>
<span class="title">View Appointments</span>
<br>
<br>
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Doctor Name</th>
                <th>Doctor Email</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th> Your Problem</th>
            </tr>
        </thead>
        <?php
            require '../connection.php';

      /*    $sqls="SELECT *
         FROM appointmenttable
         WHERE appointmentdate > CURDATE() AND patientid = '$Logid'
         "; */
         $sqls="SELECT a.patientid, a.docid AS doctorid,a.Concern, a.appointid,a.appointmenttime,a.appointmentdate, l.Username, l.Email
         FROM appointmenttable a
         INNER JOIN logintable l ON a.docid = l.LoginId  WHERE appointmentdate > CURDATE() AND patientid = '$Logid'
         ";
         
         
            
$ress=mysqli_query($conn,$sqls);

  while($anser=mysqli_fetch_array($ress)){

   echo "<tr>
  <td>".$anser['appointid']."</td>
  <td>".$anser['Username']."</td>
  <td>".$anser['Email']."</td>
  <td>".$anser['appointmentdate']."</td>
   <td>".$anser['appointmenttime']."</td>
   <td>".$anser['Concern']."</td>
   
   </tr>";
  }
  ?>
      
        <tbody>
           

    </table>

  
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
 
<script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
<body>
    </html>