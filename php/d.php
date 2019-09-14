<?php
    
    if (isset($_POST['smg'])) {
        echo "<center><big>~ こんにちは ~</big></center>";
        echo "<hr>";
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $tanggal = $_POST['tanggal'];
        $judul = $_POST['judul'];
        $kode = $_POST['kode'];
        $pengarang = $_POST['pengarang'];
        $jenis = $_POST['jenis'];
        $bilangan = $_POST['bilangan'];
        $harga = $_POST['harga'];
    }
    echo "Nama : <b>$nama</b> <br>";
    echo "Alamat : <b>$alamat</b> <br>";
    echo "Jenis Kelamin : <b>$jk</b> <br>";
    echo "Tanggal : <b>$tanggal</b> <br>";
    echo "Judul Buku : <b>$judul</b> <br>";
    echo "Kode Buku : <b>$kode</b> <br>";
    echo "Pengarang Buku : <b>$pengarang</b> <br>";
    echo "Jenis : <b>$jenis</b> <br>";
    echo "Jumlah Buku Yang DiBeli : <b>$bilangan</b> <br>";
    echo "Harga : <b>$harga</b> <br>";
    $total = $harga*$bilangan;
    $diskon = $total*5/100;
    $diskon2 = $total*10/100;
    echo "<hr>Total Harga : $total";
    if ($bilangan >= 3) {
        echo "<br>Anda Mendapatkan Diskon 5% : $diskon";
    }
    if ($bilangan >= 5) {
        echo "<br>Anda Mendapatkan Diskon 10% : $diskon2";
    }
    echo "<hr>";
    echo "<center><big>~ 終了（終了） ~</big></center>";