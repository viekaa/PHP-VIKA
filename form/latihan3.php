<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 Form</title>
</head>
<body>
    <center>
    <img src="smk.png" alt="" width="15%" height="10%">
    <form action="hasil.php" method="post">
        <h2> From Biodata Diri </h2>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_kamu"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl_lahir"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                <input type="radio" name="jenis_kelamin"
                value="laki-laki">laki-laki
                <input type="radio" name="jenis_kelamin"
                value="perempuan">perempuan
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                <textarea name="alamat" cols="30" rows="10">
                </textarea>
                </td>
            </tr>

            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><select name="agama">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="budha">Budha</option>
                    <option value="kong hu chu">Kong hu chu</option>
                </select>
                </td>
            </tr>

            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td>
                <select name="pendidikan">
                    <option value="sd">SD</option>
                    <option value="smp">SMP</option>
                    <option value="smk">SMK</option>
                </select>
                </td>
            </tr>

            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                <select name="status">
                    <option value="menikah">Sudah Menikah</option>
                    <option value="belum menikah">Belum Menikah</option>
                </select>
                </td>
            </tr>

            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                <input type="checkbox" name="hobi" 
                value="Membaca">Membaca
                <input type="checkbox" name="hobi"
                value="Menulis">Menulis
                <input type="checkbox" name="hobi"
                value="Ngepush">Ngepush
                </td>
            </tr>
            
            <tr>
                <td>Cita-cita</td>
                <td>:</td>
                <td>
                <select name="cita_cita">
                    <option value="programmer">Programmer</option>
                    <option value="ceo">CEO</option>
                </select>
                </td>
            </tr>

            <tr>
                <td>Kata-kata Bijak</td>
                <td>:</td>
                <td>
                <textarea name="kata_kamu"
                cols="30" rows="10">
                </textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                <input type="submit" name="proses" 
                value="KIRIM">
            </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>

