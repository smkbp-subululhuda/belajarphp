<?php

//percabangan if
$nama = "Ahmad";
if ($nama == "Ahmad"){
    echo "Kamu adalah laki-laki";
}

echo "<hr>";

//percabangan if-else
$angka = 15;
if ($angka%2==0){
    echo "$angka adalah bilangan genap";
} else {
    echo "$angka adalah bilangan ganjil";
}
echo "<hr>";

//penerapan if-elseif-else
$nilai=95;
if ($nilai<=60){
    echo "Predikat C";
} elseif ($nilai<=80){
    echo "Predikat B";
} elseif ($nilai<=100){
    echo "Predikat A";
} else {
    echo "Maaf, predikat tidak diketahui";
}