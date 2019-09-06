<html>
     <head><title>Pengolahan Form</title></head>
     <body>

     <form ACTION="" METHOD="POST" NAME="input">
     Nama Anda : <input type="text" name="nama"><br>
     <input type="submit" name="input" value="input">
     </form> 
     </body>
     </html>

<?php
if(isset($_POST['input'])){
    $nama = $_POST['nama'];
    echo "Nama Anda : <b> $nama </b>";
}
?>