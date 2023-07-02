<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DashBoard</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/body.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <title>Admin Dashboard</title>
  </head>
  <body>
      

<?php
$totaldoctor="";

require 'navbar.php';
require '../connection.php';
$sqlsel="SELECT COUNT(*) AS total_doctors
FROM logintable
WHERE Role = 'Doctor' AND isverified = '1'  AND verifieddoctor = '1'  AND userdelete = '0'";
$result=mysqli_query($conn,$sqlsel);
$row=mysqli_fetch_assoc($result);
$totaldoctor=$row['total_doctors'];

?>

<?php
$totalpatient="";
$sqlpatient="SELECT COUNT(*) AS total_patients
FROM logintable
WHERE Role = 'Patient' AND isverified = '1' AND userdelete = '0'";
$resultpatient=mysqli_query($conn,$sqlpatient);
$rowpatient=mysqli_fetch_assoc($resultpatient);
$totalpatient=$rowpatient['total_patients'];
?>
<?php
$totaldelpatient="";
$sqldelpatient="SELECT COUNT(*) AS totaldel_patients
FROM logintable
WHERE Role = 'Patient' AND userdelete = '1'";
$resultdelpatient=mysqli_query($conn,$sqldelpatient);
$rowdelpatient=mysqli_fetch_assoc($resultdelpatient);
$totaldelpatient=$rowdelpatient['totaldel_patients'];
?>
<?php
$totaldeldoctor="";
$sqldeldoctor="SELECT COUNT(*) AS totaldel_doctor
FROM logintable
WHERE Role = 'Doctor' AND userdelete = '1'";
$resultdeldoctor=mysqli_query($conn,$sqldeldoctor);
$rowdeldoctor=mysqli_fetch_assoc($resultdeldoctor);
$totaldeldoctor=$rowdeldoctor['totaldel_doctor'];
?>

<div class="d-flex" id="wrapper">
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <b class="fs-2 m-0" style="color:White;">Dashboard</b>
                </div>


            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <i class="fa fa-user-md fa-lg" style="color: #29a706;" aria-hidden="true"></i>
                            <div>
                                <h3 class="fs-2"><?=$totaldoctor; ?></h3>
                                <p class="fs-5">Doctors</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <i class="fa fa-user-circle fa-lg" style="color: #29a706;" aria-hidden="true"></i>
                            <div>
                                <h3 class="fs-2"><?=$totalpatient; ?></h3>
                                <p class="fs-5">Patients</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <i class="fas fa-users-cog fa-lg" style="color: #29a706;"></i>
                            <div>
                                <h3 class="fs-2"><?=$totaldelpatient; ?></h3>
                                <p class="fs-5">Deleted Patient</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <i class="fas fa-users-cog fa-lg" style="color: #29a706;"></i>
                            <div>
                                <h3 class="fs-2"><?=$totaldeldoctor; ?></h3>
                                <p class="fs-5">Deleted Doctor</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Recently Added</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Account Created Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php
                                                require '../connection.php';
                                                $sql = "SELECT * FROM logintable WHERE userdelete = '0' AND isverified = '1' ORDER BY AccountCreation DESC";
                                              $res=mysqli_query($conn,$sql);
                                              
                                                while($answer=mysqli_fetch_array($res))
                                                {
                                                    echo "<tr>
                                          
                                                    <td>".$answer['Username']."</td>
                                                    <td>".$answer['Email']."</td>
                                                     <td>".$answer['Role']."</td>
                                                     <td>".$answer['AccountCreation']."</td>
                                                     <tr>";


                                                }


                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

</body>
</html>