<?php

function biodata($nama,$tempat_lahir,$tanggal_lahir,
$jenis_kelamin,$agama,$alamat,$hobi){
    echo "Nama : $nama <br>";
    echo "Tempat Lahir : $tempat_lahir <br>";
    echo "Tanggal Lahir : $tanggal_lahir <br>";
    echo "Jenis Kelamin : $jenis_kelamin <br>";
    echo "Agama : $agama <br>";
    echo "Alamat : $alamat <br>";
    echo "Hobi : $hobi <br>";
}

biodata("Vika","Wonogiri","29 Mei 2006","Perempuan","Islam",
"Tci 2","Membaca");
echo "<br>";
echo "<hr>";
function menghitung($angka1,$angka2){

echo "Bilangan 1 : $angka1 <br>";
echo "Bilangan 2 : $angka2 <br>";
$hasil= $angka1 + $angka2;
echo " $angka1 + $angka2 <br>
Hasilnya : $hasil";
}
menghitung(10,34);

?>