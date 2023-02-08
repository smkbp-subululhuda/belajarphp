<?php
if (isset($_POST['tambah'])){
//    var_dump($_POST);
    $tugas_baru = $_POST['data'];
//    array_push($tugas,);
    array_push($tugas,$tugas_baru);
    echo "<meta http-equiv='refresh' content='0; url=daftar_tugas.php'>";
}
?>