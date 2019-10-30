<?php
// buat class laptop
class laptop{

    // buat protected property
    protected $pemilik;

    // buat protected method
    protected function hidupkan_laptop(){
        return "Hidupkan Laptop";
    }
}

// buat objek dari class laptop (instansiasi)
$laptop_hilmi = new laptop();

// set protected property akan menghasilkan error
$laptop_hilmi->hidupkan_laptop();

//tampilkan method
echo $laptop_hilmi->hidupkan_laptop(); //"Hidupkan Laptop";
?>