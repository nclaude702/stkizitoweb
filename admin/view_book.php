
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
        <h2>All Book Upload on Saint Kizito Save</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        
<center>
<table style="background:#3399CC;border-radius:5px; font-size: 20px;font-family:;margin-top: -10px;">
<tr>
<th class="tds" bgcolor="#ffff" width="50px" height="50px" STYLE="font-family:Script MT;">ID</th>
<th bgcolor="#ffff" width="50px" height="50px" STYLE="font-family:Script MT;">Trade</th>
<th bgcolor="#ffff" width="50px" height="50px" STYLE="font-family:Script MT;">Level</th>
<th bgcolor="#ffff" width="80px" height="50px" STYLE="font-family:Script MT;">Title</th>
<th bgcolor="#ffff" width="80px" height="50px" STYLE="font-family:Script MT;">Book</th>
<th bgcolor="#ffff" width="50px" height="50px" STYLE="font-family:Script MT;">Trainer</th>

<th bgcolor="#ffff" width="220px" height="50px" STYLE="font-family:Script MT;">Date</th>


<th bgcolor="#ffff" width="80px" height="50px" STYLE="font-family:Script MT;">update</th>
<!--<th bgcolor="#996666" width="50px" height="50px">UPDATE</th>-->
</tr>
<?Php
class claude{
  function __construct(){
include("../code/connection.php");
try{
  //$now=date("Y,d,m");

  //include "code/expiration.php";
  $d=date("Y-m-d");
  
  //$a=$con->prepare("SELECT * FROM `output_milk` WHERE `capacity` >0 and expired_date>='$now'");
  $a=$con->prepare("SELECT * FROM `book` order by book_id desc");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $id=$row['book_id'];
  ?>
  <form action="buyed.php" method="post">

<?php 
?>

<tr>
 
  <td class="tds" bgcolor="#FFFFFF"  > <?php echo $row['book_id']; ?></td>
  <td bgcolor="#FFFFFF"height="30px" font-family="Bodoni MT" ><?php echo $row['trade']; ?></td>
  <td bgcolor="#FFFFFF" height="30px"><?php echo $row['level']; ?></td>

<td bgcolor="#FFFFFF" height="30px"><?php echo $row['book_title']; ?></td>
<td bgcolor="#FFFFFF" height="30px"><?php echo $row['book']; ?></td>
<td bgcolor="#FFFFFF" height="30px"><?php echo $row['trainer']; ?><bgcolor="#FFFFFF" height="30px"/td>
<td bgcolor="#FFFFFF" height="30px"><?php echo $row['date']; ?></td>
<td bgcolor="#Fgfytf" height="30px">
<a href="book_update.php?id=<?php echo $id; ?>">update</a>
</td></tr>


<?php
}
  if($a==true){}
    date("Y-d-m");
}catch(PDOException $e){echo"connetion error";}
  }
}
$obj=new claude();
?>
</table>
</center>
      </div>
    </section>

  </main>
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
  <script src="../assets/js/main.js"></script>

</body>

</html>
<?php } 
?>