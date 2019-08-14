<?php
$loop =  11;
for ($i = 0; $i < $loop; $i++) { 
    if ($i < 1) {
        echo "Aku Data Ke- " . $i ." Dan Mendapatkan Mendali Emas<br>";
    }
    elseif ($i < 2) {
        echo "Aku Data Ke- " . $i ." Dan Mendapatkan Mendali Perak<br>";
    }
    elseif ($i < 3) {
        echo "Aku Data Ke- " . $i ." Dan Mendapatkan Mendali Perunggu<br>";
    }
    elseif ($i < 7) {
        echo "Aku Data Ke- " . $i ." Dan Mendapatkan Tas Laptop<br>";  
    }
    elseif ($i < 10) {
        echo "Aku Data Ke- " . $i ." Dan Mendapatkan Tas Karung<br>";  
    }
    elseif ($i < 11) {
        echo "Aku Data Ke- " . $i ." Dan Tidak Mendapatkan Apapun<br>";  
    }
}