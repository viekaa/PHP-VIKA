<?php

$jurusan ="TBSM";
$kelas ="12 TBSM";

// JURUSAN RPL
if ($jurusan == "RPL") {
    if ($kelas == "10 RPL") {
     echo "Ini Kelas 10 RPL ";
    }elseif($kelas == "11 RPL") {
        echo "ini Kelas 11 RPL";
    }elseif($kelas == "12 RPL") {
        echo "ini Kelas 12 RPL";
    }else{
        echo "Tidak ada kelas ";
    }
    
 // JURUSAN TKRO
}elseif($jurusan == "TKRO") {
    if ($kelas == "10 TKRO") {
        echo "Ini Kelas 10 TKRO ";
       }elseif($kelas == "11 TKRO") {
           echo "ini Kelas 11 TKRO";
       }elseif($kelas == "12 TKRO") {
           echo "ini Kelas 12 TKRO";
       }else{
           echo "Tidak ada kelas ";
       }

//  JURUSAN TBSM
}elseif($jurusan == "TBSM") {
    if ($kelas == "10 TBSM") {
        echo "Ini Kelas 10 TBSM ";
       }elseif($kelas == "11 TBSM") {
           echo "ini Kelas 11 TBSM";
       }elseif($kelas == "12 TBSM") {
           echo "ini Kelas 12 TBSM";
       }else{
           echo "Tidak ada kelas ";
       }
}else{
    echo "Tidak ada jurusan ";
}
?>