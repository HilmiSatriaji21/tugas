<?php
// buat class laptop
class laptop{

    public $pemilik;
    // buat public method
    public function hidupkan_laptop(){
        return "Hidupkan Laptop";
    }
}

// buat objek dari class laptop (instansiasi)
$laptop_hilmi = new laptop();
// set property
$laptop_hilmi->pemilik; // Hilmi

// tampilkan property
echo $laptop_hilmi->pemilik; // Hilmi

// tampilkan method
echo "<br>" . $laptop_hilmi->hidupkan_laptop(); // "Hidupkan Laptop"
?>