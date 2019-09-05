<?php
$arrNilai = array ("Ani" => 80, "Otim" => 90, "Ana" => 75,
"Budi" => 85);
echo "Menampilkan Isi Array Dengan Foreach : <br>";
foreach ($arrNilai as $nama => $nilai) {
    echo "Nilai $nama = $nilai <br>";
}
reset ($arrNilai);
echo "<br>Menampilkan isi array dengan while dan list : <br>";
while (list ($nama, $nilai) = each($arrNilai)) {
echo "Nilai $nama = $nilai<br>";
}
?>