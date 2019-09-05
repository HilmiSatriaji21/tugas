<?php
$arrnilai = array('Ajeng' => 90,'Mamat' => 70, 'Ucup' => 87,
                  'Aang' => 95, 'Syahrul' => 75);
$grade = [85,75,65];
echo "<big><b>Menampilkan Isi Array Dengan Foreach : <big><br><hr></b>";
foreach ($arrnilai as $nama => $nilai) {
    if ($nilai >= $grade[0]) {
        echo "Nama : $nama = $nilai Gradenya A <hr>";
    }
    elseif ($nilai >= $grade[1]) {
        echo "Nama : $nama = $nilai Gradenya B <hr>";
    }
    elseif ($nilai >= $grade[2]) {
        echo "Nama : $nama = $nilai Gradenya C <hr>";
    }

    
}                  