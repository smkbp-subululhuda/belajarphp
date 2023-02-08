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
            <label for="nis">Nis: </label>
            <input type="text" name="nis" id="nis">
        </li><br>
        <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama">
        </li><br>
        <li>
            <label for="jk">Jenis Kelamin : </label>
            <select name="jk" id="jk">
                <option value=""> - Pilih Jenis Kelamin - </option>
                <option value="L"> Laki-laki </option>
                <option value="P"> Perempuan </option>
            </select>
        </li><br>
        <li>
            <label for="kelas">Kelas : </label>
            <select name="kelas" id="kelas">
                <option value=""> - Pilih Kelas - </option>
                <option value="X"> X </option>
                <option value="XI"> XI </option>
                <option value="XII"> XII </option>
            </select>
        </li><br>
        <li>
            <label for="jurusan">Jurusan : </label>
            <select name="jurusan" id="jurusan">
                <option value=""> - Pilih Jurusan - </option>
                <option value="RPL"> Rekayasa Peangkat Lunak </option>
                <option value="PBS"> Perbankan Syariah </option>
            </select>
        </li><br>
    </ul>
<button type="submit"> Simpan </button>
</form>
</body>
</html>