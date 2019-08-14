<?php

$gol = 2;

if ($gol >= 10){
    echo "Mendali Emas, Dengan Total Cetak Gol : " .$gol;
    switch ($gol) {
        case '20':
            echo " Mendapatkan Bonus 100Jt";
            break;
    }
}elseif ($gol >= 8){
    echo "Mendali Perak, Dengan Total Cetak Gol : " .$gol;
    switch ($gol) {
        case '9':
            echo " Mendapakan 80Jt";
            break;
    }
}elseif ($gol >= 4){
    echo "Mendali Perunggu, Dengan Total Cetak Gol : " .$gol;
    switch ($gol) {
        case '5':
            echo " Mendapatkan Bonus 50Jt";
            break;
    }
}elseif ($gol < 4 ){
    echo "Mendali Emas Ngambang, Dengan Total Cetak Gol : " .$gol;
    switch ($gol) {
        default:
            echo " Tidak Mendapatkan Bonus";
            break;
        
    }
}
?>