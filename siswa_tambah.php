<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Siswa</title>
</head>
<body>
<h1>Tambah Data siswa</h1>
<hr>
<form action="siswa_insert.php" method="post">
    <ul>
        <li>
            <label for="nis">NIS: </label>
            <input type="text" name="nis" id="nis" required>
        </li><br>
        <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" required>
        </li><br>
        <li>
            <label for="jk">Jenis Kelamin : </label>
            <input type="radio" name="jk" id="jk" value="L" required> Laki-laki
            <input type="radio" name="jk" id="jk" value="P"> Perempuan
        </li><br>
        <li>
            <label for="kelas">Kelas : </label>
            <select name="kelas" id="kelas" required>
                <option value=""> - Pilih Kelas - </option>
                <option value="X"> X </option>
                <option value="XI"> XI </option>
                <option value="XII"> XII </option>
            </select>
        </li><br>
        <li>
            <label for="jurusan">Jurusan : </label>
            <select name="jurusan" id="jurusan" required>
                <option value=""> - Pilih Jurusan - </option>
                <option value="RPL"> Rekayasa Peangkat Lunak </option>
                <option value="PBS"> Perbankan Syariah </option>
            </select>
        </li><br>
    </ul>
<!--Tombol simpan-->
<button type="submit"> Simpan </button>
<!--Tombol reset-->
<button type="reset"> Reset </button>
<!--Tombol batal-->
<a href="app_siswa.php">
    <button type="button"> Batal </button>
</a>

</form>
</body>
</html>