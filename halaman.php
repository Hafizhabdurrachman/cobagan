<?php 
session_start();
include 'koneksi.php';

echo $_SESSION['username']; 

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="logout.php">
		<input type="submit" name="hapus" value="quit">
	</form>

</body>
</html>
