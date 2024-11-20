<?php

// variabel
$nama = "Vika";
$jk = "Perempuan";
$jenis ="Makanan";
$menu ="Ayam Goreng";
$jumlah = 3;


// Jenis Makanan
if ($jenis == "Makanan") {
    
    if ($menu == "Nasi Goreng") {
        $harga = 10000;
        $total = $harga * $jumlah;
    }elseif ($menu == "Mie Goreng") {
        $harga = 15000;
        $total = $harga * $jumlah;
    }elseif ($menu == "Ayam Goreng") {
        $harga = 20000;
        $total = $harga * $jumlah;
    }else{
        echo "Tidak ada menu yang dipesan";
    }

// Jenis Minuman
}elseif ($jenis == "Minuman") {
         
    if ($menu == "Air Mineral") {
        $harga = 5000;
        $total = $harga * $jumlah;
    }elseif ($menu == "Fresh Tea") {
        $harga = 7000;
        $total = $harga * $jumlah;
    }elseif ($menu == "Jus") {
        $harga = 12000;
        $total = $harga * $jumlah;
    }else{
        echo "Tidak ada menu yang dipesan";
    }
}



// Tampilan struk
echo "----~>>RESTORAN SELALU RAME<<~----";
echo "<br><br>";
echo "Nama  : $nama";
echo "<br>";
echo "Jenis Kelamin : $jk";
echo "<br>";
echo "Jenis : $jenis";
echo "<br>";
echo "Menu : $menu";
echo "<br>";
echo "Harga : $harga";
echo "<br>";
echo "Jumlah : $jumlah";
echo "<br>";
echo "-----------------------------";
echo "<br>";
echo "Total : $total";
echo "<br>";

// Kondisi mendapat diskon Ketika
//  belanja lebih dari 50k atau pas 50k
if ($total >= 50000) {
    $diskon = $total * 0.20;
    $total_bayar = $total - $diskon;
    echo "Diskon 20% : $diskon";
    echo "<br>";
    echo "-----------------------------";
    echo "<br>";
    echo " Total Bayar: $total_bayar";
   
}else{
    echo "Diskon 20% : - ";
    echo "<br>";
    echo "Total Bayar : $total";
}
?>