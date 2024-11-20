<?php
$nama = "Vika";
$kelas = "XI RPL 1";
$indonesia = 100;
$matematika = 100;
$inggris = 100;
$rata = $indonesia + $matematika + $inggris;
$rata = $rata / 4;

echo "Nama : $nama";
echo "<br>";
echo "Kelas : $kelas ";
echo "<br>";
echo "Indonesia : $indonesia";
echo "<br>";
echo "Matematika : $matematika ";
echo "<br>";
echo "Inggris : $inggris";
echo "<br>";
echo "Rata-rata : $rata";
echo "<br>";
if ($rata < 75){
    echo "Tidak Lulus";
}
else{
    echo "Anda Lulus";
}

?>