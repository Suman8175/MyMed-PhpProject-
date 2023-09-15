<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyMed-Your Complete Solution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Josefin+Sans:wght@500&family=Montserrat:wght@100&family=Rubik+Puddles&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/section.css">
    <style>
    .carousel-item {
      height: 32rem;
      background: #777;
      color: white;
    }
.carousel-inner {
  padding-bottom: 0px;
}
    </style>
  </head>
  <body>


  <nav class="navbar navbar-expand-lg bg-info sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand pl-3" href="#" style="padding-left: 4rem;font-family: cursive;"><img style="height:5vh;width:11vh;" src="picture/NavbarLogo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item  px-4">
          <a class="nav-link active" aria-current="page" href="index.php"> <b>Home</b></a>
        </li>
        <li class="nav-item  px-4">
          <a class="nav-link" href="about.php"> <b>About Us</b></a>
        </li>
        <li class="nav-item  px-4">
          <a class="nav-link" href="contactus.php"> <b>Contact Us</b></a>
        </li>
       
      </ul>
      <form class="d-flex ms-auto" >
        <span>   &nbsp </span>
      <a href="signuploginpage.php" class="me-4 link-secondary">
    <i class="fa-sharp fa-solid text-dark" ><b>Login</b></i>
</a>
      </form>
    </div>
  </div>
</nav>
  <?php
 require('connection.php');
    $sql = "SELECT * FROM slidertable";
    $result = mysqli_query($conn, $sql);
    // $noofrows = mysqli_num_rows($result);
    ?>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
  <div class="carousel-indicators">
        <?php
        $i=0;
            foreach($result as $row){
                $activates='';
                if ($i==0){
                    $activates="active";
                }
                ?>
            <button type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide-to=<?= $i; ?> class=<?= $activates;?> aria-current="true" aria-label="Slide 1"></button>

            <?php $i++; } ?>
    
  </div>
  <div class="carousel-inner">
    <?php
  $i=0;
  foreach($result as $row){
    $activates='';
    if ($i==0){
        $activates="active";
    }
    ?>
            <div class="carousel-item <?= $activates; ?>">
      <img src=<?= "Admin/sliderimages/".$row['sliderimage'] ?> class="d-block w-100 h-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:white;font-weight: lighter;font-size: 42px"><?= $row['sliderheading'] ?></h5>
        <p style="color:white; font-weight:600px!important;font-size: 24px;"><?= $row['sliderparagraph'] ?></p>
      </div>
    </div>
    <?php $i++; } ?>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<br>
<br>
<?php
$FontAwesome1="";
$FontAwesomeTitle1="";
$FontAwesomeDesc1="";
$FontAwesome2="";
$FontAwesomeTitle2="";
$FontAwesomeDesc2="";
$FontAwesome3="";
$FontAwesomeTitle3="";
$FontAwesomeDesc3="";
$FontAwesome4="";
$FontAwesomeTitle4="";
$FontAwesomeDesc4="";
$sqls="SELECT FontAwesomeIcon1,FontAwesomeIcon2,FontAwesomeIcon3,FontAwesomeIcon4, FontAwesomeIcon1Title,FontAwesomeIcon2Title,FontAwesomeIcon3Title,FontAwesomeIcon4Title,FontAwesomeIcon1Desc,FontAwesomeIcon2Desc,FontAwesomeIcon3Desc,FontAwesomeIcon4Desc
FROM footercontact";
$resa=mysqli_query($conn,$sqls);
if ($resa) {
  $row = mysqli_fetch_assoc($resa);
  $FontAwesome1=$row['FontAwesomeIcon1'];
  $FontAwesome2=$row['FontAwesomeIcon2'];
  $FontAwesome3=$row['FontAwesomeIcon3'];
  $FontAwesome4=$row['FontAwesomeIcon4'];
  $FontAwesomeTitle1=$row['FontAwesomeIcon1Title'];
  $FontAwesomeTitle2=$row['FontAwesomeIcon2Title'];
  $FontAwesomeTitle3=$row['FontAwesomeIcon3Title'];
  $FontAwesomeTitle4=$row['FontAwesomeIcon4Title'];
    $FontAwesomeDesc1=$row['FontAwesomeIcon1Desc'];
    $FontAwesomeDesc2=$row['FontAwesomeIcon2Desc'];
    $FontAwesomeDesc3=$row['FontAwesomeIcon3Desc'];
    $FontAwesomeDesc4=$row['FontAwesomeIcon4Desc'];
  }

?>
<section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <!-- <div class="icon"><i class="fas fa-heartbeat"></i></div> -->
            <div class="icon"><?= $FontAwesome1; ?></div>
            <h4 class="title"><?= $FontAwesomeTitle1; ?></h4>
            <p class="description"><?= $FontAwesomeDesc1; ?></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><?= $FontAwesome2; ?></div>
            <h4 class="title"><?= $FontAwesomeTitle2; ?></h4>
            <p class="description"><?= $FontAwesomeDesc2; ?></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><?= $FontAwesome3; ?></div>
            <h4 class="title"><?= $FontAwesomeTitle3; ?></h4>
            <p class="description"><?= $FontAwesomeDesc3; ?></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><?= $FontAwesome4; ?></div>
            <h4 class="title"><?= $FontAwesomeTitle4; ?></h4>
            <p class="description"><?= $FontAwesomeDesc4; ?></p>
          </div>
        </div>

      </div>

    </div>
</section>
<br>
<br>
<!-- Footer -->
<?php
require 'footer/footer.php';
?>
<!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>