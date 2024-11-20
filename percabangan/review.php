<?php

//untuk menampilkan output echo
$nama = "Vika Aryani";
$tgl_lahir = " 29 Mei 2006 ";
$jns_kelamin = "Perempuan ";
$agama = "Islam";
$alamat = "TCI 2";
$hobi = "tidur";

echo"Nama :  $nama <br>";
echo"Tanggal lahir :   $tgl_lahir <br>";
echo "<hr>";

// Aritmatika
echo"Penjumlahan";
echo "<br>";

$a = 10;
$b = 5;
$tambah = $a + $b;

echo "$a + $b <br> ";
echo "Hasilnya : $tambah";
echo "<hr>";

echo"Pengurangan";
echo "<br>";

$a = 10;
$b = 5;
$kurang = $a - $b;

echo "$a - $b <br> ";
echo "Hasilnya : $kurang";
echo "<hr>";

echo"Pembagian";
echo "<br>";

$a = 10;
$b = 5;
$bagi = $a / $b;

echo "$a : $b <br> ";
echo "Hasilnya : $bagi";
echo "<hr>";

echo"Perkalian";
echo "<br>";

$a = 10;
$b = 5;
$kali = $a * $b;

echo "$a x $b <br> ";
echo "Hasilnya : $kali";
echo "<hr>";
?>
"<center>";
echo "<table>";
echo"
<tr>
<td>
<h6>Struk Gaji</h6>
</td></tr>
<tr>
<td>No</td>
<td>:</td>
<td>$no</td>
</tr>

<tr>
<td>Nama</td>
<td>:</td>
<td>$nama</td>
</tr>

<tr>
<td>Unit Pendidikan</td>
<td>:</td>
<td>$up</td>
</tr>

<tr>
<td><h6>Gaji</h6></td>
</tr>
<tr>
<br>
<td>Jabatan</td>
<td>:</td>
<td>$jabatan</td>
</tr>

<tr>
<td>Gaji</td>
<td>:</td>
<td>$gaji</td>
</tr>

<tr>
<td>Lama Kerja</td>
<td>:</td>
<td>$kerja</td>
</tr>

<tr>
<td>Tunjangan Lama Kerja</td>
<td>:</td>
<td>$tunjangan</td>
</tr>

<tr>
<td>Status Kerja</td>
<td>:</td>
<td>$status_kerja</td>
</tr>

<tr>
<td>Bonus</td>
<td>:</td>
<td>$bonus</td>
</tr>

<tr>
<td><b>Gaji Kotor</b></td>
<td>:</td>
<td>$gaji_kotor</td>
</tr>


<tr>
<td><h6>Potongan</h6></td>
</tr>
<tr>
<br>
<td>BPJS</td>
<td>:</td>
<td>$bpjs</td>
</tr>

<tr>
<td>Pinjaman</td>
<td>:</td>
<td>$pinjaman</td>
</tr>

<tr>
<td>Tabungan</td>
<td>:</td>
<td>$tabungan</td>
</tr>

<tr>
<td>lainnya</td>
<td>:</td>
<td>$lainnya</td>
</tr>

<tr>
<td><b>Total Potongan</b></td>
<td>:</td>
<td>$total_potongan</td>
</tr>

<tr>
<td><h6>Total</h6></td>
</tr>
<tr>
<br>
<td><b>Gaji Bersih</b></td>
<td>:</td>
<td>$gaji_bersih</td>
</tr>

";
echo "</table>";
echo "</center>";
