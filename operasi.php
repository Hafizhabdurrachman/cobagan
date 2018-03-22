<?php
include('koneksi.php');

/*Contoh Fungsi Benar*/
/*$username = mysqli_real_escape_string($connect,$_POST['username']);
$password = mysqli_real_escape_string($connect,$_POST['password']);*/

/*Contoh Fungsi Salah*/
$username = $_POST['username'];
$password = $_POST['password'];


/* a'='a  */

/*Pengecekan*/
$query = mysqli_query($connect,"SELECT * from user where username = '$username' && password = '$password'");
$row = mysqli_fetch_array($query);
if($row) { 
	echo "<center><h1>username dan password terdaftar</h1> <br><br><br> <h3>username anda adalah</h3> <h1>".$row['username']." </h1><br><br>
	<h3>password anda adalah</h3> <h1>".$row['password']." </h1></center>"; 
}
else { 
	echo '<script language="javascript">alert("username dan password tidak terdaftar"); document.location="cek_sql.php";</script>';
	 }

?>