<html>
     <head><title>Tugas Form</title></head>
     <body>
     <center><h1>~ こんにちは ~</h1></center>
     <fieldset>
     <legend>形 アレイ</legend>
     <br>
     <FORM ACTION ="" METHOD="GET">
     <label for="">Masukan Jumlah</label>
     <input type="number" min="1" name="jumlah" required>
     <br>
     <input type="submit" name="Input" value="Simpan">
     <input type="reset" name="Reset" value="Reset"><br>
     <hr>
           </FORM>
           <FORM ACTION ="c.php" METHOD="POST">
     </html>
     <?php
      if (isset($_GET['Input'])) {
          $b = $_GET['jumlah'];
      for ($a=0; $a < $b; $a++) { ?>
          <label for=>Masukan Bilangan :</label>
          <input type="text" name="bilangan[]" required>
          <label for=>Masukan Pangkat Bilangan :</label>
          <input type="text" name="pangkat[]" required>
          <br>
          <br>
      <?php } ?>
      <input type="submit" name="sbm" value="Simpan">
      <input type="reset" value="Reset">
      </FORM> 
      <?php }?>
</fieldset>
</body>