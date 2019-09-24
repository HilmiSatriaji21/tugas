<?php
/*
Halaman Ini Merupakan Halaman LogOut, Dimana Kita Menghapus Session Yang Ada.
*/

session_start();
if (isset($_session['login'])) {
    unset ($_session);
    session_destroy();
    //
    echo "<h1>Anda sudah berhasil LOGOUT</h1>";
    echo "<h2>Klik <a href='session01.php'>di sini</a> untuk
              LOGIN kembali</h2>";
    echo "<h2>Anda sekarang tidak bisa masuk ke halaman
    <a href='session02.php'>session02.php</a> lagi</h2>";
     }
?>
}