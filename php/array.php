<?php
$a = array('Ahmad', 19, true, 3.19);
//menampilkan array satu-satu
echo "Array Menggunakan Echo<br>";
echo $a[0] . "<br>";
echo $a[3] . "<br>";

echo "<br>";
echo "Array Menggunakan Looping For<br>";
for ($i =0; $i < count($a); $i++) { 
    echo "Array - " . $a[$i] . "<br>";
}
echo "<br>";