<?php

include_once "config/config.php";
//menampung nilai variable $_POST
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

//memasukkan data ke dalam database
$q="INSERT INTO data_siswa SET
nis='$nis',
nama='$nama',
jk='$jk',
kelas='$kelas',
jurusan='$jurusan'";

$query=mysqli_query($koneksi,$q);

//aksi jika query sukses maupun gagal
if ($query){
//    echo "Data berhasil ditambahkan..!";
//    echo "<meta http-equiv='refresh' content='1.5;
//            url=app_siswa.php'>";
    echo "<script>
    window.alert('Data berhasil ditambah');
    window.location.href='app_siswa.php';
    </script>";
} else {
    echo "Data gagal ditambahkan!" ;
    echo "<meta http-equiv='refresh' content='1.5;
            url=app_siswa.php'>";
}
?>
