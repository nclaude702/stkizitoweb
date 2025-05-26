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


  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>upload book or note on st kizito save web site</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="../assets/imgs/bg1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
         

            <form action="code/upload_book.php" method="post" enctype="multipart/form-data" role="form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="tainer" class="form-control" id="name" placeholder="Trainer Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  LEVEL:<SELECT name="level">
                    <option>L3</option>
                    <option>L4</option>
                    <option>L5</option>
                  </SELECT>
                </div>
              </div>
              <div class="form-group mt-3">
                TRADE:<select name="trade">
                  <option>COMPUTER APPLICATION</option>
                  <option>MULTIMEDIA</option>
                  <option>SOFTWARE DEVELOPMENT</option>
                  <option>ACCOUNTING</option>
                  <option>BUSSINESS</option>
                  <option>CARPENTRY</option>
                  <option>MASONORY</option>
                  <option>ROAD CONSTRUCTION</option>
                  <option>LAND SURVEYING</option>
                  <option>DOMESTIC ELECTRICITY</option>
                  <option>INDUSTRIAL ELECTRICITY</option>
                  <option>ELECTRONIC SERVICES</option>
                  
                </select>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="title" id="subject" placeholder="book title" required>
              </div>
              <div class="form-group mt-3">
                <input type="file" class="form-control" name="myfile" id="subject"  required>
              </div>
              
              
              <div class="text-center"><button type="submit" name="book_upload" style="margin-top: 30px; width: 120px; height: 40px; margin-left: -30px">Upload</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

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
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
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