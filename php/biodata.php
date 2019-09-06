<html>
     <head><title>Form Biodata</title></head>
     <body>

     <form ACTION="" METHOD="POST" NAME="input">
     <br>Nama : <input type="text" name="nama"><br>
     <br>
     <br>
     Kelas : <input type="text" name="kelas"><br>
     <br>
     <br>
     Alamat : <input type="text" name="alamat"><br>
     <br>
     <br>
     Hobi : <input type="text" name="hobi"><br>
     <br>
     <br>
     <input type="submit" name="input" value="input">
               </form> 
       </body>
</html>

<?php
if(isset($_POST['input'])){
    $nama = $_POST['nama'];
    echo "<big><hr>Nama Anda : $nama";
    $kelas = $_POST['kelas'];
    echo "<big><hr>Kelas : $kelas";
    $alamat = $_POST['alamat'];
    echo "<big><hr>Alamat : $alamat";
    $hobi= $_POST['hobi'];
    echo "<big><hr>Hobi : $hobi <hr>";
}
?>