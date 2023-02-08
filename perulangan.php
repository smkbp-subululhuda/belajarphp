<?php

//perulangan
for ($angka=0; $angka <= 10; $angka++){
    echo $angka . "<br>";
}

echo "<br><hr><br>";


//fungsi perkalian
function perkalian($angka){
    for ($i=1; $i <= 10; $i++) {
        echo "$angka x $i = " . $angka * $i;
        echo "<br>";
    }
}

function pembagian($angka){
    for ($i=1; $i <= 10; $i++) {
        echo "$angka : $i = " . $angka / $i;
        echo "<br>";
    }
}

function pertambahan($angka){
    for ($i=1; $i <= 10; $i++) {
        echo "$angka + $i = ";
        echo $angka + $i;
        echo "<br>";
    }
}

function pengurangan($angka){
    for ($i=1; $i <= 10; $i++) {
        echo "$angka - $i = ";
        echo $angka - $i;
        echo "<br>";
    }
}

perkalian(3);
echo "<br><hr><br>";
pembagian(5);
echo "<br><hr><br>";
pertambahan(8);
echo "<br><hr><br>";
pengurangan(4);