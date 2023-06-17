
<?php 
$check="";
session_start();
if (isset($_SESSION['contactquery'])){
   $check=$_SESSION['contactquery'];
    unset($_SESSION['contactquery']);
}
?>
<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>About Us</title>
     <!--  <link href="css/about.css" rel="stylesheet"> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link href="css/about.css" rel="stylesheet">
    </head>
    <body>
  





    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"  style="padding-left: 4rem; font-family: cursive;">MyMed</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item  px-4">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item  px-4">
          <a class="nav-link active" href="about.php">About Us</a>
        </li>
        <li class="nav-item  px-4">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex ms-auto" >
      <span>Login  &nbsp </span><a href="signuploginpage.php" class="me-4 link-secondary">
    <i class="fa-sharp fa-solid fa-hotel"></i>
</a>
      </form>
    </div>
  </div>
</nav>
      <div class="container-fluid page-header mb-5 py-5">
          <div class="container">
              <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
              <nav aria-label="breadcrumb animated slideInDown">
              </nav>
          </div>
      </div>


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">
                        <?php 
                        include 'bootstrap.php';
                        echo $check; ?>
                    </h6>
                    <h6 class="text-secondary text-uppercase">Get In Touch</h6>
                    <h1 class="mb-4">Contact For Any Query</h1>
                    <p class="mb-4 fontss" >Thank you for choosing our patient management system. We value your feedback and are committed to providing exceptional service. If you have any questions, concerns, or suggestions, please don't hesitate to contact us. Our dedicated support team is here to assist you. You can reach us by phone at [phone number] during our business hours [mention hours] or send us an email at [email address]. We strive to respond to all inquiries promptly. Your input is vital in helping us improve our system and enhance your user experience. We appreciate your trust in us and look forward to assisting you.</p>
                    
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center " style="background-color: rgba(99, 124, 173, 0.726)!important;">
                    
                        <form action="contactquery.php" method="post">
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name1" id="name" placeholder="Your Name" >
                                        <label for="name">Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email1" id="email" placeholder="Your Email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="subject1" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message1" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="submit_button" >Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <footer class="text-center text-lg-start  text-muted" style=" background-color:rgb(242, 242, 245)!important;">
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
                <p><i class="fas fa-home me-3 text-secondary"></i>Nepal</p>
                <p>
                  <i class="fas fa-envelope me-3 text-secondary"></i>
                  mymed75@gmail.com
                </p>
                <p><i class="fas fa-phone me-3 text-secondary"></i>9815457810</p>
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

    <!-- Footer End -->

</body>

</html>