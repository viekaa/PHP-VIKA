<?php

class ppdb{

    public function data_diri( $jurusan,$nama,$jk,$tempat,$tgl,$noSiswa)
    {
        echo "Jurusan : $jurusan <br>";
        echo "Nama Lengkap : $nama <br>";
        echo "Jenis Kelamin : $jk <br>";
        echo "Tempat Lahir : $tempat <br>";
        echo "Tanggal Lahir : $tgl <br>";
        echo "No Hp Siswa : $noSiswa <br>";
    }

    public function alamat_calon( $prov,$kab,$kec,$desa,$alamat,$kode)
    {
        echo "Provinsi : $prov <br>";
        echo "Kab/Kota : $kab <br>";
        echo "Kecamatan : $kec <br>";
        echo "Desa/Kelurahan : $desa <br>";
        echo "Alamat : $alamat <br>";
        echo "Kode Pos : $kode <br>";
    }

    public function data_sekolah($nama_sekolah,$alamat_sekolah)
    {
        echo "Nama Asal Sekolah : $nama_sekolah <br>";
        echo "Alamat Sekolah : $alamat_sekolah <br>";
    }

    public function data_ortu($nama,$pekerjaan,$noHp,$alamat)
    {
        echo "Nama Lengkap Ayah/Ibu/Wali : $nama <br>";
        echo "Pekerjaan Ayah/Ibu/Wali : $pekerjaan <br>";
        echo "No HP yang bisa di hubungi : $noHp <br>";
        echo "Alamat : $alamat <br>";
    }
}

// Instansiasi/ Membuat Object

$cetak = new ppdb();
echo "<h4>Data Siswa</h4>";
echo $cetak->data_diri("RPL","Vika Aryani","Perempuan","Wonogiri","29 Mei 2006","082115075160");
echo "<hr>";
echo "<h4> Alamat Calon Pendaftar </h4>";
echo $cetak->alamat_calon("Jawa Barat","Bandung","Dayeuhkolot","Cangkuang Wetan","TCI 2","4052");
echo "<hr>";
echo "<h4> Data Asal Sekolah </h4>";
echo $cetak->data_sekolah("SMP BU NU","Brebes");
echo "<hr>";
echo "<h4> Data Orangtua </h4>";
echo $cetak->data_ortu("Sudirso","Wiraswasta","089693627780","TCI 2");

?>