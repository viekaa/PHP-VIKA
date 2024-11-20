      <?php

//class mobil
class mobil{
    //property
    var $merk;
    var  $warna;
    
    //method mobil
    function tampilkan_merk(){
        return "Merk Mobil  TOYOTA <br/>";
    }
    
    function warna_mobil(){
        return "Warna mobil  Merah <br/>";
    }
    
}
//instansiasi class mobil
$a = new mobil();
 
//memanggil method tampilkan_merk dari class mobil
echo $a->tampilkan_merk();
 
//memanggil method warna_mobil dari class mobil
echo $a->warna_mobil();
?>