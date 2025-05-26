<?php
try{
include('connection.php');
$name=$_POST['name'];
$mail=$_POST['email'];
$suject=$_POST['suject'];
$message=$_POST['message'];
$send="insert into message set name='$name',email='$mail',suject='$suject',message='$message'";
$a=$con->exec($send);
if($a==true){
	echo '<script>alert("Admin loged in well"),window.location.href="../contact.php"</script>';
  }
else{
	echo "<script>window.alert('please message not sent ');window.location='../contact.php'</script>'";}
}catch(PDOException $e){echo "Exception error";}
?>