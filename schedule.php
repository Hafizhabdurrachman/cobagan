

 <?php
date_default_timezone_set('Asia/Jakarta');
echo "Tanggal dan Waktu sekarang adalah " . date("h:i:s") . "<br>";

if (date("h:i:sa")>"09:38:30") {
	echo "malam";
}
else {
	echo "siang";
}
?> 

<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        function clock() {
          var now = new Date();
          var secs = ('0' + now.getSeconds()).slice(-2);
          var mins = ('0' + now.getMinutes()).slice(-2);
          var hr = now.getHours();
          var Time = hr + ":" + mins + ":" + secs;
          if (Time>'10:01:15') {
            tulisan = Time+'malam';
       		 }

       	 if (Time<'10:01:15') {
            tulisan = Time+'siang';
       		 }
	          document.getElementById("watch").innerHTML = tulisan;
	          requestAnimationFrame(clock);
	      	 }

        requestAnimationFrame(clock);
    });
</script>

<style type="text/css">
</style>
</head>
<body>
<br>
	  <div id="watch"></div>

</body>
</html>