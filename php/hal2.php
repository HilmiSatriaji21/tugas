<?php
session_start();
if ($_SESSION['akseslogin']){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center><big>ようこそ</big></center>
<hr><br>
<fieldset>
     <legend>Luas Lingkaran</legend>
    <nav>
        <a href="hal1.php">Halaman 1</a>|
        <a href="hal2.php">Halaman 2</a>|
        <a href="hal3.php">Halaman 3</a>|
        <a href="logout.php">LogOut</a>|
</nav>
        <p>Masukkan Jari-Jari Lingkaran</p>
<form action="" method="post">
	Jari-jari :<input type="text" name="jari2"><br>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
if(isset($_POST['submit'])){
	$jari2 = $_POST['jari2'];
	$phi = 3.14;
	$luas_lingkaran = $phi * $jari2 * $jari2;
	
	echo "Lingkaranan dengan jari-jari $jari2 maka memiliki <br>";
	echo "Luas : <b>$luas_lingkaran </b><br>";
}
?>
</body>

</html>
<?php
}else {
    echo "<script> alert('Silahkan Login Terlebih Dahulu');"
          ."window.location.href='login.php'</script>";
}
?>