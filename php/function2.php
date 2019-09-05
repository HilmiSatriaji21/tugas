<?php

function cetak_ganjil () {
         for ($i=0; $i<100; $i++) {
            if ($i%2 == 1) {
               echo "<b><hr>$i<b><br>";
        }
    }
}
//pemanggilan fungsi
cetak_ganjil();