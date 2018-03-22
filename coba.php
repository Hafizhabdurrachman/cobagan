<?php

$subject="hjdf0432.png.png"; //bebas, contoh dikalian 'akjdxf123.jpg.jpg' sama 'hjdf432.png.png

$angka= preg_replace("/[^0-9]/", "", $subject); //ini akanya aja yg diambil gan

$extensi=substr($subject,-4); //ini ngambil 4 string dari belakang, kebetulan extensinya ada di 4 string dibelakang, bisa diotakatik lagi rumusnya

 echo $angka  //ini gabunging yg angka sama extensinya, nanti jadinya 123.jpg atau 432.png

?>