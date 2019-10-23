<?php
class singa{
    public $warna = '<hr><u><b><li>'.'Spesies hewan dari keluarga felidae atau jenis kucing. 
                     Singa merupakan hewan yang hidup berkelompok. 
                     Biasanya terdiri dari seekor jantan dan banyak betina. 
                     Kelompok ini menjaga daerah kekuasaannya. 
                     Umur singa antara 10 sampai 15 tahun di alam bebas, 
                     tetapi dalm penangkaran memungkinkan lebih dari 20 tahun.'.'<br>';
    public $kaki = 'Memiliki Kaki : ' . 4 .'<br><hr>';
    public $hidup = '<li>'.'Singa habitatnya di padang pasir. Hewan ini tergolong noktural, 
                      Dalam sehari 20 jam berbaring di bebatuan atau di bawah pohon yang teduh. 
                      Tiap kelompok terdiri dari jantan 1-6 ekor, betina 4-15 ekor. 
                      Wilayah kekuasaan satu kelompok antara 20–400 km2. Jika makanan habis, 
                      Singa betina sehari penuh mencari makanan sambil meluaskan wilayah kekuasaan. 
                      Tugas singa jantan adalah melindungi betina dari singa jantan kelompok lain, 
                      Dan menjaga wilayah kekuasaan. Saat merebut wilayah kelompok lain, 
                      Jantan yang merebut kelompok lain akan membunuh anak singa yang berada di kelompok yang direbut. 
                      Kecepatan lari singa jantan adalah 58 km/jam. '.'<br><hr>';
    public $kawin = '<li>'.'Pada saat musim kawin, 
                        Sekali kopulasi waktunya adalah 20 detik, sehari bisa menikah 50 kali. Waktu hamilnya 98-120 hari, 
                        Dan betina yang hamil akan meniggalkan kelompok untuk sementara. 
                        Sekali melahirkan akan melahirkan 1-6 ekor. Waktu menyusuinya adalah 7-10 bulan. 
                        Selama 1 minggu, bayi singa tidak bisa melihat. Setelah 3 minggu sudah bisa jalan. 
                        Betina yang melahirkan tidak akan kembali ke kelompok sebelum anaknya berusia 6-8 minggu. 
                        Anak singa sudah dapat makan daging setelah umur 3 bulan. 
                        Anak singa sering mati karena dibunuh jantan dari kelompok lain 
                        Atau tidak dirawat oleh singa betina karena ketersediaan makanan yang sedikit. 
                        Anak singa yang hidup sampai 1 tahun hanya 40%, sampai 2 tahun adalah 20%, 
                        kalau sudah menjadi singa dewasa persentase kematiannya menurun. 
                        Singa jantan umur 3-4 tahun sudah menjadi singa dewasa, 
                        Dan singa betina 3 tahun sudah menjadi singa dewasa. 
                        Pernah ada singa yang dipelihara sampai umur 24 tahun. '.'<br><hr></u></b>';
    public $berburu = '<u><li><b>'.'Berburu secara berkelompok dan mengejar mangsa. 
                        Alasan jantan tidak berburu adalah bulu lebat dan badan besar sehingga bisa langsung ketahuan mangsa, 
                        Selain itu singa jantan tidak selincah 
                        Singa betina karena berat jantung singa jantan adalah 0,41 % dari seluruh tubuh sedangkan 
                        Singa betina berat jantungnya 0,51 % dari berat seluruh tubuh, 
                        Karena itu kecepatan berlari singa betina lebih cepat sehingga mencapai 81 km/jam. 
                        Walaupun singa betina bisa lari dengan kecepatan tersebut, 
                        Singa betina hanya bisa mempertahankan energinya hanya dalam waktu beberapa menit. 
                        Karena itu, sebelum menyerang mangsa, 
                        Singa betina mendekati mangsa sampai 30 m dari mangsa dan lebih memilih berburu pada malam hari. 
                        Untuk menjatuhkan mangsa dalam satu terkaman, 
                        singa menerkam bagian hidung atau mulut sehingga mangsa tidak bisa bernapas.'.'<br><hr></u></b>';
    public function makan($var, $var2)
    {
        return "Singa Makan " .$var. ' Dan '. $var2;
    }                                                          
}
$singa_asli = new singa;
echo $singa_asli ->warna;
echo $singa_asli ->kaki;
echo $singa_asli ->hidup;
echo $singa_asli ->kawin;
echo $singa_asli ->berburu;
echo '<u><b><br>' .$singa_asli ->makan('Daging', 'Tulang');
'<hr>';
?> 