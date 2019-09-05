<?php
$a = 100;
$b = 50;
$c = ($a == $b) && ($a > $b);

echo "($a == $b) && ($a > $b) : ";
if ($c == true) {
    echo "Hello PHP!";
}
echo "<br>";

echo "<br>";
echo "($a == $b) && ($a > $b) : ";
if($c == false) {
    echo "Maaf Kondisinya Tidak Sesuai";
}
?>