<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <h2>Nilai Ujian Nasional</h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan">
                            <option value="RPL">
                                Rekayasa perangkat Lunak
                            </option>
                            <option value="TKRO">
                                Teknik Kendaraan Ringan
                            </option>
                            <option value="TBSM">
                                Teknik Bisnis Sepeda Motor
                            </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Nilai Ujian</b></td>
                </tr>
                <tr>
                    <td>Nilai B.indonesia</td>
                    <td>:</td>
                    <td>
                    <input type="number" name="b_indo">
                    </td>
                </tr>
                <tr>
                    <td>Nilai B.inggris</td>
                    <td>:</td>
                    <td>
                    <input type="number" name="b_inggris">
                    </td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td>:</td>
                    <td>
                    <input type="number" name="matematika">
                    </td>
                </tr>
                <tr>
                    <td>Nilai Produktif</td>
                    <td>:</td>
                    <td>
                    <input type="number" name="produktif">
                    </td>
                </tr>
             <tr>
                <td></td>
                <td></td>
                <td>
                <input type="submit" name="proses" value="SIMPAN">
                </input>
                </td>
             </tr>
            </table>
        </form>
    </center>
</body>
</html>
<?php
if(isset($_POST['proses'])){
 
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $indo = $_POST['b_indo'];
    $inggris = $_POST['b_inggris'];
    $mtk = $_POST['matematika'];
    $pro = $_POST['produktif'];
    $rata =$indo + $inggris+$mtk+$pro;
    $rata = $rata/4; 

    $status = ($rata >= 75) ? "TUNTAS" : "BELUM TUNTAS";


echo "<center>";
echo "<table>";
echo"
<tr>
<td>Nama</td>
<td>:</td>
<td>$nama</td>
</tr>

<tr>
<td>Kelas</td>
<td>:</td>
<td>$kelas</td>
</tr>

<tr>
<td>Jurusan</td>
<td>:</td>
<td>$jurusan</td>
</tr>

<tr>
<td>Nilai B.Indonesia</td>
<td>:</td>
<td>$indo</td>
</tr>

<tr>
<td>Nilai B.Inggris</td>
<td>:</td>
<td>$inggris</td>
</tr>

<tr>
<td>Nilai Matematika</td>
<td>:</td>
<td>$mtk</td>
</tr>

<tr>
<td>Nilai Produktif</td>
<td>:</td>
<td>$pro</td>
</tr>

<tr>
<td>Rata-rata</td>
<td>:</td>
<td>$rata</td>
</tr>

<tr>
<td>Status</td>
<td>:</td>
<td>$status</td>
</tr>
";
echo "</table>";
echo "</center>";

}
?>