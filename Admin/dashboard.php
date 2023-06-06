<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>doctor delete</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <title>Admin Dashboard</title>
  </head>
  <body>
      

<?php
require 'navbar.php';
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
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>


            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <i class="fa fa-user-md fa-lg" style="color: #29a706;" aria-hidden="true"></i>
                            <div>
                                <h3 class="fs-2">15</h3>
                                <p class="fs-5">Doctors</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <i class="fa fa-user-circle fa-lg" style="color: #29a706;" aria-hidden="true"></i>
                            <div>
                                <h3 class="fs-2">20</h3>
                                <p class="fs-5">Patients</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <i class="fas fa-user-plus fa-lg" style="color: #29a706;"></i>
                            <div>
                                <h3 class="fs-2">9</h3>
                                <p class="fs-5">Recent Added</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <i class="fas fa-users-cog fa-lg" style="color: #29a706;"></i>
                            <div>
                                <h3 class="fs-2">5</h3>
                                <p class="fs-5">Deleted</p>
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
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Jonny</td>
                                    <td>jonny@gmail.com</td>
                                    <td>9864546434</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jonny</td>
                                    <td>jonny@gmail.com</td>
                                    <td>9864546434</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Jonny</td>
                                    <td>jonny@gmail.com</td>
                                    <td>9864546434</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Jonny</td>
                                    <td>jonny@gmail.com</td>
                                    <td>9864546434</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Jonny</td>
                                    <td>jonny@gmail.com</td>
                                    <td>9864546434</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Jonny</td>
                                    <td>jonny@gmail.com</td>
                                    <td>9864546434</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Jonny</td>
                                    <td>jonny@gmail.com</td>
                                    <td>9864546434</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Jonny</td>
                                    <td>jonny@gmail.com</td>
                                    <td>9864546434</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Jonny</td>
                                    <td>jonny@gmail.com</td>
                                    <td>9864546434</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Jonny</td>
                                    <td>jonny@gmail.com</td>
                                    <td>9864546434</td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Jonny</td>
                                    <td>jonny@gmail.com</td>
                                    <td>9864546434</td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Jonny</td>
                                    <td>jonny@gmail.com</td>
                                    <td>9864546434</td>
                                </tr>
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