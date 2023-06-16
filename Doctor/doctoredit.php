<?php
session_start();
include '../bootstrap.php';
include 'docwelcome.php';

$Loginid = "";
if (isset($_SESSION['docid'])) {
  $Loginid = $_SESSION['docid'];
}
if (isset($_SESSION['erroredit'])) {
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
  <title>Edit Your Profile</title>
  <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
        .custom-margin{
          margin-top: -85px;
        }
        .container{
          height: 90vh!important;
        }
    </style>
</head>

<body>
  <?php
  $Username = "";
  $dob = "";
  $city = "";
  $state = "";
  $houseNo = "";
  $registration = "";
  $specialization = "";
  $mobile = "";
  $profilePicture = "";
  require('../connection.php');
  $sql3 = "SELECT lt.Username, lt.`D.O.B`, lt.`NMCno`,dd.City, dd.State, dd.HouseNo, dd.Specialization, dd.Mobile, dd.starttime,dd.endtime,dd.ProfilePicture
FROM logintable lt
JOIN doctordetails dd ON lt.LoginId = dd.LoginId
WHERE lt.LoginId = '$Loginid'";

  $result = mysqli_query($conn, $sql3);
  while ($row = mysqli_fetch_array($result)) {
    $username = $row['Username'];
    $dob = $row['D.O.B'];
    $city = $row['City'];
    $state = $row['State'];
    $houseNo = $row['HouseNo'];
    $registration = $row['NMCno'];
    $specialization = $row['Specialization'];
    $mobile = $row['Mobile'];
    $profilePicture = "../profilepicture/" . $row['ProfilePicture'];
    $starttime = $row['starttime'];
    $endtime = $row['endtime'];
  }
  ?>
  <br>
  <form id="editForm" class="row g-3 mt-5" action="doctoreditcode.php" method="POST" enctype="multipart/form-data">
    <section class="h-100 bg-light custom-margin">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col pt-3">
            <div class="card card-registration my-4">
              <div class="row g-0">
                <div class="col-xl-6 d-none d-xl-block">
                  <img src="../profilepicture/test.jpg"
                    alt="Sample photo" class="img-fluid"
                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                </div>
                <div class="col-xl-6">
                  <div class="card-body p-md-5 text-black">
                    <h3 class="mb-5 text-uppercase">Edit Your Information</h3>



                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="d-flex justify-content-center">
                          <div class="rounded-circle overflow-hidden"
                            style="width: 150px; height: 150px; border: 2px solid blue;">
                            <img id="profilePicture" src=<?= $profilePicture; ?> alt="Profile Picture"
                              class="img-fluid rounded-circle" style="object-fit: cover; width: 100%; height: 100%;"
                              value="<?php echo $profilePicture ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label for="chooseimg" class="form-label">Choose Image</label>
                          <input type="file" name="chooseimg" id="chooseimg">
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label for="Username" class="form-label">Username</label>
                          <input type="text" class="form-control" name="username" id="Username"
                            value="<?php echo $username ?>">
                          <input type="hidden" class="form-control" name="Loginid" id="Username"
                            value="<?php echo $Loginid ?>">
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label for="date" class="form-label">D.O.B</label>
                          <input type="date" class="form-control" name="date" id="date" value="<?php echo $dob ?>">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" name="City" id="inputCity"
                              value="<?php echo $city ?>">
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label for="inputState" class="form-label">State</label>
                            <select name="state" id="inputState" class="form-select">
                              <option value="Province1" <?php if ($state == "Province1")
                                echo " selected"; ?>>Province1
                              </option>
                              <option value="Province2" <?php if ($state == "Province2")
                                echo " selected"; ?>>Province2
                              </option>
                              <option value="Province3" <?php if ($state == "Province3")
                                echo " selected"; ?>>Province3
                              </option>
                              <option value="Province4" <?php if ($state == "Province4")
                                echo " selected"; ?>>Province4
                              </option>
                              <option value="Province5" <?php if ($state == "Province5")
                                echo " selected"; ?>>Province5
                              </option>
                              <option value="Province6" <?php if ($state == "Province6")
                                echo " selected"; ?>>Province6
                              </option>
                              <option value="Province7" <?php if ($state == "Province7")
                                echo " selected"; ?>>Province7
                              </option>
                              <option value="Province8" <?php if ($state == "Province8")
                                echo " selected"; ?>>Province8
                              </option>

                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="form-outline mb-4">
                        <label for="inputhouse" class="form-label">House No.</label>
                        <input type="text" class="form-control" name="House" id="inputhouse"
                          value="<?php echo $houseNo ?>">
                      </div>

                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label for="Doctorreg" class="form-label">Doctor Registration No</label>
                            <input type="text" class="form-control" name="Registration" id="Doctorreg"
                              value="<?php echo $registration ?>">
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label for="Doctorreg" class="form-label">Doctor Specialization</label>
                            <select name="specialization" id="Doctorreg" class="form-select">
                              <option value="General" <?php if ($specialization == "General")
                                echo " selected"; ?>>General
                              </option>
                              <option value="Dental" <?php if ($specialization == "Dental")
                                echo " selected"
                                ; ?>>Dental</option>
                              <option value="Neuro" <?php if ($specialization == "Neuro")
                                echo " selected";
                              ?>>Neuro</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label for="starttime" class="form-label">StartTime</label>
                            <select name="starttime" id="starttime" class="form-select">
                              <?php
                              for ($i = 0; $i < 25; $i++) {
                                $hour = str_pad($i, 2, '0', STR_PAD_LEFT);
                                $optionValue = $hour . ':00:00';
                                $selected = ($starttime == $optionValue) ? 'selected' : '';
                                echo "<option value='$optionValue' $selected>$hour:00</option>";
                              }
                              ?>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label for="endtime" class="form-label">EndTime</label>
                            <select name="endtime" id="endtime" class="form-select">
                              <?php
                              for ($i = 0; $i < 25; $i++) {
                                $hourend = str_pad($i, 2, '0', STR_PAD_LEFT);
                                $optionValueend = $hourend . ':00:00';
                                $selectedval = ($endtime == $optionValueend) ? 'selected' : '';
                                echo "<option value='$optionValueend' $selectedval>$hourend:00</option>";
                              }
                              ?>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="d-flex justify-content-center pt-3">

                        <button type='button' class='btn btn-success editDoctorDetails' data-bs-toggle='modal'
                          data-bs-target='#editDoctorDetailsModal' data-sliderid=".$answer['sliderid'].">Edit</button>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

  </form>
  <div class="modal fade" id="editDoctorDetailsModal" tabindex="-1" aria-labelledby="editDoctorDetailsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editDoctorDetailsModalLabel">Yes!Edit</h5>
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

    inputElement.addEventListener("change", function (event) {
      const file = event.target.files[0];
      const reader = new FileReader();

      reader.onload = function (e) {
        imageElement.src = e.target.result;
      };

      reader.readAsDataURL(file);
    });
  </script>
  <script>
    function submitForm() {
      document.getElementById("editForm").submit();
    }
  </script>

</body>

</html>