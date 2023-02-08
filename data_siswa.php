<?php
$siswa = [
    [
        "nis" => 123,
        "nama" => "Joko",
        "jurusan" => "RPL",
    ],
    [
        "nis" => 124,
        "nama" => "Sulis",
        "jurusan" => "PBS",
    ],
    [
        "nis" => 123,
        "nama" => "Sudirman",
        "jurusan" => "RPL",
    ],
    [
        "nis" => 124,
        "nama" => "Yahya",
        "jurusan" => "PBS",
    ],
    [
        "nis" => 123,
        "nama" => "Rere",
        "jurusan" => "RPL",
    ],
    [
        "nis" => 124,
        "nama" => "Armando",
        "jurusan" => "PBS",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
</head>
<body>
<h1>Data Siswa</h1>
<table border="1">
    <tr>
        <td>No. Induk</td>
        <td>Nama</td>
        <td>Jurusan</td>
    </tr>

    <?php
    foreach ($siswa as $murid) {
       echo "<tr>";
        echo "<td>".$murid['nis']."</td>";
       echo "<td>".$murid['nama']."</td>";
        echo "<td>".$murid['jurusan']."</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
