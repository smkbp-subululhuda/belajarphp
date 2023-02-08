<!--
Kode ini tidak berfungsi
-->
<?php
$hari = date("l");
var_dump($hari);
switch ($hari){
    case "Sunday":
        echo "Ahad";
        break;
    case "Monday":
        echo "Senin";
        break;
    case "Tuesday":
        echo "Selasa";
        break;
    case "Wednesday":
        echo "Rabu";
        break;
    case "Thrusday":
        echo "Kamis";
        break;
    case "Friday":
        echo "Juma't";
        break;
    case "Saturday":
        echo "Sabtu";
        break;
}
