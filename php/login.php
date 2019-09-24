<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<center><big>ようこそ</big></center>
<hr><br>
<fieldset>
     <legend>Login</legend>
    <nav>
        <a href="hal1.php">Halaman 1</a>|
        <a href="hal2.php">Halaman 2</a>|
        <a href="hal3.php">Halaman 3</a>|
        <a href="logout.php">Login</a>|
</nav>
<br>
    <form action="" method="POST">
        Email <input type="email" name="email" required>
        <br>
        <br> Password<input type="password" name="pass" required>
        <br><input type="submit" value="Login" name="akses">
</form>
</body>

</html>
<?php
if (isset($_POST['akses'])) {
    $a = $_POST['email'];
    $b = $_POST['pass'];
    if ($a == "Admin@gmail.com" && $b == "123456") {
        $_SESSION['akseslogin'] = 'Admin';
        header("Location:hal1.php");
    }else {
        echo "Login Gagal";
    }
}elseif ($_SESSION['akseslogin']) {
    echo "<script> alert('Anda Sudah Login');"
         ."window.location.href='hal1.php'</script>";
}
?>