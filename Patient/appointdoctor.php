<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoint Doctor</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/appointdoctor.css">
    <link rel="stylesheet" href="../css/appoint.css">
    <link rel="stylesheet" href="../css/admin.css">
    
</head>
<body>
  <?php 
  include '../bootstrap.php';
  include 'nabbar.php';
  require '../connection.php';
?>

  <section class="swiper mySwiper"><br><br><br><br>
  <!-- <span class="title" style="margin-top:14px;">Appoint Doctor</span> -->
  <div class="container">
  <div class="row">
    <div class="col-md-6">
      <span class="title" style="margin-top:14px;">Appoint Doctor</span>
    </div>
    <div class="col-md-6 mt-4">
      <form class="form-inline" method="get" action="">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="search_query">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" name="srch">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


    <div class="swiper-wrapper">
<?php
    $sqlsi="SELECT lt.`LoginId`,  lt.`Username`,  dd.`ProfilePicture`,dd.`Specialization`,dd.`Mobile`  FROM `logintable` lt JOIN `doctordetails` dd ON lt.`LoginId` = dd.`LoginId` WHERE lt.`userdelete` = 0 AND lt.`isverified` = 1 AND
    lt.`verifieddoctor` = 1";
    $result=mysqli_query($conn,$sqlsi);
    foreach($result as $row){ 
?>
      <div class="card swiper-slide">
        <div class="card__image">
          <img src="<?= "../profilepicture/".$row['ProfilePicture'];?>" alt="card image">
        </div>

        <div class="card__content">
          <span class="card__title">Name:<?= $row['Username']?></span>
          <span class="card__name">Specialist:<?= $row['Specialization']?></span>
          <p class="card__text"><?= $row['Mobile']?></p>
          <form action="checkappointment.php" method="POST">
          <input type= "hidden" name="appid" value="<?= $row['LoginId']?>">
          <button class="card__btn">Appoint</button>
          </form>
        </div>
      </div>
      
      <?php } ?>
    </div>
    <p style=" border-top:2px solid black;
  padding-top:9px;"> Good Health — It's a Matter of Life & Death!We Can't Help With The Second Certainty in Life, But We Can Delay The First One!</p>
  </section>

<!-- Search Query -->
<?php
if (isset($_GET['srch'])) {
  $sear = $_GET['search_query'];
  $searchQuery=ltrim($sear);
  // $sqlsearch = "SELECT * FROM logintable WHERE (Username LIKE '%$searchQuery%') AND Role = 'Doctor'  AND isverified='1'  AND verifieddoctor='1'";
  if (empty($searchQuery)) {
    echo "";
  }
  else{

  $sqlsearch="SELECT logintable.Username,logintable.LoginId, doctordetails.Specialization, doctordetails.Mobile, doctordetails.ProfilePicture 
  FROM logintable 
  INNER JOIN doctordetails ON logintable.LoginId = doctordetails.LoginId 
  WHERE (logintable.Username LIKE '%$searchQuery%') 
  AND logintable.Role = 'doctor' AND isverified='1'  AND verifieddoctor='1'";
  $runquery=mysqli_query($conn,$sqlsearch);
  $noofrows=mysqli_num_rows($runquery);
if($noofrows>0){
  ?>
  <div class="container">
  <div class="row">
    <?php
    while($answer=mysqli_fetch_array($runquery)){
      ?>
   <!-- Search Card -->
   <div class="col-lg-4 col-md-6 mb-3 mt-3">
  <div class="card shadow" style="width: 360px;">
    <div class="d-flex" style="display:flex;justify-content:space-around;margin-block:3rem;">
  <div class="rounded-circle overflow-hidden" style="width: 150px; height: 150px; border: 2px solid blue;">
      <img id="changeimg" src= <?= "../profilepicture/".$answer['ProfilePicture'];?> alt='Doctor Image'  class="img-fluid rounded-circle" style="object-fit: cover; width: 100%; height: 100%;">  
   </div>
   </div>
    <div class="card-body text-center">
      <h5 class="card-title">Name:<?= $answer['Username'];?></h5>
      <p class="card-text">Specialist: <?= $answer['Specialization'];?></p>
      <p class="card-text">Mobile No: <?= $answer['Mobile'];?></p>
      <form action="checkappointment.php" method="POST">
        <input type="hidden" name="appid" value="<?= $answer['LoginId'] ?>">
        <button class="btn btn-success mx-auto d-block" type="submit">Appoint</button>
      </form>
    </div>
  </div>
</div>   
      <?php
    }
  }
  else{
    echo "No records found";
  }

}
}

?>



<!-- Search Query Finished -->



<!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>

</body>
</html>