<?php
$footertitle="";
$footerdesc="";
$facility1="";
$facility2="";
$facility3="";
$mymail="";
$mycontact="";
require 'connection.php';
$sql="SELECT FooterTitle,FooterDesc,Facility1,Facility2,Facility3,Email,Mobile
FROM footercontact";
$res=mysqli_query($conn,$sql);
if ($res) {
  $row = mysqli_fetch_assoc($res);
  $footertitle=$row['FooterTitle'];
  $footerdesc=$row['FooterDesc'];
  $facility1=$row['Facility1'];
  $facility2=$row['Facility2'];
  $facility3=$row['Facility3'];
  $mymail=$row['Email'];
  $mycontact=$row['Mobile'];
}
?>


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
          <?php echo $footertitle; ?>
          </h6>
          <p>  
         <?php echo $footerdesc; ?>
          </p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Our Facilities
          </h6>
          <p>
           <?php echo $facility1; ?>
          </p>
          <p>
           <?php echo $facility2; ?>
          </p>
          <p>
          <?php echo $facility3; ?>
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
            <?php echo $mymail; ?>
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i><?php echo $mycontact; ?></p>
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