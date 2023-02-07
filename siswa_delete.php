<?php
include_once "config/config.php";

//menghapus data sesuai id_siswa yang dipilih
$q = "DELETE FROM data_siswa WHERE id_siswa='$_GET[id]'";
$query = mysqli_query($koneksi,$q);

if ($query){
// mod : menambah alert jika query berhasil
    echo "<script>
    window.alert('Data berhasil dihapus');
    window.location.href='app_siswa.php';
    </script>";
} else {
// mod : menambah alert jika query gagal
    echo "<script>
    window.alert('Data gagal dihapus');
    window.location.href='app_siswa.php';
    </script>";
}
?>