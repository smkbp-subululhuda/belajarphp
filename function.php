<?php
//fungsi bawaan
//menampilkan jumlah detik yang berlalu
//sejak 1 januari 1970
echo time();

echo "<br>";
echo date("j F Y ") . "<br>";
echo date("j-F-Y") . "<br>";
echo date("j/F/Y") . "<br>";

date_default_timezone_set("Asia/Jakarta");
echo "<br>";
echo date_default_timezone_get();
echo "<br>";
echo "Sekarang pukul ".date("H:i:s") . "<br>";
echo "<br>";

function salam_pagi($nama){
    echo "Selamat pagi $nama";
}

function salam_siang($nama){
    echo "Selamat siang $nama";
}

salam_pagi("Roro");
echo "<br>";
salam_siang("Joko");

echo "<br><hr><br>";

function panggil($nama){
    echo "Hai ". substr($nama,0,6) . ",";
    echo "<br>";
    echo "Nama lengkap kamu $nama ya...?";

}

panggil("Akmal Sukri");
echo "<br>";
panggil("Sevira Damayanti");

?>