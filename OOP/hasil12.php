<?php
if (isset($_POST['daftar'])) {
$jurusan = $_POST['jurusan'];
$nama = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$tempatLahir = $_POST['tempat_lahir'];
$tanggalLahir = $_POST['tanggal_lahir'];
$HpSiswa =$_POST['no_siswa'];
$emailSiswa =$_POST['email_siswa'];
$prov = $_POST['provinsi'];
$kab = $_POST['kota'];
$sekolah = $_POST['nama_sekolah'];
$alamatSekolah = $_POST['alamat_sekolah'];
$ortu = $_POST['nama_ortu'];
$pekerjaanOrtu =$_POST['pekerjaan'];
$HpOrtu = $_POST['no_ortu'];
$alamat = $_POST['alamat'];

class data{

    public function data_siswa($jurusan1,$nama1,$jk1,$tempatLahir1,$tanggalLahir1,$HpSiswa1,$emailSiswa1){
        echo "<h2> Data Diri </h2>";
        echo "Jurusan : ".$jurusan1."<br>";
        echo "Nama : ".$nama1."<br>";
        echo "Jenis Kelamin : ".$jk1."<br>";
        echo "Tempat Lahir : ".$tempatLahir1."<br>";
        echo "Tanggal Lahir : ".$tanggalLahir1."<br>";
        echo "No HP siswa : ".$HpSiswa1."<br>";
        echo "Email siswa : ".$emailSiswa1."<br>";
        
    }
    public function alamat($prov1,$kab1){
        echo "<h2> Alamat Calon Pendaftar </h2>";
        echo "Provinsi : ".$prov1."<br>";
        echo "Kota / Kab : ".$kab1."<br>";
    }
    public function sekolah($sekolah1,$alamatSekolah1){
        echo "<h2> Data Asal Sekolah </h2>";
        echo "Nama Asal Sekolah : ".$sekolah1."<br>";
        echo "Alamat Asal Sekolah : ".$alamatSekolah1."<br>";
       
        
    }
    public function ortu($ortu1,$pekerjaanOrtu1,$HpOrtu1,$alamat1){
        echo "<h2> Alamat Calon Pendaftar </h2>";
        echo "Nama Ortu / Wali : ".$ortu1."<br>";
        echo "Pekerjaan Ortu : ".$pekerjaanOrtu1."<br>";
        echo "No HP Ortu : ".$HpOrtu1."<br>";
        echo "Alamat : ".$alamat1."<br>";
    }
}

$cetak = new data();

echo $cetak->data_siswa($jurusan,$nama,$jk,$tempatLahir,$tanggalLahir,$HpSiswa,$emailSiswa);
echo $cetak->alamat($prov,$kab);
echo $cetak->sekolah($sekolah,$alamatSekolah);
echo $cetak->ortu($ortu,$pekerjaanOrtu,$HpOrtu,$alamat);
}