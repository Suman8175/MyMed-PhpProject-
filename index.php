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


  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand pl-3" href="#" style="padding-left: 4rem;font-family: cursive;"><img style="height:5vh;width:11vh;" src="picture/logo.jpg"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item  px-4">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item  px-4">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item  px-4">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
       
      </ul>
      <form class="d-flex ms-auto" >
        <span>Login  &nbsp </span>
      <a href="signuploginpage.php" class="me-4 link-secondary">
    <i class="fa-sharp fa-solid fa-hotel"></i>
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
  <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
        <?php
        $i=0;
            foreach($result as $row){
                $activates='';
                if ($i==0){
                    $activates="active";
                }
                ?>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to=<?= $i; ?> class=<?= $activates;?> aria-current="true" aria-label="Slide 1"></button>

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
<!-- Added section -->
<section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title">Entrust Us</h4>
            <p class="description">Entrust your heart to us with your health related problems</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title">Diagnosis</h4>
            <p class="description">Your every diagnosis is saved here</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="fas fa-thermometer"></i></div>
            <h4 class="title">Certified Doctors</h4>
            <p class="description">Fully Certified and Experienced Doctor</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title">Easy Appointment</h4>
            <p class="description">Book appointment in your date and time</p>
          </div>
        </div>

      </div>

    </div>
</section>
<br>
<br>
<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span style="font-family: 'Dancing Script', cursive; font-size:34px;">Get connected with us:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com/LGICpokhara" class="me-4 link-secondary">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://www.facebook.com/LGICpokhara" class="me-4 link-secondary">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://www.facebook.com/LGICpokhara" class="me-4 link-secondary">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
          <i class="fa-solid fa-truck-medical"></i>
            MyMed-Your Complete Doctor
          </h6>
          <p>  
            Effortlessly manage your patient details online for personalized and secure care.
          </p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Our Facilities
          </h6>
          <p>
            Online Booking
          </p>
          <p>
            Online Medical Report
          </p>
          <p>
            Easily Accessible
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
       
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> Nepal</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            mymed75@gmail.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> 9815457810</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025); border-top:2px solid rgb(143, 137, 137); ">
  CopyRight &copy; <?php echo date("Y")?> -ALL Right Reserved
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->





   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>