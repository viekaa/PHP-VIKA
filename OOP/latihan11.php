<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapot Siswa</title>
</head>
<body>
    <center>
        <h2>Raport Siswa</h2>
        <form action="hasil11.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <input type="text" name="kelas">
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan">
            <option value="Rekayasa Perangkat Lunak">
                Rekayasa Perangkat Lunak </option>
                <option value="Teknik Kendaraan Ringan">
                    Teknik Kendaraan Ringan
                </option>
                <option value="Teknik Bisnis Sepeda Motor">
                    Teknik Bisnis Sepeda Motor
                </option>
                    </select>
                </td>
            </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
            <h3>Nilai Matematika</h3>
            </td>
            </tr>
            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td>
                    <input type="number" name="nilaiHarianMtk">
                </td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td>
                <input type="number" name="nilaiTugasMtk">
                </td>
            </tr>
            <tr>
            <td>Nilai UTS</td>
                <td>:</td>
                <td>
                <input type="number" name="nilaiUtsMtk">
                </td>
            </tr>
            <tr>
            <td>Nilai UAS</td>
                <td>:</td>
                <td>
                <input type="number" name="nilaiUasMtk">
                </td>
            </tr>

            <tr>
            <td></td>
            <td></td>
            <td>
            <h3>Nilai Bahasa Indonesia</h3>
            </td>
            </tr>
            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td>
                    <input type="number" name="nilaiHarianIndo">
                </td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td>
                <input type="number" name="nilaiTugasIndo">
                </td>
            </tr>
            <tr>
            <td>Nilai UTS</td>
                <td>:</td>
                <td>
                <input type="number" name="nilaiUtsIndo">
                </td>
            </tr>
            <tr>
            <td>Nilai UAS</td>
                <td>:</td>
                <td>
                <input type="number" name="nilaiUasIndo">
                </td>
            </tr>

            <tr>
            <td></td>
            <td></td>
            <td>
            <h3>Nilai Bahasa Inggris</h3>
            </td>
            </tr>
            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td>
                    <input type="number" name="nilaiHarianInggris">
                </td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td>
                <input type="number" name="nilaiTugasInggris">
                </td>
            </tr>
            <tr>
            <td>Nilai UTS</td>
                <td>:</td>
                <td>
                <input type="number" name="nilaiUtsInggris">
                </td>
            </tr>
            <tr>
            <td>Nilai UAS</td>
                <td>:</td>
                <td>
                <input type="number" name="nilaiUasInggris">
                </td>
            </tr>

            <tr>
            <td></td>
            <td></td>
            <td>
            <h3>Nilai Produktif</h3>
            </td>
            </tr>
            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td>
                    <input type="number" name="nilaiHarianProduktif">
                </td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td>
                <input type="number" name="nilaiTugasProduktif">
                </td>
            </tr>
            <tr>
            <td>Nilai UTS</td>
                <td>:</td>
                <td>
                <input type="number" name="nilaiUtsProduktif">
                </td>
            </tr>
            <tr>
            <td>Nilai UAS</td>
                <td>:</td>
                <td>
                <input type="number" name="nilaiUasProduktif">
                </td>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td>
           <input type="submit" name="proses" value="Proses">
            </td>
            </tr>
            </form>
            </table>
            </center>
</body>
</htm