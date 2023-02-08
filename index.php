<?php
$absen  = 1;
$nama   = "joko";
$hobi   = ["mancing","ngaji"];

// melihat variable $absen
var_dump($absen);
echo "<br>";

// melihat variable $nama
var_dump($nama);
echo "<br>";

// melihat variable $hobi
var_dump($hobi);
echo "<br>";
echo "<hr>";
echo "<br>";

// menampilkan variable $absen
echo "No. Absen : " . $absen . "<br>";

// menampilkan variable $nama
echo "Nama : " . ucwords($nama) . "<br>";

// menampilkan var iable $hobi
echo "Hobi : " . ucwords($hobi[0] .", ". $hobi[1]) . "<br>";

echo "<hr><br>";

$nama_lengkap = "Ahmad Arbain";
//echo $nama_lengkap;
echo substr($nama_lengkap,0,5);

?>