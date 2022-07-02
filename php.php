<!DOCTYPE html>
<html>
<head>
	
	<title>PRAKTIKUM 1 : DASAR PHP</title>
</head>
<body>
	
	<?php
	echo "<h1>INSTITUT BISNIS DAN TEKNOLOGI INDONESIA</h1>";
	echo "program php pertamaku <br>";

	//contoh penggunaan variabel
	$nama = "tarpi ardi";
	$umur = 19;
	echo "<br>Selamat belajar PHP ". $nama .",umur anda $umur tahun";
	echo "<br>Selamat belajar PHP ". $nama .",umur anda ".$umur." tahun";

	//contoh operator aritmatika
	$a = 2;
	$b = 3;
	$jumlah=$a+$b;
	$kurang=$a-$b;
	$kali=$a*$b;
	$bagi=$a/$b;
	echo "<br>hasil penjumlahan = " .
		$jumlah;
	echo "<br>hasil pengurangan = " .
		$kurang;
	echo "<br>hasil perkalian = " .
		$kali;
	echo "<br>hasil pembagian = " .
		$bagi;
?>
</body>
</html>
