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
     <legend>Luas Segitiga</legend>
    <nav>
        <a href="hal1.php">Halaman 1</a>|
        <a href="hal2.php">Halaman 2</a>|
        <a href="hal3.php">Halaman 3</a>|
        <a href="logout.php">LogOut</a>|
</nav>	
<h3>Hitung Luas Segitiga</h3>
 
<p>Masukkan ukuran alas dan tinggi segitiga</p>
<form action="" method="POST">
	Alas :<input type="text" name="alas"><br>
    <br>
	Tinggi :<input type="text" name="tinggi"><br>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
if(isset($_POST['submit'])){
	$alas = $_POST['alas'];
	$tinggi = $_POST['tinggi'];
	
	$luas_segitiga = 1/2 * $alas * $tinggi; // Menghitung luas segitiga
	
	echo "Luas segitiga dengan alas : $alas, dan tinggi : $tinggi <br>";
	echo "yaitu : <b>$luas_segitiga</b>";
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