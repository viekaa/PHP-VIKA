<?php


// class

class penggajihan{

    // property
    public $gaji;
    public $gaji_bersih;
    public $tunjangan;
    public $potongan;

    // method

    public function jabatan($nama,$jabatan){
        if ($jabatan=="Direktur") {
            $this->gaji = 10000000;
            echo "Nama Karyawan : $nama<br>";
            echo "Jabatan : $jabatan<br>";
            echo "Gaji pokok : $this->gaji <br>";
        }elseif($jabatan=="Manager") {
            $this->gaji = 7500000;
            echo "Nama Karyawan : $nama<br>";
            echo "Jabatan : $jabatan<br>";
            echo "Gaji pokok : $this->gaji <br>";
        }elseif($jabatan=="Karyawan") {
            $this->gaji = 500000;
            echo "Nama Karyawan : $nama<br>";
            echo "Jabatan : $jabatan<br>";
            echo "Gaji pokok : $this->gaji <br>";
        }elseif ($jabatan=="OB") {
            $this->gaji = 250000;
            echo "Nama Karyawan : $nama<br>";
            echo "Jabatan : $jabatan<br>";
            echo "Gaji pokok : $this->gaji <br>";
        }else {
           echo "Anda tidak bekerja disini<br>";
        }
}

    public function tunjangan($pendidikan){
        if ($pendidikan=="S1") {
            $this->tunjangan =1000000;
            echo "Pendidikan : $pendidikan<br>";
            echo "Tunjangan Pendidikan : $this->tunjangan<br> ";

        }elseif ($pendidikan=="SMK") {
            $this->tunjangan =750000;
            echo "Pendidikan : $pendidikan<br>";
            echo "Tunjangan Pendidikan : $this->tunjangan<br> ";
            
        }elseif ($pendidikan=="SMP") {
            $this->tunjangan =500000;
            echo "Pendidikan : $pendidikan<br>";
            echo "Tunjangan Pendidikan : $this->tunjangan<br> ";
            
        }elseif ($pendidikan=="SD") {
            $this->tunjangan =250000;
            echo "Pendidikan : $pendidikan<br>";
            echo "Tunjangan Pendidikan : $this->tunjangan<br> ";
            
        }else {
            echo "Tidak Mendapat tunjangan<br>";
        }
    }

        public function potongan($tabungan,$pinjaman){
         echo "Tabungan : $tabungan<br>";
         echo "Pinjaman : $pinjaman<br>";
         $this->potongan= $tabungan + $pinjaman;
         echo "Total Potongan : $this->potongan <br>";
        }
        
        public function gajiku(){

        $this->gaji_bersih = $this->gaji + $this->tunjangan - $this->potongan;
        echo "Total Gaji Bersih : $this->gaji_bersih<br>";
        }
    }

// instansiasi

$cetak = new penggajihan();

echo "<h3> Gaji Pokok </h3>";
echo $cetak->jabatan("Vika","OB");
echo "<hr>";
echo "<h3> tunjangan </h3>";
echo $cetak->tunjangan("S1");
echo "<hr>";
echo "<h3> Potongan </h3>";
echo $cetak->potongan(500000,300000);
echo "<hr>";
echo "<h3> Total Gaji Bersih </h3>";
echo $cetak->gajiku();
echo "<hr>"
?>