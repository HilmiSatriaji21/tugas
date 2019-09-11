<?php

echo "<br><hr>". date("d/m/Y H:i:s<br>");
if (isset($_POST['input'])) {
    $nama = $_POST['nama'];
    $nip = $_POST['NIP'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];
    $m = 100000;
    $bm = 50000;
    $jabatan = $_POST['jabatan'];
    $hrd = 5000000;
    $mnr = 4500000;
    $stf = 3000000;
    $kry = 2500000;
    $pot  = $_POST['potongan'];
    $bpjs      = 250000;
    $koperasi  = 150000;
    $jamsostek = 150000;
    $gol = $_POST['golongan'];
    $a1 = 250000;
    $a2 = 150000;
    $a3 = 150000;

    echo "<hr><br>Nama          : <b>$nama</b><br>";
    echo "<hr>NIP           : <b>$nip </b><br>";
    echo "<hr>Jenis Kelamin : <b>$jk</b><br>";
    echo "<hr>Alamat        : <b>$alamat</b><br>";
    echo "<hr>Status        : <b>$status</b><br>";
    if ($status == menikah) {
        echo "Mendapatkan Tunjangan : $m <br>";
    }
    elseif ($status == belum_menikah) {
        echo "Mendapatkan Tunjangan : $bm <br>";
    }
    echo "Jabatan       : <b>$jabatan</b><br>";
    if ($jabatan == HRD) {
        echo "Mendapatkan Tunjangan : $hrd <br>";
    }
    elseif ($jabatan == Manager) {
        echo "Mendapatkan Tunjangan : $mnr <br>";
    }
    elseif ($jabatan == Staff) {
        echo "Mendapatkan Tunjangan : $stf <br>";
    }
    elseif ($jabatan == Karyawan) {
        echo "Mendapatkan Tunjangan : $kry <br>";
    }
    echo "Potongan      : <b>$pot</b>";
    if ("bpjs") {
        echo "Tunjangan Dipotong : $bpjs <br>";
    }
    elseif ("koperasi") {
        echo "Tunjangan Dipotong : $koperasi";
    }
    elseif ("jamsostek") {
        echo "Tunjangan Dipotong : $jamsostek";
    }
    echo "Golongan      : <b>$gol</b><br>";
    if ($gol == A1) {
        echo "Mendapatkan Tunjangan : $a1 <br>";
    }
    elseif ($gol == A2) {
        echo "Mendapatkan Tunjangan : $a2 <br>";
    }
    elseif ($gol == A3) {
        echo "Mendapatkan Tunjangan : $a3 <br>";
    }
}