<?php
if (isset($_POST['sbm'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nomor = 0;
    $nomor2 = 0;
    foreach ($nama as $data => $x) {
        echo "Nama : " . $nama[$data] .
             " - Kelas : " . $kelas[$data] . "<hr>";
    }
}
?>