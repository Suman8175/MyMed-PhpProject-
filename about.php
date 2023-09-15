<?php
$abouttitle="";
$firstimagetitle="";
$secondimagetitle="";
$thirdimagetitle="";
$firstimage="";
$secondimage="";
$thirdimage="";
require 'connection.php';
$sql="SELECT AboutTitle,FirstImgTitle,SecondImgTitle,ThirdImgTitle,FirstImage,SecondImage,ThirdImage
FROM footercontact";
$res=mysqli_query($conn,$sql);
if ($res) {
  $row = mysqli_fetch_assoc($res);
$abouttitle=$row['AboutTitle'];
$firstimagetitle=$row['FirstImgTitle'];
$secondimagetitle=$row['SecondImgTitle'];
$thirdimagetitle=$row['ThirdImgTitle'];
$firstimage= "picture/".$row['FirstImage'];
$secondimage= "picture/".$row['SecondImage'];
$thirdimage= "picture/".$row['ThirdImage'];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link href="css/about.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-info sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"  style="padding-left: 4rem; font-family: cursive;"><img style="height:5vh;width:11vh;" src="picture/NavbarLogo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item  px-4">
          <a class="nav-link " aria-current="page" href="index.php"><b>Home</b></a>
        </li>
        <li class="nav-item  px-4">
          <a class="nav-link active" href="about.php"><b>About Us</b></a>
        </li>
        <li class="nav-item  px-4">
          <a class="nav-link" href="contactus.php"><b>Contact Us</b></a>
        </li>
       
      </ul>
      <form class="d-flex ms-auto" >
      <span>  &nbsp </span>
      <a href="signuploginpage.php" class="me-4 link-secondary">
    <i class="fa-sharp fa-solid text-dark"><b>Login</b></i>
</a>
      </form>
    </div>
  </div>
</nav>
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="<?php echo $firstimage; ?>" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0"><?php echo $firstimagetitle; ?></h5>
                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href="signuploginpage.php"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="<?php echo $secondimage; ?>" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0"><?php echo $secondimagetitle; ?></h5>
                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href="signuploginpage.php"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="<?php echo $thirdimage; ?>" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0"><?php echo $thirdimagetitle; ?></h5>
                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href="signuploginpage.php"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase" style="color: red!important; font-weight: bold;">About Us</h6>
                    <h1 class="mb-4"><?php echo $abouttitle; ?></h1>
                    <p class="mb-4">Your Health Problems are our health problems.</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Immediate 24/ 7 emergency services</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Quality services</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>100% genuine and trusted doctors</p>
                </div>
                <div class="col-lg-6 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100" src="picture/AboutUsImage.jpg" style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                        <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50" src="picture/AbousUsImageSecond.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
<?php
require 'footer/footer.php';
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>