<?php

// buat 2 fungsi
// luas segitiga -> Alas, Tinggi, Luas (1/2 * Alas * Tinggi)
// luas & keliling linkaran -> Jari, Luas, Keliling

function segitiga ($Alas, $Tinggi, $Luas){

    echo "Alas : $Alas : $alas<br>";
    echo "Tinggi : $Tinggi : $Tinggi<br>";
    $luas = ($Alas*$Tinggi) / 2;
    echo "Luas Segitiga = $Luas <hr>";
    echo "<hr>";
}
segitiga(5,10);

function lingkaran($jari){
    echo "<big>Jari-Jari Lingkaran : $jari<br>";
    $luas = 3.14 * ($jari * $jari);
    $kel = 2 * (3.14 * $jari);
    echo "Luas Lingkaran : $luas<br>";
    echo "Keliling Lingkaran : $kel<br>";
}
$a = 10;
lingkaran();
echo "<hr>";
?>