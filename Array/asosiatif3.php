<?php

$siswa = [
    [
        "NIS" => 1001,
        "nama" => "Haddad",
        "kelas" => "XI RPL 1",
        "eskul" => ["Futsal", "Tari", "Renang"]
    ],
    [
        "NIS" => 1002,
        "nama" => "Vika",
        "kelas" => "XI RPL 1",
        "eskul" => ["Rohis","Tahfidz","Band"]
    ]
];

foreach ($siswa as $a) {
    echo "NIS : ".$a["NIS"]."<br>";
    echo "Nama : ".$a["nama"]."<br>";
    echo "Kelas : ".$a["kelas"]."<br>";
    echo "Eskul :";
    echo "<ul>";
    
    foreach($a["eskul"] as $b){
        echo "<li>$b</li>";
    }
    echo "</ul>";
    echo "<hr>";
}
?>
