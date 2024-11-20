<?php

$novel =[
    [
        "judul"=>"Cantik Itu Luka",
        "penulis"=>"Eka Kurniawan",
        "Tanggal_rilis"=>"18 Agustus 2016",
        "penerbit"=>"CahayaBook"
    ],
    [
        "judul"=>"Laut Bercerita",
        "penulis"=>"Leila S. Chudori",
        "Tanggal_rilis"=>"9 November 2019",
        "penerbit"=>"RahsC"
    ],
    [
        "judul"=>"Bumi Manusia",
        "penulis"=>"Pramoedya Ananta Toer",
        "Tanggal_rilis"=>"26 Mei 2013",
        "penerbit"=>"Tereliye"
    ],
    [
        "judul"=>"Saman",
        "penulis"=>"Aya Utami",
        "Tanggal_rilis"=>"29 Mei 2012",
        "penerbit"=>"C-ema"
    ],
    [
        "judul"=>"Entrok",
        "penulis"=>"Okky Madasari",
        "Tanggal_rilis"=>"02 Oktober 2002",
        "penerbit"=>"NemaBook"
    ],
    
];
foreach ($novel as $buku ) {
    echo "Judul : ".$buku["judul"]."<br>";
    echo "Penulis : ".$buku["penulis"]."<br>";
    echo "Tanggal Rilis : ".$buku["Tanggal_rilis"]."<br>";
    echo "Penerbit : ".$buku["penerbit"];
    echo "<hr>";
};



?>