<?php
session_start();
require 'nabbar.php';
$appid="";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $appid=$_POST['appid'];
  
}
if (isset($_SESSION['patientid'])) {
    $Loginid = $_SESSION['patientid'];
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appoint-Doctors</title>
    <link rel="stylesheet" href="../css/appointdoctorcontainer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body{
    background-color: #edf1f5;
    margin-top:20px;
}
.card {
    margin-bottom: 30px;
}
.card1{
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: 0;
}
.card .card-subtitle {
    font-weight: 300;
    margin-bottom: 10px;
    color: #8898aa;
}
.table-product.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f3f8fa!important
}
.table-product td{
    border-top: 0px solid #dee2e6 !important;
    color: #728299!important;
}
.res{
    height: 36vh!important;
    margin-right: 1vw;
}
    </style>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <?php
    $user="";
    $spec="";
    $mob="";
    $cityy="";
    $stat="";
    $regs="";
    $imagee="";
    $starttime="";
    $endtime="";
    require '../connection.php';
     $sqli="SELECT   lt.`LoginId`, lt.`Username`,  dd.`ProfilePicture`,dd.`Specialization`,dd.`Mobile` ,dd.`City`,dd.`State`,dd.`Registration` ,dd.`starttime`,dd.`endtime` FROM `logintable` lt JOIN `doctordetails` dd ON lt.`LoginId` = dd.`LoginId` WHERE   lt.`LoginId` = '$appid'";
     $querygen=mysqli_query($conn,$sqli);
     while($resu=mysqli_fetch_array($querygen)){
        $user=$resu['Username'];
        $spec=$resu['Specialization'];
        $mob=$resu['Mobile'];
        $cityy=$resu['City'];
        $stat=$resu['State'];
        $starttime = date("H", strtotime($resu['starttime']));
        $endtime=date("H", strtotime($resu['endtime'])) ;
        $regs=$resu['Registration'];
        $imagee="../profilepicture/".$resu['ProfilePicture'];
     }
     $sql2=""
    ?>
<div class="container ">
    <div class="card card1">
        <div class="card-body">
            <h3 class="card-title">Nepal Government</h3>
            <h6 class="card-subtitle">Healthy Body, Healthy Mind.</h6>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="d-flex justify-content-center">
                        <div class="rounded-circle overflow-hidden" style="width: 275px; height: 240px; margin-top:5vh; border: 2px solid blue;">
                    <div class="img-fluid rounded-circle img-responsive"><img src= <?=$imagee?>  style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                    </div>
                    </div>
                    <div class="mt-3" style="padding-left: 10vw;">
                        <h3 class="card-title">Dr. <?= $user?></h3>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label for="Usernamedoctors" class="form-label">Doctor Name</label>
                                <input type="text" class="form-control bg-light" name= "usernamedoctors" id="Usernamedoctors" value= "Dr. <?=$user?>"  disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label for="statedoctors" class="form-label"> Doctor's State</label>
                                <input type="text" class="form-control" name="statedoctors" id="statedoctors" value="<?=$stat?>" disabled>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label for="specializationdoctors" class="form-label">Doctor's Specialization</label>
                                <input type="text" class="form-control" name= "specializationdoctors" id="specializationdoctors" 
                                value="<?=$spec?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label for="regdoctors" class="form-label">Doctor's Registration Number</label>
                                <input type="text" class="form-control" name="regdoctors" id="regdoctors" value="<?=$regs?>" disabled>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <form action="appointment.php" method="post">
                                <label for="datech" class="form-label">Choose Appropriate Date</label>
                                <input type="date" class="form-control" name= "appointment-date" id="appointment-date">
                                <input type="text" class="form-control" name= "doctorid" value="<?= $appid?>" hidden>
                            
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label for="appointment-time" class="form-label">Choose Appropriate Time</label>
                                <select name="appointment-time" id="appointment-time" class="form-select">
                      
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="d-flex justify-content-center pt-3">
                    <button type="submit">Submit</button>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
<button class="btn btn-danger" id="back">
  <a href="appointdoctor.php" style="text-decoration: none; color: inherit;">Browse More</a>
</button>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
  $('#appointment-date').change(function() {
    const selectedDate = $(this).val();
    
    $.ajax({
      url: 'checktimingofdoctor.php',
      type: 'POST',
      data: {
        'doctorid': '<?= $appid; ?>',
        'appointment-date': selectedDate
      },
      dataType: 'json', // Specify the expected data type as JSON
      success: function(response) {
        $('#appointment-time').empty();
        
        for (let i =<?= $starttime?>; i <= <?= $endtime ?>; i++) {
          if (!response.includes(i)) {
            const timeString = i.toString().padStart(2, '0') + ':00:00';
            const option = $('<option>').text(timeString).val(timeString);
            $('#appointment-time').append(option);
          }
        }
      },
      error: function() {
        // Handle error case
      }
    });
  });
});

</script>

<script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; // January is 0
    var yyyy = today.getFullYear();

    if (dd < 10) {
      dd = '0' + dd;
    }

    if (mm < 10) {
      mm = '0' + mm;
    }

    today = yyyy + '-' + mm + '-' + dd;

    // Set the minimum date of the input field to today
    document.getElementById("appointment-date").setAttribute("min", today);
  </script>
</body>
</html>