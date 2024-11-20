<?php

$siswa =[
[
"nama"=>"Vika Aryani",
"jenis_kelamin"=>"perempuan",
"kelas"=>"XI RPL 1"

],
[
    "nama"=>"Isma Tiara",
    "jenis_kelamin"=>"perempuan",
    "kelas"=>"XI RPL 1"
    
],
];

foreach ($siswa as $murid ) {
    echo "Nama : ".$murid["nama"]."<br>";
    echo "Jenis Kelamin : ".$murid["jenis_kelamin"]."<br>";
    echo "Kelas : ".$murid["kelas"];
    echo "<hr>";
};
?>