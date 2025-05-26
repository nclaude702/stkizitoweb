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
        <h2>SOFTWARE DEVELOPMENT</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/imgs/bg1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>SAINT KIZITO SAVE TVET SCHOOL IN SOFTWARE DEVELOPMENT</h3>
            <p class="font-italic"><font size="5">
          
This qualification provides the skills, 
knowledge and attitudes for a learner to 
be competent in tasks and activities that 
require the application of practical skills in 
a defined context. Work would be 
undertaken in various Software 
development sector/industries where 
software development including website 
development, web-based applications 
maintenance, website deployment,Develop a database, Setup a database 
server, deploy a web application, develop a 
web application are carried out. 
Learners may work with some autonomy 
or in a team but usually with minimum 
supervision. 
At the end of this qualification, qualified 
learners will be able to:
Implement S.H.E. policies and 
procedures


</font> 

              </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>L4 SOFTWARE DEVELOPMENT DOCUMENT</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">




          <div class="swiper-wrapper">


<?php
                            
try{
  include("code/connection.php");
  $a=$con->prepare("SELECT * FROM `book` WHERE level='L4' and trade='SOFTWARE DEVELOPMENT'");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){ ?>
            
         <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                   <img src="" class="testimonial-img" alt="">
                  <h3>Trainer:<?php echo $row['trainer']; ?></h3>
                  <h4></h4>
                  <p>
                   Module Name:<?php echo $row['book_title']."<br>". $row['book']."<br>". $row['level']."  ". $row['trade']; ?>"
                     <br>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                   <a href="uploads/<?php echo $row['book']; ?>" target="_blank">download or Read</a>

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

      <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>L5 SOFTWARE DEVELOPMENT DOCUMENT</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">




          <div class="swiper-wrapper">


<?php
                            
try{
  include("code/connection.php");
  $a=$con->prepare("SELECT * FROM `book` WHERE level='L5' and trade='SOFTWARE DEVELOPMENT'");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){ ?>
            
         <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                   <img src="" class="testimonial-img" alt="">
                  <h3>Trainer:<?php echo $row['trainer']; ?></h3>
                  <h4></h4>
                  <p>
                   Module Name:<?php echo $row['book_title']."<br>". $row['book']."<br>". $row['level']."  ". $row['trade']; ?>"
                     <br>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                   <a href="uploads/<?php echo $row['book']; ?>" target="_blank">download or Read</a>

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
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>