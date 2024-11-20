<?php

// class
class bangun_datar{

  // property

  public $rumus_segitiga;
  public $rumus_persegi;
  public $rumus_Lingkaran;
  public $rumus_persegiPanjang;
  
// method
    public function segitiga($alas,$tinggi){
        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        $this->rumus_segitiga = 1/2 * $alas * $tinggi;
        echo "Hasil : $this->rumus_segitiga <br>";

    }

    public function lingkaran($jari_jari){
        echo "Jari-jari : $jari_jari <br>";
        $this->rumus_Lingkaran =  3.14 * $jari_jari * $jari_jari;
        echo "Hasil : $this->rumus_Lingkaran <br>";
    }
    public function persegi($sisi){
        echo  " Sisi : $sisi <br>";
      $this->rumus_persegi = $sisi * $sisi;
      echo "Hasil : $this->rumus_persegi <br>";

    }

    public function persegi_panjang($panjang,$lebar){
        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
      $this->rumus_persegiPanjang = $panjang *$lebar;
      echo "Hasil : $this->rumus_persegiPanjang <br>";
    }
}

// Instansiasi

$cetak = new bangun_datar();

echo "<h3> Luas Segitiga </h3>";
echo "Rumus : 1/2 x alas x tinggi <br>";
echo $cetak->segitiga(2,4);
echo "<hr>";
echo "<h3> Luas Lingkaran </h3>";
echo "Rumus :  π x r2  <br>";
echo $cetak->lingkaran(5);
echo "<hr>";
echo "<h3> Luas persegi </h3>";
echo "Rumus : sisi x sisi <br>";
echo $cetak->persegi(4);
echo "<hr>";
echo "<h3> Luas Persegi Panjaang </h3>";
echo "Rumus : panjang x lebar <br>";
echo $cetak->persegi_panjang(2,4);
echo "<hr>";
?>

<!-- $this adalah kata kunci untuk memanggil sebuah property -->