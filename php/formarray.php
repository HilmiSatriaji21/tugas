<html>
     <head><title>Form Array</title></head>
     <body>
     <center><h1>Form Array</h1></center>
     <fieldset>
     <legend>Form Array</legend>
     <br>
     <FORM ACTION ="" METHOD="GET">
     <label for="">Masukan Jumlah</label>
     <input type="number" min="1" name="jumlah" required>
     <br>
     <input type="submit" name="Input" value="Simpan">
     <input type="reset" name="Reset" value="Reset"><br>
     <hr>
           </FORM>
           <FORM ACTION ="b.php" METHOD="POST">
     </html>      
      <?php
      if (isset($_GET['Input'])) {
          $b = $_GET['jumlah'];
      for ($a=0; $a < $b; $a++) { ?>
          <label for=>Nama</label>
          <input type="text" name="nama[]" required>
          <label for=>Kelas</label>
          <input type="text" name="kelas[]" required>
          <br>
          <br>
      <?php } ?>
      <input type="submit" name="sbm" value="Simpan">
      <input type="reset" value="Reset">
      </FORM> 
      <?php }?>
</fieldset>
</body>      