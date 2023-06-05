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
    <td><a href='viewfiles.php?did=".$answer['LoginId']."'>View</a></td>
    <td><a href='verifydoctorcode.php?did=".$answer['LoginId']."'>Verify</a></td>
    <td><a href='deletedoctorcode.php?did=".$answer['LoginId']."'>Delete</a></td>
   </tr>";
  }
  ?>

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