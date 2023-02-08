<?php
//array multidimensi
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
        "nama" => "Joko",
        "jurusan" => "RPL",
    ],
    [
        "nis" => 124,
        "nama" => "Sulis",
        "jurusan" => "PBS",
    ],
];
print_r($siswa);
echo "&#128516;";
echo "<hr><br>";

foreach ($siswa as $murid) {
    echo "&#9997; Nis : " . $murid['nis'] . "<br>";
    echo "&#128516; Nama : " . $murid['nama'] . "<br>";
    echo "&#128218; Jurusan : " . $murid['jurusan'] . "<br><hr>";

}
