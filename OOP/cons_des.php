<?php
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
    // method construct
    // Construct itu muncul di awal

    public function __construct(){
        echo "Halooo<br>";
    }

    // method Destruct
    // destruct itu muncul di akhir
    public function __destruct(){
        echo "Hiii<br>";
    }

}
// Buat objek
$cetak = new kucing();

?>