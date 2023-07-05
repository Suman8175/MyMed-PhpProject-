<?php
session_start();
include 'nabbar.php';

$Loginid = "";
if (isset($_SESSION['patientid'])) {
  $Loginid = $_SESSION['patientid'];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <br>
    <br><br>
  <table id="example" class="table table-striped" style="width:100%;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>View Report</th>
               
            </tr>
        </thead>
        <tbody>
           <?php
           require '../connection.php';
         $sqlor="SELECT appointmentdate, appointmenttime, appointid
         FROM appointmenttable
         WHERE patientid = '$Loginid' AND appointmentdone = '1'
         ";
         $query=mysqli_query($conn,$sqlor);
         while($answer=mysqli_fetch_array($query)){

            echo "<tr>
           <td>".$answer['appointid']."</td>
           <td>".$answer['appointmentdate']."</td>
            <td>".$answer['appointmenttime']."</td>
        <td><button class='btn btn-success'><a  style='text-decoration: none;color: white;' href='reportpdf.php?id=".$answer['appointid']."'>Report</button></td>
            
            </tr>";
           }
         ?>
      
    </tbody>
    </table>
    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
