<?php
// Menghitung Rumus Bangun Datar

function segitiga($alas,$tinggi){
    echo " <h4> Menghitung Luas Segitiga </h4>";
    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Rumus Menghitung Luas Segitiga : 1/2 x alas x tinggi <br>";
    $luas = 1/2 * $alas *$tinggi;
    echo "Luas Segitiga : $luas";
}

function persegi($sisi){
    echo " <h4> Menghitung Luas Persegi </h4>";
    echo "Sisi : $sisi <br>";
    echo "Rumus Menghitung Luas Persegi : Sisi x sisi <br>";
    $luas = $sisi * $sisi;
    echo "Luas Persegi : $luas";

}
function persegiPanjang($panjang,$lebar){
    echo " <h4> Menghitung Luas Persegi Panjang </h4>";
    echo "Panjang : $panjang <br>";
    echo "Lebar : $lebar <br>";
    echo "Rumus Menghitung Luas Persegi Panjang : panjang x lebar <br>";
    $luas =$panjang *$lebar;
    echo "Luas Persegi Panjang : $luas";
}

function Lingkaran($r){
    echo " <h4> Menghitung Luas lingkaran </h4>";
    echo "Jari-jari : $r <br>";
    echo "Rumus Menghitung Lingkaran : π x r2 <br>";
    $luas = 3.14 * $r * $r;
    echo "Luas Lingkaran : $luas";

}

segitiga(2,3);
echo"<hr>";
persegi(6);
echo"<hr>";
persegiPanjang(10,20);
echo"<hr>";
Lingkaran(5);
?>