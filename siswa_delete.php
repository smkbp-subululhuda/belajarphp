<?php
include_once "config/config.php";

$query = mysqli_query($koneksi,
"DELETE FROM data_siswa
       WHERE id_siswa='$_GET[id]'");

if ($query){
//    echo "Data berhasil dihapus..!";
//    echo "<meta http-equiv='refresh' content='1.5;
//            url=app_siswa.php'>";
    echo "<script>
    window.alert('Data berhasil dihapus');
    window.location.href='app_siswa.php';
    </script>";
} else {
    echo "Data gagal hapus!" ;
    echo "<meta http-equiv='refresh' content='1.5;
            url=app_siswa.php'>";
}

?>