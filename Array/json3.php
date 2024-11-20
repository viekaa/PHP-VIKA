<?php

// Data JSON

$dataJSON ='[
{
    "nama":"Vika Aryani",
    "Alamat":"Bandung"
},
{
    "nama":"Eva Fadhilah",
    "Alamat":"Jakarta"
}

]';

// dikonversikan ke Array

$list = json_decode($dataJSON);

// Ditampilkan 
foreach ($list as $siswa) {
    echo "Nama : {$siswa->nama}<br>";
    echo "Alamat : {$siswa->Alamat}<br>";
    echo "<hr>";
}

?>