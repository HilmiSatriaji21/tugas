<?php
if (isset($_POST['sbm'])) {
    $bil = $_POST['bilangan'];
    $pang = $_POST['pangkat'];
    
    for ($ganjil = 1; $ganjil <= 10; $ganjil++) {
    if  ($ganjil % 2 == 1) {
    echo $ganjil ;
    }
}
}
?>