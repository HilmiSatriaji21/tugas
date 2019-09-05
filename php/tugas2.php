<?php
$array = array('Judul <br>','Penulis <br>');
$aso = [
    [
        'Judul' => ' : Belajar PHP & MySQL untuk pemula',
        'Penulis' => ' : Admin SMK',
    ],
    ];
    echo '<hr>';
    foreach ($aso as $value) {
    echo "<h1>" .$value["Judul"] . "<br>";
    echo "<h1>" .$value["Penulis"] . "<br>";
}
$array = array('saya <br>', 10);
$aso = [
    [
        'Judul' => ' : Tutorial PHP dari Nol hingga Mahir',
        'Penulis' => ' : Admin SMK',
    ],
    ];
    echo '<hr>';
    foreach ($aso as $value) {
    echo "<h1>" .$value["Judul"] . "<br>";
    echo "<h1>" .$value["Penulis"] . "<br>";
}
$array = array('saya <br>', 10);
$aso = [
    [
        'Judul' => ' : Membuat Aplikasi Web Dengan PHP',
        'Penulis' => ' : Admin SMK',
    ],
    ];
    echo '<hr>';
    foreach ($aso as $value) {
    echo "<h1>" .$value["Judul"] . "<br>";
    echo "<h1>" .$value["Penulis"] . "<br>";
}
echo '<hr>';