<?php
/*
Halaman Ini Merupakan Contoh Halaman Pemeriksaan Session.
Pemeriksaan Session Biasanya Dilakukan Jika Suatu Halaman Memiliki
Akses Terbatas. Misalnya Harus Login Terlebih Dahulu.
*/

session_start();

//Pemeriksaan Session
if (isset($_session['login'])) { //Jika Sudah Login
    //Menampilkan Isi Session
    echo "<h1>Selamat Datang ".$_session['login'] ."</h1>";
    echo "<h2>Halaman Ini Hanya Bisa Diakses Jika Anda Sudah Login</h2>";
    echo "<h2>Klik <a href='session3.php'>Di Sini
    (session3.php)</a> Untuk LogOut</h2>";
}else {
    //Session Belum Ada Artinya Belum Login
    die("Anda Belum Login! Anda Tidak Berhak Masuk Ke Halaman Ini.
    Silahkan Login <a href='session1.php'>Di Sini</a>");
}
?>