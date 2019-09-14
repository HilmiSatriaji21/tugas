<html>
     <head><title>偽の笑顔</title></head>
     <body>
     <center><h1>~ こんにちは ~</h1></center>
     <fieldset>
     <legend>形 アレイ</legend>
     <br>
     <hr>
<FORM ACTION ="d.php" METHOD="POST" name="Input">
     </html>
     <?php
      if (isset($_POST['Input'])) {
          $nama = $_POST['nama'];
          $alamat = $_POST['alamat'];
          $jk = $_POST['jk'];
          $tanggal = $_POST['tanggal'];
          $b = $_POST['jumlah'];
      for ($a=0; $a < $b; $a++) { ?>
          <br><label for="">Judul Buku :</label>
     <input type="text" name="judul"></br>
     <br><label for="">Kode Buku :</label>
     <input type="text" name="kode"></br>
     <br><label for="">Pengarang :</label>
     <input type="text" name="pengarang"><br>
     <br><tr><td>Jenis Buku : </td></td><select name="jenis" required>
               <option value="Novel">novel</option>
               <option value="Fiksi">fiksi</option>
               <option value="Horror">horror</option>
               <option value="Cergam">cergam</option>
               <option value="Komik">komik</option>
               </select></td></td></br>
               <br>
               <tr>
          <label for=>Jumlah Buku :</label>
          <input type="text" name="bilangan" required>
          <br>
          <br><label for="">Harga Buku : </label>
     <input type="number" min="1" name="harga">
     <br>
     <hr>
         <input type="hidden" name="nama" value="<?php echo "$nama" ?>">
         <input type="hidden" name="alamat" value="<?php echo "$alamat" ?>">
         <input type="hidden" name="jk" value="<?php echo "$jk" ?>">
         <input type="hidden" name="tanggal" value="<?php echo "$tanggal" ?>">
    
      <?php } ?>
      <input type="submit" name="smg" value="Simpan">
      <input type="reset" value="Reset">
      </FORM> 
      <?php }?>
      
</fieldset>
</body>