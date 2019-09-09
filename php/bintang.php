<html>
     <head><title>Little Star </title></head>
     <body>
     <hr><b>
     <center><u><big>Little Star</u></big></center>
     <hr></b>
     <FORM ACTION="" METHOD="POST" NAME="Input">
      Masukan Bilangan : <input type="number" name="masuk" checked><br>
       <input type="submit" name="Input" value="Input"><br>
           </FORM>
     </body>
</html>

<?php

if (isset($_POST['Input'])) {
    $masuk = $_POST['masuk'];
     for ($a=0; $a < $masuk; $a++) {
        echo "*";
    }    
        echo "<br>Total Bintang = $masuk";
        echo "<hr>";
}
?>
