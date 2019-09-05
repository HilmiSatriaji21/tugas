<?php
$array = array('Judul <br>','Penulis <br>');
$aso = [
    [
        'Barang' => ' : Buku Tulis',
        'Harga' => ' : '4000',
        'Berat' => ' : '100 Gram',
    ],
    ];
    echo '<hr>';
    foreach ($aso as $value) {
    echo "<h1>" .$value["Buku Tulis"] . "<br>";
    echo "<h1>" .$value["4000"] . "<br>";
    echo "<h1>" .$value["100 Gram"] . "<br>";
}