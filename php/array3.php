<?php
$arrwarna = array ("Blue","Black","Red","Yellow","Green");

echo "Menampilkan Isi Array Dengan For : <br>";
for ($i=0; $i<count($arrwarna); $i++) {
echo "Do you like <font color=$arrwarna[$i]>". $arrwarna[$i]
."</font> ?<br>";
}

echo "<br> Menampilkan Isi Array Dengan Foreach : <br> ";
foreach ($arrwarna as $warna) {
    echo "Do You Like <font color=$warna". $warna ."</font>
    ?<br>";
}
?>