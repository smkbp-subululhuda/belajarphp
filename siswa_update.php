<?php
include_once "config/config.php";

//menampung nilai variable $_POST
$id_siswa = $_POST['id_siswa'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

//memasukkan data ke dalam database
$q="UPDATE data_siswa SET
nis='$nis',
nama='$nama',
jk='$jk',
kelas='$kelas',
jurusan='$jurusan'
WHERE id_siswa='$id_siswa'
      ";
$query=mysqli_query($koneksi,$q);

if ($query){
// mod : menambah alert jika query berhasil
    echo "<script>
    window.alert('Data berhasil diperbarui');
    window.location.href='app_siswa.php';
    </script>";
} else {
// mod : menambah alert jika query gagal
    echo "<script>
    window.alert('Data gagal diperbarui');
    window.location.href='app_siswa.php';
    </script>";
}
?>