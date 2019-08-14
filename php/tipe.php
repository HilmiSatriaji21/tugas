<?php
$NIM    = " 021711721121721";
$NAMA   = 'Hilmi';
$UMUR   = 17;
$NILAI  = 85.00;
$STATUS = TRUE;

echo "NIM  :" . $NIM .  "<br>";
echo "Nama : $NAMA<br>";
print "Umur : . $UMUR"; print "<br>";
printf ("Nilai : %.2f<br>", $NILAI);
if ($STATUS){
echo "Status : Aktif";
}
else{
echo "Status : Tidak Aktif";
}
?>