<?php 
 session_start();

if (isset($_POST['login'])) 
{
include("connection.php");
$my=$_POST['username'];
$your=$_POST['password'];
$sql="SELECT * FROM admin WHERE username='$my' and password='$your'";
$result=mysqli_query($conn,$sql);

$fetch=mysqli_fetch_array($result);
$idd=$fetch['id'];
$name=$fetch['name'];
$phone=$fetch['phone'];
$username=$fetch['username'];
$password=$fetch['password'];
// $type=$fetch['type'];
$idd=$fetch['id'];

$count=mysqli_num_rows($result);
    if($count==1)
     {
	    $_SESSION["id"]=$idd;$_SESSION["name"]=$name;$_SESSION["phone"]=$phone;$_SESSION["username"]=$username;$_SESSION["password"]=$password;
	
         //header("location:../admin/index.php");
         echo '<script>alert("Admin loged in well"),window.location.href="../admin/index.php"</script>';
 
   }else{
   	echo '<script>alert("Admin login Fail"),window.location.href="../login.php"</script>';

}

}else{
	echo"<script>window.alert('Login name Error!')</script>";
	header("location:../login.php");

	}
?>