<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
   <script type="text/javascript">
 function cetak() {
 	var nama= document.getElementById("kategori").pilihan.value;

 	if (nama=="lokasi")
    {
        document.getElementById("muncul").innerHTML="Lokasi Gan";
    }
  else if (nama=="waktu")
    {
        document.getElementById("muncul").innerHTML="Waktu gan";
    }
 }
 </script>
</head>
<body>
 
<form id="kategori" >
<select id="pilihan" name="pilihan" onchange="cetak()">
 	<option value="lokasi" >lokasi</option>
 	<option value="waktu">Waktu</option>
 </select>
</form>

<form>
	<input type="" name="" placeholder='<script></script>'>
</form>
	

 
</body>
</html>
