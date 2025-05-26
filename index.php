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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Saint Kizito TVET School,<br>located in</h1>
      <h2>GISAGARA District, SAVE Sector</h2>

      <a href="history.php" class="btn-get-started">Se more</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
        
    <section id="events" class="events">
      <?php
                            
try{
  include("code/connection.php");
  $a=$con->prepare("SELECT distinct title,content,image FROM `news` order by id desc");
  $a->execute();
  ?>
     
      <div class="container" data-aos="fade-up">
       <?php while($row=$a->fetch(PDO::FETCH_ASSOC)){ ?>
        <div class="row">
          <div class="col-md-12 d-flex align-items-stretch">
            <div class="card">
             
             
              <div class="card-img">
                <img src="<?php echo $row['image'];?>" width="1500" height="800" alt="...">
              </div>
              <div class="card-body">
                <h3 class="card-title">
                     <?php echo $row['title']; ?>
                  </h3>
                    <p class="card-text">
                    <?php echo $row['content']; ?></p>
              </h3>
           </div>
          </div>
          
        </div>
      </div>
      <?php
    }?> 
      

  <?php
     }catch(PDOException $e){}
   ?>
    </section><!-- End Events Section -->

    

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-14 d-flex align-items-stretch">
            <div class="content">
              <h3><center>Saint kizito Save Tvet School History </center></h3>
              <p>
Before 1962, Saint Kizito Save TVET School was an orphanage for children mulattoes of Save, running by white sisters. From 1962 to 1972, the institution became a junior seminary for catholic fathers to be. In 1972, the former bishop of Butare, his Lordship Jean Baptiste GAHAMANYI decided to shift the seminary to Butare (karubanda).  At the same period, the bishop invited Van Dale Brothers to open the center for technicians. According to the official letter wrote by the Ministry of education on 22nd of December, 1972, the center opened and received the first students on 2nd of January, 1973 at Save. 

              </p>
              <div class="text-center">
                <a href="history.php" class="more-btn">Read  More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    

    <!-- ======= Popular Courses Section ======= -->
    
    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>school manager in charge of studies</h4>
                <span>laeader</span>
                <p>
                  with a mandate of development and coordinating all TVET schools, now Saint Kizito Save TVET School like other TVET institutions is working under GISAGARA District and respectively Rwanda TVET Board (RTB)
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>school manager in charge of displine</h4>
                <span>Marketing</span>
                <p>
                  with a mandate of development and coordinating all TVET schools, now Saint Kizito Save TVET School like other TVET institutions is working under GISAGARA District and respectively Rwanda TVET Board (RTB)
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>school manager</h4>
                <span>Content</span>
                <p>
                  with a mandate of development and coordinating all TVET schools, now Saint Kizito Save TVET School like other TVET institutions is working under GISAGARA District and respectively Rwanda TVET Board (RTB)
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Trainers Section -->

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
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>