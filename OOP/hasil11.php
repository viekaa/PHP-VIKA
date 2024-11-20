<?php
if (isset($_POST['proses'])) {
    
    $nama = $_POST['nama'] ;
    $kelas = $_POST['kelas'] ;
    $jurusan = $_POST['jurusan'] ;

    // Nilai matematika
    $harian_mtk = $_POST['nilaiHarianMtk'] ;
    $tugas_mtk = $_POST['nilaiTugasMtk'] ;
    $uts_mtk = $_POST['nilaiUtsMtk'] ;
    $uas_mtk = $_POST['nilaiUasMtk'] ;

    // Nilai Basindo
    $harian_Indo = $_POST['nilaiHarianIndo'] ;
    $tugas_Indo = $_POST['nilaiTugasIndo'] ;
    $uts_Indo = $_POST['nilaiUtsIndo'] ;
    $uas_Indo = $_POST['nilaiUasIndo'] ;

    // Nilai Inggris
    $harian_Inggris = $_POST['nilaiHarianInggris'] ;
    $tugas_Inggris = $_POST['nilaiTugasInggris'] ;
    $uts_Inggris = $_POST['nilaiUtsInggris'] ;
    $uas_Inggris = $_POST['nilaiUasInggris'] ;

    // Nilai Produktif
    $harian_Produktif = $_POST['nilaiHarianProduktif'] ;
    $tugas_Produktif = $_POST['nilaiTugasProduktif'] ;
    $uts_Produktif = $_POST['nilaiUtsProduktif'] ;
    $uas_Produktif = $_POST['nilaiUasProduktif'] ;

    class RaportSiswa {
        public $grade;
        public $rata;

        public function rata_rata($harian, $tugas, $uts, $uas) {
            $this->rata = ($harian + $tugas + $uts + $uas) / 4; 

            if ($this->rata >=75) {
                $this->grade = "Lulus";
              }else {
                $this->grade = "Tidak Lulus";
              }
        }
    }

    $mtk = new RaportSiswa();
    $mtk->rata_rata($harian_mtk, $tugas_mtk, $uts_mtk, $uas_mtk);

    $indo = new RaportSiswa();
    $indo->rata_rata($harian_Indo, $tugas_Indo, $uts_Indo, $uas_Indo);

    $inggris = new RaportSiswa();
    $inggris->rata_rata($harian_Inggris, $tugas_Inggris, $uts_Inggris, $uas_Inggris);

    $prod = new RaportSiswa();
    $prod->rata_rata($harian_Produktif, $tugas_Produktif, $uts_Produktif, $uas_Produktif);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Raport</title>
  <style>
    table {
      border-collapse: collapse;
    }
  </style>
</head>
<body>
  <center>
    <h2><u>Hasil Raport</u></h2>
    <br><br>
    <table width="20%" >
      <tr>
        <td>Nama Siswa</td>
        <td>:</td>
        <td><?php echo $nama; ?></td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td>:</td>
        <td><?php echo $kelas; ?></td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td><?php echo $jurusan; ?></td>
      </tr>
    </table>
  <br><br><br><br>
    <table border="1" width="60%" cellpadding="20px">
      <tr>
        <th>Mapel</th>
        <th>Harian</th>
        <th>Tugas</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Rata-rata</th>
        <th>Grade</th>
      </tr>
      <tr>
        <td>Matematika</td>
        <td><?php echo $harian_mtk; ?></td>
        <td><?php echo $tugas_mtk; ?></td>
        <td><?php echo $uts_mtk; ?></td>
        <td><?php echo $uas_mtk; ?></td>
        <td><?php echo $mtk->rata; ?></td>
        <td><?php echo $mtk->grade; ?></td>
      </tr>
      <tr>
        <td>Bahasa Indonesia</td>
        <td><?php echo $harian_Indo; ?></td>
        <td><?php echo $tugas_Indo; ?></td>
        <td><?php echo $uts_Indo; ?></td>
        <td><?php echo $uas_Indo; ?></td>
        <td><?php echo $indo->rata; ?></td>
        <td><?php echo $indo->grade; ?></td>
      </tr>
      <tr>
        <td>Bahasa Inggris</td>
        <td><?php echo $harian_Inggris; ?></td>
        <td><?php echo $tugas_Inggris; ?></td>
        <td><?php echo $uts_Inggris; ?></td>
        <td><?php echo $uas_Inggris; ?></td>
        <td><?php echo $inggris->rata; ?></td>
        <td><?php echo $inggris->grade; ?></td>
      </tr>
      <tr>
        <td>Produktif</td>
        <td><?php echo $harian_Produktif; ?></td>
        <td><?php echo $tugas_Produktif; ?></td>
        <td><?php echo $uts_Produktif; ?></td>
        <td><?php echo $uas_Produktif; ?></td>
        <td><?php echo $prod->rata; ?></td>
        <td><?php echo $prod->grade; ?></td>
      </tr>
    </table>
  </center>
</body>
</html>
