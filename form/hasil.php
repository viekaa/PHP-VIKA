<?php

if(isset($_POST['proses'])) {
    $nama = $_POST['nama_kamu'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pd_akhir = $_POST['pendidikan'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita = $_POST['cita_cita'];
    $kataku = $_POST['kata_kamu'];
}
echo "<br> <br>";
echo "<h2> Biodata Diri </h2>";
echo "<table>";
echo "
<tr>
<td>Nama</td>
<td>:</td>
<td>$nama</td>
</tr>
<tr>
<td>Temat Lahir</td>
<td>:</td>
<td>$tempat_lahir</td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td>:</td>
<td>$lahir</td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td>$jenis_kelamin</td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td>$alamat</td>
</tr>
<tr>
<td>Agama</td>
<td>:</td>
<td>$agama</td>
</tr>
<tr>
<td>Pendidikan Terakhir</td>
<td>:</td>
<td>$pd_akhir</td>
</tr>
<tr>
<td>Status</td>
<td>:</td>
<td>$status</td>
</tr>
<tr>
<td>Hobi</td>
<td>:</td>
<td>$hobi</td>
</tr>
<tr>
<td>Cita-cita</td>
<td>:</td>
<td>$cita</td>
</tr>
<tr>
<td>Kata-kata Bijak</td>
<td>:</td>
<td>$kataku</td>
</tr>
";
echo "</table>";
?>