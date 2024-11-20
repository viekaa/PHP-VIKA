<?php
// Ada dua jenis perulangan dalam pemrograman:

// 1. Counted loop;
// 2. Uncounted loop.

// perbedaannya?

// Counted loop adalah perulangan yang sudah jelas banyak pengulangannya. 
// Sedangkan Uncounted loop tidak pasti berapa kali dia akan mengulang.
// ====================================================================
// 1. Perulangan For
// Perulangan For adalah perulangan yang termasuk dalam counted loop, karena kita bisa menentukan jumlah perulangannya.

// Bentuk dasar perulangan for:

    for($i = 1; $i <= 10; $i++){
        echo "<h2>Ini perulangan ke-$i</h2>";
    }
    echo "<hr>";

//     2. Perulangan While
// Perulangan while adalah perulangan yang termasuk dalam uncounted loop. 
// Karena biasanya digunakan untuk mengulang sesuatu yang belum jelas jumlah
// pengulangannya.

// Namun, perulangan while juga bisa digunakan seperti perulangan for 
// sebagai counted loop.

// Bentuk dasarnya:

$ulangi = 0;

while($ulangi < 10){
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}
echo "<hr>";

// 3. Perulangan Do/While
// Perulangan Do/While sama seperti perulangan while.
//  Ia juga tergolong dalam uncounted loop.

// Perbedaan Do/While dengan while terletak pada cara iya memulai pengulangan.

// Perulangan Do/While akan selalu melakukan pengulangan sebanyak 1 kali,
//  kemudian melakukan pengecekan kondisi.

// Sedangkan perulangan while akan mengecek kondisi terlebih dahulu, 
// baru melakukan pengulangan.

// Bentuk perulangan Do/While:

$ulangi = 10;

do {
    echo "<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
} while ($ulangi > 0);

?>