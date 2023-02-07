<?php
include "config/config.php";

//mengambil data siswa dari database
$query = mysqli_query($koneksi,
    "SELECT * FROM data_siswa WHERE id_siswa='$_GET[id]'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
</head>
<body>
<h1>Edit Data siswa</h1>
<hr>
<form action="siswa_update.php" method="post">
    <ul>
        <li>
            <input type="hidden" name="id_siswa" value="<?= $data['id_siswa'] ?>">
            <label for="nis">NIS: </label>
            <input type="text" name="nis" id="nis" value="<?= $data['nis'] ?>" required>
        </li><br>
        <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" value="<?= $data['nama'] ?>" required>
        </li><br>
        <li>
            <label for="jk">Jenis Kelamin : </label>
            <input type="radio" name="jk" id="jk" value="L" required
            <?php
            //fungsi untuk mengaktifkan opsi laki-laki
            if($data['jk']=="L"){echo "checked";}
            ?>
            > Laki-laki
            <input type="radio" name="jk" id="jk" value="P"
            <?php
            ////fungsi untuk mengaktifkan opsi perempuan
            if ($data['jk']=="P"){echo "checked";}
            ?>
            > Perempuan
        </li><br>
        <li>
            <label for="kelas">Kelas : </label>
            <select name="kelas" id="kelas" required>
                <option value=""> - Pilih Kelas - </option>
                <option value="X"
                    <?php if ($data['kelas']=="X"){echo "selected";}?>
                > X </option>
                <option value="XI"
                    <?php if ($data['kelas']=="XI"){echo "selected";}?>
                > XI </option>
                <option value="XII"
                    <?php if ($data['kelas']=="XII"){echo "selected";}?>
                > XII </option>
            </select>
        </li><br>
        <li>
            <label for="jurusan">Jurusan : </label>
            <select name="jurusan" id="jurusan" required>
                <option value=""> - Pilih Jurusan - </option>
                <option value="RPL"
                    <?php if ($data['jurusan']=="RPL"){echo "selected";}?>
                > Rekayasa Perangkat Lunak </option>
                <option value="PBS"
                    <?php if ($data['jurusan']=="PBS"){echo "selected";}?>
                > Perbankan Syariah </option>
            </select>
        </li><br>
    </ul>
    <!--Tombol simpan-->
    <button type="submit"> Simpan </button>
    <!--Tombol reset-->
    <button type="reset"> Reset </button>
    <!--Tombol batal-->
    <a href="app_siswa.php"><button type="button"> Batal </button></a>

</form>
</body>
</html>
