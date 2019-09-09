<?php
if (isset($_POST['input'])) {
$nama = $_POST['nama'];
echo "Nama Anda : <b>$nama</b>";
$mapel1 = $_POST['mapel1'];
echo "<br>Mata Pelajaran1 : <b>$mapel1</b>";
$mapel2 = $_POST['mapel2'];
echo "<br>Mata Pelajaran2 : <b>$mapel2</b>";
$rata = (mapel1+mapel2)/2;
if ($rata <75) {
    echo "<br>Status : <b>Lulus</b>";
}
else {
    echo "<br>Status : <b>Tidak Lulus</b>";
}
}
$rata = $_POST[$rata];
echo "<br>Rata-Rata Anda : <b>$rata</b>";

?>