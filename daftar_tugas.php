<?php


if (!isset($tugas)){
    $tugas=[
    "Ngaji",
    "Belajar"
];
}
if (isset($_POST['tambah'])){
//    var_dump($_POST);
    $tugas_baru = $_POST['data'];
//    array_push($tugas,);
    array_push($tugas,$tugas_baru);
}
//print_r($tugas);
echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Tugas</title>
</head>
<body>
<h1>Tugas-ku, tugas-mu</h1>
<ol>
    <?php
    foreach ($tugas as $daftar_tugas) {
        echo "<li>$daftar_tugas</li>";
    }
    var_dump($tugas);
    ?>
</ol>
<form action="" method="POST">
    <input type="text" name="data">
    <input type="submit" name="tambah">
</form>
<hr>
</body>
</html>
