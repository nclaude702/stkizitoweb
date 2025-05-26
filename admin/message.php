
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
        <h2>Message</h2>
        <p> </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>stkizitosave@yahoo.fr</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+25 078 8740 127</p>
              </div>

            </div>

          </div>
 

          <div class="col-lg-8 mt-5 mt-lg-0">
         <table style="margin-top: 0px; font-family: Lucida Calligraphy;font-size: 20px; background:#3399CC;border-radius:5px; margin-top: -30px;" border="1">

 <tr>
   

<th bgcolor="#ffff" width="150px" height="50px" STYLE="font-family:Script MT;">Sender</th>
  <th bgcolor="#ffff" width="300px" STYLE="font-family:Script MT;">message</th>

<th bgcolor="#ffff"  STYLE="font-family:Script MT;">Status</th>



</tr>


<?Php
try{
  include("../code/connection.php");
  
  $a=$con->prepare("SELECT * FROM `message` order by id desc limit 10");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){
      $id=$row['id'];
  ?>
  <tr>
   
<td bgcolor="#FFFFFF" width="100px"STYLE="font-family:Script MT;"><?php echo $row['name'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['message'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><a href="view_message.php?id=<?php echo $row['id']; ?>" >s</td>




 </tr>

     <?php
     } 
     }catch(PDOException $e){}
   ?>
</table>
              



  
      
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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