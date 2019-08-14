<?php
// if
$gol = 11;

if ($gol >= 10){
    echo "Mendali Emas, Dengan Total Cetak Gol : " .$gol;
}elseif ($gol >= 8){
    echo "Mendali Perak, Dengan Total Cetak Gol : " .$gol;
}elseif ($gol >= 4){
    echo "Mendali Perunggu, Dengan Total Cetak Gol : " .$gol;
}elseif ($gol < 4 ){
    echo "Mendali Emas Ngambang, Dengan Total Cetak Gol : " .$gol;
}
?>