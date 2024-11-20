<?php
// Enkapsulasi ada Public,Private,Protected

class manusia{

    public $nama ="Vika";
 public function perkenalan(){
    echo "Assalamu'alaikum.. <br>";
 }
}

$cetak = new manusia();
echo $cetak->perkenalan();
echo $cetak->nama;


// Kalo Privasi itu tidak bisa dipanggil di luar class
//tapi bisa di tumpangkan ke data yang bersifat public
?>