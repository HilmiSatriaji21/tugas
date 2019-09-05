<?php
// Sekarang tanggal 13 April 2006 09:43:49
$arrDay = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis",
"Jum'at", "Sabtu");
$day = date ("w");
//0 - 6 of day
echo "<hr>Hari ini hari : <big><u><b>" . $arrDay[$day]."</big></u></b>";
echo "<hr>";
?>