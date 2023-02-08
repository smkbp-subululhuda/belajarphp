<?php
/*
 * kode Jabatan
 * 1 = Admin
 * 2 = Operator
 * 3 = Manager
 * */

$jabatan = 1;
switch ($jabatan){
    case 1:
        echo "Selamat datang Admin";
        break;
    case 2:
        echo "Selamat datang Operator";
        break;
    case 3:
        echo "Selamat datang Manager";
        break;
    default:
        echo "Maaf, anda tidak memiliki akses";
        break;
}
