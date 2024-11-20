<?php
if(isset($_POST['proses'])){
 
 $no = $_POST['no'];
 $nama = $_POST['nama'];
 $up = $_POST['pendidikan'];
 $tgl_gaji = $_POST['tgl_gaji'];
 $gaji = $_POST['jabatan'];
 $jabatan = $_POST['jabatan'];
 $kerja = $_POST['lama_kerja'];
 $status_kerja = $_POST['status'];
 $bpjs = $_POST['bpjs'];
 $pinjaman = $_POST['pinjaman'];
 $tabungan = $_POST['tabungan'];
 $lainnya = $_POST['lainnya'];
 $total_potongan = $bpjs+$pinjaman+$tabungan+$lainnya;

 if ($kerja >=5) {
  $tunjangan=1000000;
 }else {
  echo"tidak dapat tunjangan";
 };

 if($status_kerja == "Tetap") {
  $bonus = 500000;
 
}else{
 $bonus = 0;
};
 
 if($jabatan == "Kepala Sekolah") {
  $gaji = 10000000;
 
}elseif($jabatan == "Wakasek") {
  $gaji = 7500000;
}elseif($jabatan == "Guru") {
  $gaji = 5000000;
}elseif($jabatan == "OB") {
  $gaji = 2500000;
}else {
 echo  "Anda tidak bekerja";
}

$gajikotor= $gaji+$tunjangan+$bonus;
$gajibersih = $gajikotor-$total_potongan;

echo "<center>";
echo "<table>";
echo"
<tr>
<td>
<center><h2>Struk Gaji</h2></center>
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
<br>
<td>:</td>
<td>$up</td>
</tr>
<br>

<tr>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><h2><i>Gaji</i></h2></td>
</tr>
<tr>

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
<td>$gajikotor</td>
</tr>

<tr>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><h2><i>Potongan</i></h2></td>
</tr>
<tr>

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
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><h2><i>Total</i></h2></td>
</tr>
<tr>

<td><b>Gaji Bersih</b></td>
<td>:</td>
<td>$gajibersih</td>
</tr>

";
echo "</table>";
echo "</center>";

}
?>