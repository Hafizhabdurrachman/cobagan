<?php include "koneksi.php";?>

<html>
<head>
    <title>Cek Login SQL Injection</title>
<style type="text/css">
   

	table {
	    padding:20px 40px;
	    border:1px solid #ccc;
	    border-radius: 10px;
	    background-color: #ccc;	
	}

	input[type="text"], input[type="password"]{
	    border:1px solid rgba(51,51,51,.5);
	    border-radius:10px;
	    padding: 5px;
	    font-size: 15px;
	    line-height: 20px;	    
	    text-align:center;
	}

	input[type="submit"] {
		margin-top: 15px;
	    font-size: 18px;
	    padding:5px 10px;
	    border:1px solid rgba(51,51,51,.5);
	    border-radius:10px;
	    cursor:pointer;
	}
	input[type="submit"]:hover {
	    background:#f4f4f4;
	}
	h2 {
		text-align: center;
		padding-top: 100px;
		font-family: unset;
		font-size: 35px;
	}
	table tr td {
	    margin:10px 5px;
	    padding:5px 0;
	    line-height: 30px;
	}

	</style>
</head>

<body>
 	<!-- Form cek login -->
    <form action="operasi.php" method="post">
    <center><h2>Cek Login SQL Injection</h2></center>
    <table align="center">
        <tr>
            <td><strong>Username</strong></td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="Username" required /></td>
        </tr>
        <tr>
            <td><strong>Password</strong></td>
            <td>:</td>
            <td><input type="password" name="password" placeholder="Password" required /></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="login" value="Login" /></td>
        </tr>
    </table>
    </form>
</body>
</html>



