<html>
     <head><title>Little Star </title></head>
     <body>
     <center><big>Little Star</big></center>
     <hr>
     <FORM ACTION="" METHOD="POST" NAME="Input">
      Masukan Bilangan : <input type="number" name="masuk" checked><br>
       <input type="submit" name="Input" value="Input"><br>
           </FORM>
     </body>
</html>

<?php
echo "<hr>";
if (isset($_POST['Input'])) {
    $masuk = $_POST['masuk'];
    for ($a=1; $a <= $masuk; $a++) {
     for ($b=1; $b <= $a; $b++) {
        echo "&nbsp;&nbsp;";
    }
    for ($b=1; $b <= $masuk - $a; $b++) {
        echo "*&nbsp;&nbsp;"; 
    }
    echo "<br>";

}    
        echo "<br>Total Bintang = $masuk";
        echo "<br><hr>";
}
?>
