<?php
include "config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
</head>
<body>
<h1>Data Siswa</h1>
<a href="siswa_tambah.php">
    <button>Tambah</button>
</a>
<br><br>
<table border="1">
    <tr>
        <td>No</td>
        <td>No. Induk</td>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Kelas</td>
        <td>Jurusan</td>
        <td>Aksi</td>
    </tr>
    <?php
    $tampil = "SElECT * FROM data_siswa";
    $query = mysqli_query($koneksi,$tampil);
    $no=0;
    while ($data = mysqli_fetch_array($query)) {
//        var_dump($data);
        $no++;
?>
<tr>
    <td><?= $no; ?></td>
    <td><?= $data['nis']; ?></td>
    <td><?= $data['nama']; ?></td>
    <td><?= $data['jk']; ?></td>
    <td><?= $data['kelas']; ?></td>
    <td><?= $data['jurusan']; ?></td>
    <td>
        <a href="siswa_edit.php&id=<?= $data['id_siswa']; ?>">
            Edit</a> |
        <a href="siswa_delete.php&id=<?= $data['id_siswa']; ?>">
            Hapus</a>
    </td>
</tr>
<?php
    }
    ?>
</table>
</body>
</html>
