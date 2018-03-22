<?php
session_start();
include 'koneksi.php';

if (isset($_POST['klik'])) {

	$uss = mysqli_real_escape_string($connect,$_POST['user']);
	$pss = mysqli_real_escape_string($connect,$_POST['pass']);
	
	
  $cek= mysqli_query($connect,"SELECT * from test_gan where username ='$uss' and password='$pss'");
  $count = mysqli_num_rows($cek);

  if ($count>0) {

$_SESSION['username']="$uss";
$_SESSION['password']="$pss";

echo $_SESSION['username'];
 echo '<script language="javascript">document.location="halaman.php";</script>';


 }
 else {
  echo "data gk ada gan";
 }
}

 ?>
