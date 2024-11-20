<?php

$provinsi = "Jawa Timur";
$kota ="Kediri";

// Provinsi Jawa Barat
if ($provinsi == "Jawa Barat") {
    if ($kota == "Bandung") {
      echo "Selamat datang di kota Bandung";
    }elseif ($kota == "Cimahi") {
        echo "Selamat datang di kota Cimahi";
      }elseif ($kota == "Bogor") {
        echo "Selamat datang di kota Bogor";
      }elseif ($kota == "Bekasi") {
        echo "Selamat datang di kota Bekasi";
      }elseif ($kota == "Depok") {
        echo "Selamat datang di kota Depok";
      }

// Provinsi Jawa Tengah
}elseif ($provinsi == "Jawa Tengah") {
    if ($kota == "Semarang") {
        echo "Selamat datang di kota Semarang";
      }elseif ($kota == "Pekalongan") {
          echo "Selamat datang di kota Pekalongan";
        }elseif ($kota == "Brebes") {
          echo "Selamat datang di kota Brebes";
        }elseif ($kota == "Kebumen") {
          echo "Selamat datang di kota Kebumen";
        }elseif ($kota == "Wonogiri") {
          echo "Selamat datang di kota Wonogiri";
        }

// Provinsi Jawa Timur
}elseif ($provinsi == "Jawa Timur") {
    if ($kota == "Malang") {
        echo "Selamat datang di kota Malang";
      }elseif ($kota == "Blitar") {
          echo "Selamat datang di kota Blitar";
        }elseif ($kota == "Nganjuk") {
          echo "Selamat datang di kota Nganjuk";
        }elseif ($kota == "Surabaya") {
          echo "Selamat datang di kota Surabaya";
        }elseif ($kota == "Kediri") {
          echo "Selamat datang di kota Kediri";
        }
}else{
    echo "Provinsi tidak tersedia";
}


?>