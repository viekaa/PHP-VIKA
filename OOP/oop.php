<?php


// Buat Kelas
class kucing{

    // Buat property / Atribut
    var $warna;
    var $jenis;

    //  method /function
   public function makan(){
   echo "Kucing suka makan whiskas";
    }
    public function minum(){
    echo "Kucing suka minum  Air";
    }
}
// Buat objek
$cetak = new kucing();

// Memanggil method
// instansiasi
echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
echo "<br>";

// Memanggil Property
echo $cetak->warna="abu";
echo "<br>";
echo $cetak->jenis="anggora";
?>