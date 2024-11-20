<?php


class bangun_datar{

    public $luas_persegiP;
    public $luas_segitiga;
    public $luas_persegi;
    public $luas_lingkaran;

    // keliling

    public $keliling_persegiP;
    public $keliling_segitiga;
    public $keliling_persegi;
    public $keliling_lingkaran;

}

class luas extends bangun_datar{
    public function segitiga($alas,$tinggi){
        echo " <h4> Menghitung Luas Segitiga </h4>";
        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Rumus Menghitung Luas Segitiga : 1/2 x alas x tinggi <br>";
        $this->luas_segitiga = 1/2 * $alas *$tinggi;
        echo "Luas Segitiga : $this->luas_segitiga";
    }

    public function persegi($sisi){
        echo " <h4> Menghitung Luas Persegi </h4>";
        echo "Sisi : $sisi <br>";
        echo "Rumus Menghitung Luas Persegi : Sisi x sisi <br>";
        $this->luas_persegi = $sisi * $sisi;
        echo "Luas Persegi : $this->luas_persegi";
    
    }
    public function persegiPanjang($panjang,$lebar){
        echo " <h4> Menghitung Luas Persegi Panjang </h4>";
        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "Rumus Menghitung Luas Persegi Panjang : panjang x lebar <br>";
        $this->luas_persegiP =$panjang *$lebar;
        echo "Luas Persegi Panjang : $this->luas_persegiP";
    }
    
    public function Lingkaran($r){
        echo " <h4> Menghitung Luas lingkaran </h4>";
        echo "Jari-jari : $r <br>";
        echo "Rumus Menghitung Lingkaran : π x r2 <br>";
        $this->luas_lingkaran = 3.14 * $r * $r;
        echo "Luas Lingkaran : $this->luas_lingkaran";
    
    }
    
}



class keliling extends bangun_datar{
    public function segitiga($a,$b,$c){
        echo " <h4> Menghitung Keliling Segitiga </h4>";
        echo "sisi a : $a <br>";
        echo "sisi b : $b <br>";
        echo "sisi c : $c <br>";
        echo "Rumus Menghitung Keliling Segitiga : a + b + c <br>";
        $this->keliling_segitiga = $a + $b + $c;
        echo "Keliling Segitiga : $this->keliling_segitiga";
    }

    public function persegi($sisi){
        echo " <h4> Menghitung keliling Persegi </h4>";
        echo "Sisi : $sisi <br>";
        echo "Rumus Menghitung keliling Persegi : sisi + sisi + sisi + sisi <br>";
        $this->keliling_persegi = $sisi + $sisi + $sisi + $sisi;
        echo "keliling Persegi : $this->keliling_persegi";
    
    }
    public function persegiPanjang($panjang,$lebar){
        echo " <h4> Menghitung keliling Persegi Panjang </h4>";
        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "Rumus Menghitung keliling Persegi Panjang : 2(p x l)<br>";
        $this->keliling_persegiP = $panjang + $lebar + $panjang + $lebar;
        echo "keliling Persegi Panjang : $this->keliling_persegiP";
    }
    
    public function Lingkaran($r){
        echo " <h4> Menghitung keliling lingkaran </h4>";
        echo "Jari-jari : $r <br>";
        echo "Rumus Menghitung Lingkaran : 2πr <br>";
        $this->keliling_lingkaran = 2 * 22/7 * $r;
        echo "keliling Lingkaran : $this->keliling_lingkaran";
    
    }

}

$cetak = new luas();
echo $cetak->segitiga(3,4);
echo "<hr>";
echo $cetak->persegi(3);
echo "<hr>";
echo $cetak->persegiPanjang(10,5);
echo "<hr>";
echo $cetak->lingkaran(5);
echo "<hr>";

$cetak = new keliling();
echo $cetak->segitiga(3,4,12);
echo "<hr>";
echo $cetak->persegi(3);
echo "<hr>";
echo $cetak->persegiPanjang(10,5);
echo "<hr>";
echo $cetak->lingkaran(14);
echo "<hr>";
?>