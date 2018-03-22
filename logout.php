<?php 
if (isset($_POST['hapus'])) {

	session_destroy();
	echo '<script language="javascript">document.location="index.php";</script>';
	
}


 ?>