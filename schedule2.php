<script type="text/javascript">
   <?php date_default_timezone_set('Asia/Jakarta');?>
    var detik = <?php echo date('s'); ?>;
    var menit = <?php echo date('i'); ?>;
    var jam   = <?php echo date('H'); ?>;
     
    function clock()
    {
        if (detik!=0 && detik%60==0) {
            menit++;
            detik=0;
        }
        second = detik;
         
        if (menit!=0 && menit%60==0) {
            jam++;
            menit=0;
        }
        minute = menit;
         
        if (jam!=0 && jam%24==0) {
            jam=0;
        }
        hour = jam;
         
        if (detik<10){
            second='0'+detik;
        }
        if (menit<10){
            minute='0'+menit;
        }
         
        if (jam<10){
            hour='0'+jam;
        }
        waktu = hour+':'+minute+':'+second;

        if (waktu>'09:56:30') {
            tulisan = waktu+'malam';
        }

        if (waktu<'09:56:30') {
            tulisan = waktu+'siang';
        }
        
         
        document.getElementById("clock").innerHTML = tulisan;
        detik++;
    }
 
    setInterval(clock,1000);
</script>
 
<div style="text-align:center;">
    <h3>WAKTU SAAT INI :</h3>
    <h1 id="clock"></h1>
</div>