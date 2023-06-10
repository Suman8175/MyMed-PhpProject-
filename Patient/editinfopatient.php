<?php
session_start();
include '../bootstrap.php';
include 'nabbar.php';

$Loginid = "";
if (isset($_SESSION['patientid'])) {
  $Loginid = $_SESSION['patientid'];
}
if (isset($_SESSION['errorpaedit'])) {
    echo $_SESSION['errorpaedit'];
    unset($_SESSION['errorpaedit']);
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
  $Usernamepatient = "";
  $dobpatient = "";
  $citypatient = "";
  $statepatient = "";
  $houseNopatient = "";
  $bloodgrouppatient = "";
  $mobilepatient = "";
  $profilePicturepatient = "";
  require('../connection.php');
  $sql3 = "SELECT lt.Username, lt.`D.O.B`, pd.PatientCity, pd.PatientState, pd.PatientHouseNo, pd.PatientBloodGroup, pd.PatientMobile,             pd.PatientProfilePicture
FROM logintable lt
JOIN patientdetails pd ON lt.LoginId = pd.LoginId
WHERE lt.LoginId = '$Loginid'";

  $result = mysqli_query($conn, $sql3);
  while ($row = mysqli_fetch_array($result)) {
    $Usernamepatient = $row['Username'];
    $dobpatient = $row['D.O.B'];
    $citypatient= $row['PatientCity'];
    $statepatient = $row['PatientState'];
    $houseNopatient  = $row['PatientHouseNo'];
    $bloodgrouppatient  = $row['PatientBloodGroup'];
    $mobilepatient = $row['PatientMobile'];
    $profilePicturepatient = "../profilepicture/" . $row['PatientProfilePicture'];
  }
  ?>
  <br>
  <form id="editPatientForm" class="row g-3 mt-5" action="patienteditcode.php" method="POST" enctype="multipart/form-data">
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
                            <img id="profilePicturepa" src=<?= $profilePicturepatient; ?> alt="Profile Picture"
                              class="img-fluid rounded-circle" style="object-fit: cover; width: 100%; height: 100%;"
                              value="<?php echo $profilePicturepatient ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label for="chooseimgpa" class="form-label">Choose Image</label>
                          <input type="file" name="chooseimgpa" id="chooseimgpa">
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label for="Usernamepa" class="form-label">Username</label>
                          <input type="text" class="form-control" name="usernamepa" id="Usernamepa"
                            value="<?php echo $Usernamepatient ?>">
                          <input type="hidden" class="form-control" name="Loginid" id="Usernamepa"
                            value="<?php echo $Loginid ?>">
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label for="datepa" class="form-label">D.O.B</label>
                          <input type="date" class="form-control" name="datepa" id="datepa" value="<?php echo $dobpatient ?>">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label for="inputCitpay" class="form-label">City</label>
                            <input type="text" class="form-control" name="Citypa" id="inputCitypa"
                              value="<?php echo $citypatient ?>">
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label for="inputStatepa" class="form-label">State</label>
                            <select name="statepa" id="inputStatepa" class="form-select">
                              <option value="Province1" <?php if ($statepatient == "Province1")
                                echo " selected"; ?>>Province1
                              </option>
                              <option value="Province2" <?php if ($statepatient == "Province2")
                                echo " selected"; ?>>Province2
                              </option>
                              <option value="Province3" <?php if ($statepatient == "Province3")
                                echo " selected"; ?>>Province3
                              </option>
                              <option value="Province4" <?php if ($statepatient == "Province4")
                                echo " selected"; ?>>Province4
                              </option>
                              <option value="Province5" <?php if ($statepatient == "Province5")
                                echo " selected"; ?>>Province5
                              </option>
                              <option value="Province6" <?php if ($statepatient == "Province6")
                                echo " selected"; ?>>Province6
                              </option>
                              <option value="Province7" <?php if ($statepatient == "Province7")
                                echo " selected"; ?>>Province7
                              </option>
                              <option value="Province8" <?php if ($statepatient == "Province8")
                                echo " selected"; ?>>Province8
                              </option>

                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="form-outline mb-4">
                        <label for="inputhousepa" class="form-label">House No.</label>
                        <input type="text" class="form-control" name="Housepa" id="inputhousepa"
                          value="<?php echo $houseNopatient ?>">
                      </div>

                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label for="mobilepatient" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control" name="MobileNopa" id="mobilepatient"
                              value="<?php echo $mobilepatient ?>">
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label for="BloodGrouppa" class="form-label">Blood Group</label>
                            <select name="BloodGroupPatient" id="BloodGrouppa" class="form-select">
                              <option value="A+" <?php if ($bloodgrouppatient == "A+")
                                echo " selected"; ?>>A+
                              </option>
                              <option value="A-" <?php if ($bloodgrouppatient == "A-")
                                echo " selected"
                                ; ?>>A-</option>
                              <option value="AB+" <?php if ($bloodgrouppatient == "AB+")
                                echo " selected";
                              ?>>AB+</option>
                              <option value="AB-" <?php if ($bloodgrouppatient == "AB-")
                                echo " selected";
                              ?>>AB-</option>
                              <option value="B+" <?php if ($bloodgrouppatient == "B+")
                                echo " selected";
                              ?>>B+</option>
                              <option value="B-" <?php if ($bloodgrouppatient == "B-")
                                echo " selected";
                              ?>>B-</option>
                              <option value="O+" <?php if ($bloodgrouppatient == "O+")
                                echo " selected";
                              ?>>O+</option>
                              <option value="O-" <?php if ($bloodgrouppatient == "O-")
                                echo " selected";
                              ?>>O-</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="d-flex justify-content-center pt-3">

                        <button type='button' class='btn btn-success editPatientDetails' data-bs-toggle='modal'
                          data-bs-target='#editPatientDetailsModal'>Edit</button>
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
  <div class="modal fade" id="editPatientDetailsModal" tabindex="-1" aria-labelledby="editPatientDetailsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editPatientDetailsModalLabel">Yes!Edit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to edit?Once edited information</p>
          <p>will be changed?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger" onclick="submitPForm()">Yes</button>

        </div>
      </div>
    </div>
  </div>

  <script>
    const inputElement = document.getElementById("chooseimgpa");
    const imageElement = document.getElementById("profilePicturepa");

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
    function submitPForm() {
      document.getElementById("editPatientForm").submit();
    }
  </script>

</body>

</html>