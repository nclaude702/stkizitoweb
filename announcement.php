<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("head.php"); ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <?php include("menu.php"); ?>
  </header><!-- End Header -->


  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>SAINT KIZITO TVET SCHOOL ANNOUNCEMENT</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Counts Section ======= -->
    
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">




          <div class="swiper-wrapper">


<?php
                            
try{
  include("code/connection.php");
  $a=$con->prepare("SELECT * FROM `announcement` order by id desc");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){ ?>
            
         <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="" class="testimonial-img" alt="">
                  <h3>Title:<?php echo $row['title']; ?></h3>
                  <h4><?php echo $row['announcement']?></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                    
                   <a href="announcement/<?php echo $row['file']; ?>" target="_blank"><h3>Read or download</h3></a>

                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            
  <?php
     }
  
     }catch(PDOException $e){}
   ?>
       
            

            
           

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>