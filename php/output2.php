<?php
if (isset($_POST['Input'])) {
$nama = $_POST['nama'];
echo "Nama Anda : <b>$nama</b><br>";
$nis = $_POST['nis'];
echo "Nis Anda : <b>$nis</b>";
$alamat = $_POST['alamat'];
echo "<br>Alamat : <b>$alamat</b>";
$jk = $_POST['jk'];
echo "<br>Jenis Kelamin Anda : <b>$jk</b>";
$agama = $_POST['agama'];
echo "<br>Agama Anda : <b>$agama</b><br>";
$asal = $_POST['asal_sekolah'];
echo "Asal Sekolah Anda : <b>$asal</b><br>";
$ortu = $_POST['nama_orang_tua/wali'];
echo "Nama Orang Tua/Wali Anda : <b>$ortu</b><br>";
echo "Pelajaran Kesukaan : <br>";
if (isset($_POST['mapel1'])) {
echo "+ " . $_POST['mapel1'] . "<br>";
}
if (isset($_POST['mapel2'])) {
echo "+ " . $_POST['mapel2'] . "<br>";
}
if (isset($_POST['mapel3'])) {
echo "+ " . $_POST['mapel3'] . "<br>";
}
if (isset($_POST['mapel4'])) {
echo "+ " . $_POST['mapel4'] . "<br>";
}
if (isset($_POST['mapel5'])) {
echo "+ " . $_POST['mapel5'] . "<br>";
}
$total = ('ijazah');
if ($total <23) {
    echo "<br>Status : <b>Lulus</b>";
}
else {
    echo "<br>Status : <b>Tidak Lulus</b>";
}
}
$total = $_POST[$total];
echo "<br>Total Nilai Ijazah SMK :<b>$total</b><br>";
$email = $_POST['Email'];
echo "Email Anda : <b>$email</b>";
?>