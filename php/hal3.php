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
     <legend>Luas Persegi</legend>
    <nav>
        <a href="hal1.php">Halaman 1</a>|
        <a href="hal2.php">Halaman 2</a>|
        <a href="hal3.php">Halaman 3</a>|
        <a href="logout.php">LogOut</a>|
</nav>
<br>
<form action="" method="post">
	Panjang : <input type="text" name="panjang"><br>
    <br>
	Lebar : <input type="text" name="lebar"><br>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
	if(isset($_POST['submit'])){
		$panjang = $_POST['panjang'];
		$lebar = $_POST['lebar'];
		
		$luas = $panjang * $lebar; // Menghitung luas
		
		echo "Persegi panjang yang memiliki lebar: $lebar, dan panjang : $panjang, maka : <br>";
		echo "Luas: <b>$luas </b><br>";
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