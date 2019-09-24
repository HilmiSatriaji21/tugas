<?php
/*
 Nama File : session1.php
 Halaman Ini Merupakan Halaman Contoh Penciptaan session.
 Perintah session_start() Harus Ditaruh Di Perintah Pertama
 Tanpa Spasi Di Depannya. Perintah session_start() Harus Ada
 Pada Setiap Halaman Yang Berhubungan Dengan session
 */

 session_start();
 if (isset ($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //Periksa Login
    if ($user == "ヒルミ・サトリアジ" && $pass ="123") {
        //Menciptakan Session
        $_session['login'] = $user;
        //Menuju Ke Halaman Pemeriksaan Session
        echo "<h1>Anda Berhasil Login!</h1>";
        echo "<h2>Klik <a href= 'session2.php'>Di Sini
        (session2.php)</h2></a>
        Untuk Menuju Ke Halaman Pemeriksaan Session";
    }else {
        die("Username Atau Password Anda Salah
        Silahkan Kembali Login <a href=session1.php> Login </a>");
    }
} elseif ($_session['login']) {
    echo "<script>";
    echo "alert('Anda Sudah Login');
          window.location.href='session2.php'";
    echo "</script>";      
}else {
?>
<html>
    <head>
        <title>Login Here....</title>
</head>
<body>
    <form action="" method="POST">
        <h2>Login Here...</h2>
        Username : <input type="text" name="user"><br>
        Password : <input type="password" name="pass"><br>
        <input type="submit" name="login" value="Log In">
        </form>
    </body>
</html>

<?php } ?>       