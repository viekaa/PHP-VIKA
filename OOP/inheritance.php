<?php
// class induk
class kendaraan{

    // property

    protected $warna="biru";
 
    // method
public function a(){
    echo "Saya adalah kendaraan<br>";
}

}

// class anak

class mobil extends kendaraan{

    public function b(){
        echo $this->a();
        echo "Warna saya adalah $this->warna";
    }
}

$cetak = new mobil();
echo $cetak->b();
?>