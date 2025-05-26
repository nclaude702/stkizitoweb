<?php 
 session_start();
/*if (isset($_SESSION['t_login'])) 
{
	header("location:t_page.php");
}
*/
if (isset($_POST['st_login'])) 
{
 include("con2.php");
 $username=$_POST['username'];
$password=$_POST['password'];

 if($username=="trainee" and $password=='ets123'){
 	$_SESSION["username"]=$username;$_SESSION["pass"]=$password;
	     
         //header("location:../student/index.php");
          echo '<script>alert("loged in well"),window.location.href="../trainee/index.php"</script>';	
    }else{
	 echo '<script>alert("Trainer loged in Fail"),window.location.href="../student_login.php"</script>';

	}
}
?>