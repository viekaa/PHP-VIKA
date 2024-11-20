<?php

$pemilik =
   [
    [
        "nama"=>"Safitri",
        "buah"=>
         [
        "buah1"=>
        [
            "nama_buah"=>"Anggur",
            "macam"=>
            [
                "jenis1"=>"Anggur Ijo",
                "jenis2"=>"Anggur Putih",
            ]
        ]
       
        ]
    ],

    [
        "nama"=>"Rahman",
        "buah"=>[
         "buah1" =>[
            "nama_buah"=>"Alpukat",
            "macam"=> [
                "jenis1"=>"Alpukat Mentega",
                "jenis2"=>"Alpukat Biasa"
                      ]
                   ],

            "buah2" =>[
                "nama_buah"=>" Apel",
                "macam"=> [
                    "jenis1"=>"Apel Merah",
                    "jenis2"=>"Apel Hijau"
                          ] 
                      ]
    ]
    ]
    ];
foreach ($pemilik as $data) {
    echo "Nama Pemilik : ".$data["nama"]."<br>";
    echo "Daftar Buah Kesukaan : <br>";
    echo "<ul>";
    foreach($data["buah"] as $buah){
        echo $buah["nama_buah"]."<br>";

        foreach($buah["macam"] as $macam){
            
            echo "<li>".$macam."</li>";

        }
    }
  
    echo "</ul>";
    echo "<hr>";
};

?>