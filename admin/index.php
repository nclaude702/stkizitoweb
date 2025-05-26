
<?php
session_start();
   $_SESSION["id"];
   $_SESSION["name"];
   $_SESSION["phone"];
   $_SESSION["username"];
   $_SESSION["password"];

if (!isset($_SESSION['username']))
     {
        header('location:../login.php');
     }
else { ?>
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
 <section id="hero" class="d-flex justify-content-center align-items-center" style="margin-top: 30px;">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Saint Kizito TVET School,<br>located in</h1>
      <h2>GISAGARA District, SAVE Sector</h2>
      <a href="courses.html" class="btn-get-started">Se more</a>
    </div>
  </section>
 

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>ST KIZITO</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by IT claude</a>
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
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
<?php } 
//session_destroy();
?>