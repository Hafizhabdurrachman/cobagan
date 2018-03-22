<?php

$subject="09.12 09.34"; //inputan bebas angkanya

/*mulai ngitungnya*/

$angka= preg_replace("/[^0-9]/", "", $subject); //ini fungsi untuk mengambil angkanya saja
$jumlah=strlen($angka);

echo "<br>ini lhoo inputannya $subject (contoh isi dari satu sel)";

echo "<br>inputan tadi akan aku ambil angkanya aja, berarti kan antara ada 4 angka atau 8 ya?";

echo "<br>nah klo contoh diatas berarti kan ada $jumlah angka yang isinya =  $angka";

echo "<br><br><br>";

if ($jumlah==8) {
$kondisi=substr($angka,0,1);

	if ($kondisi==0) {

		$jam_masuk=substr($angka,1,3);
		$jam_keluar=substr($angka,-4);
		$selisih = $jam_keluar-$jam_masuk;

		switch (TRUE) {
			case ($jam_masuk<900):
				$nilai=0.385;
				echo $nilai;
				break;

			case ($jam_masuk==900):
				$nilai=0.308;
				echo $nilai;
				break;

			case ($jam_masuk>=910 && $jam_masuk<=930):
				$nilai=-0.25;
				echo $nilai;
				break;

			case ($jam_masuk>=931 && $jam_masuk<=1059):
				$nilai=-0.5;
				echo $nilai;
				break;

			case ($jam_masuk>1059):
				$nilai=-0.6;
				echo $nilai;
				break;

			default:
				echo "Jam tidak ditemukan";
				break;
		}
		
	}

	else {
		$jam_masuk=substr($angka,0,4);
		$jam_keluar=substr($angka,-4);
		$selisih = $jam_keluar-$jam_masuk;


		switch (TRUE) {
			case ($jam_masuk<900):
				$nilai=0.385;
				echo $nilai;
				break;

			case ($jam_masuk==900):
				$nilai=0.308;
				echo $nilai;
				break;

			case ($jam_masuk>=910 && $jam_masuk<=930):
				$nilai=-0.25;
				echo $nilai;
				break;

			case ($jam_masuk>=931 && $jam_masuk<=1059):
				$nilai=-0.5;
				echo $nilai;
				break;

			case ($jam_masuk>1059):
				$nilai=-0.6;
				echo $nilai;
				break;

			default:
				echo "Jam tidak ditemukan";
				break;
		}

	}

}


else {

	$jam_masuk=substr($angka,4);

switch (TRUE) {
			case ($jam_masuk<900):
				$nilai=0.385;
				echo $nilai;
				break;

			case ($jam_masuk==900):
				$nilai=0.308;
				echo $nilai;
				break;

			case ($jam_masuk>=910 && $jam_masuk<=930):
				$nilai=-0.25;
				echo $nilai;
				break;

			case ($jam_masuk>=931 && $jam_masuk<=1059):
				$nilai=-0.5;
				echo $nilai;
				break;

			case ($jam_masuk>1059):
				$nilai=-0.6;
				echo $nilai;
				break;

			default:
				echo "Jam tidak ditemukan";
				break;
		}

}

?>