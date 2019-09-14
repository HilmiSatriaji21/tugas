<html>
     <head><title>偽の笑顔</title></head>
     <body>
     <center><h1>~ こんにちは ~</h1></center>
     <fieldset>
     <legend>形 アレイ</legend>
     <br>
     
     <FORM ACTION ="e.php" METHOD="POST" name="Input">
     <label for="">Nama :</label>
     <input type="text" name="nama" required>
     <br><label for="">Alamat :</label>
     <br><textarea name="alamat" cols="40"
            rows="5"></textarea><br>
     <label for="">Jenis Kelamin :</label>
     <br><input type="radio" name="jk" value="Laki-Laki" checked>
            Laki-Laki<br>
           <input type="radio" name="jk" value="Perempuan" checked>
            Perempuan<br>
     <br><label for="">Tanggal Beli :</label>
     <input type="date" name="tanggal" required><br>
     <br>              
     <label for="">Jumlah Pembelian Buku : </label>
     <input type="number" min="1" name="jumlah" required>
     <br>
     <input type="submit" name="Input" value="Simpan">
     <input type="reset" name="Reset" value="Reset"><br>
           </FORM>
     </body>
</html>     