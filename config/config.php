<?php
//konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db = "app_siswa";

//mencoba koneksi ke database
$koneksi = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()){
    echo "Waduh Koneksi Gagal boss!: " . mysqli_connect_error();
} else {
//    echo "Yeay.., Koneksi berhasil";
}