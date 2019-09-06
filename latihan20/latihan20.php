<?php
// variabel scope / linkup variabel

$angka = 20;
// echo $angka;

function tampilAngka() {
    global $angka;
    echo $angka;
}

tampilAngka();
echo "<br>";
echo $angka;

?>