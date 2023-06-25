
<?php 
$check="";
session_start();
if (isset($_SESSION['contactquery'])){
   $check=$_SESSION['contactquery'];
    unset($_SESSION['contactquery']);
}
?>
   <?php
                            $contactparagraph="";
                          
                            require 'connection.php';
                            $sql="SELECT ContactParagraph
                            FROM footercontact";
                            $res=mysqli_query($conn,$sql);
                            if ($res) {
                            $row = mysqli_fetch_assoc($res);
                            $contactparagraph=$row['ContactParagraph'];
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
    <a class="navbar-brand" href="#"  style="padding-left: 4rem; font-family: cursive;"><img style="height:5vh;width:11vh;" src="picture/logo.jpg"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item  px-4">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item  px-4">
          <a class="nav-link " href="about.php">About Us</a>
        </li>
        <li class="nav-item  px-4">
          <a class="nav-link active" href="contactus.php">Contact Us</a>
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
                    <p class="mb-4 fontss" >
                            <?php echo $contactparagraph ?>
                    </p>
                    
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
    <?php
    require 'footer/footer.php';
    ?>
    <!-- Footer End -->

</body>

</html>