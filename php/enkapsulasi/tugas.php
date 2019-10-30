
<?php
class Nama{
    // buat protected property
    protected $doi;

    public $pemilik;
    // buat public method
    public function Nama1(){
        return "Hilmi_Satriaji_F";
    }
    // buat protected method
    protected function Nama2(){
        return "Tidak Ada";
    }
    private $nama_mantan = "Tidak Ada";
    public function Nama3(){
        return $this->nama_mantan;
    }
}

// buat class laptop
class c extends Nama
{

    public function Nama3(){
        return $this->nama_mantan;
    }
}
    

// buat objek dari class laptop (instansiasi)
$a = new Nama();
// set property
$a->pemilik; // Hilmi

// tampilkan property
echo $a->pemilik; // Hilmi

// tampilkan method
echo "<b>" . $a->Nama1(); // "Hidupkan Laptop"

$b = new Nama();

// set protected property akan menghasilkan error
$b->doi;

//tampilkan method
echo "<b>". $b->Nama2(). "<br>"; //"Tidak Ada"

$d = new c();
$e = new Nama();
// jalankan method dari class komputer
echo $d->Nama3(); // "Intel Core i7-4790 3.6Ghz"
// jalankan method dari class laptop (error)
echo $e->Nama3();
?>