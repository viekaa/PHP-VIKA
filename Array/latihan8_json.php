

    <?php

$novelJSON='[
    {
        "No" : 1,
        "Judul": "Laskar Pelangi",
        "Genre": "Fiksi",
        "Penulis": "Andrea Hirata",
        "Penerbit": "Bentang Pustaka",
        "Rilis": 2005
    },
    {
        "No" : 2,
        "Judul": "Bumi Manusia",
        "Genre": "Sejarah, Fiksi",
        "Penulis": "Pramoedya Ananta Toer",
        "Penerbit": "Lentera Hati",
        "Rilis": 1980
    },
    {
        "No" : 3,
        "Judul": "Sebuah Seni untuk Bersikap Bodo Amat",
        "Genre": "Motivasi, Non-Fiksi",
        "Penulis": "Mark Manson",
        "Penerbit": "Gramedia Pustaka Utama",
        "Rilis": 2016
    },
    {
        "No" : 4,
        "Judul": "Hujan Bulan Juni",
        "Genre": "Fiksi",
        "Penulis": "Sapardi Djoko Damono",
        "Penerbit": " Gramedia Pustaka Utama",
        "Rilis": 1994
    },
    {
        "No" : 5,
        "Judul": "5 cm",
        "Genre": "Fiksi",
        "Penulis": "Donny Dhirgantoro",
        "Penerbit": " Elex Media Komputindo",
        "Rilis": 2005
    },
    {
        "No" : 6,
        "Judul": "Pulang",
        "Genre": "Fiksi",
        "Penulis": "Tere Liye",
        "Penerbit": "Republika",
        "Rilis": 2012
    },
    {
        "No" : 7,
        "Judul": "The Hunger Games",
        "Genre": "Dystopia, Fiksi",
        "Penulis": " Suzanne Collins",
        "Penerbit": "Scholastic Press",
        "Rilis": 2008
    },
    {
        "No" : 8,
        "Judul": "The Alchemist",
        "Genre": "Fiksi, Filosofi",
        "Penulis": " Paulo Coelho",
        "Penerbit": "HarperCollins",
        "Rilis": 1988
    },
    {
        "No" : 9,
        "Judul": "The Last Heir",
        "Genre": "Fantasi",
        "Penulis": "Rebecca Roanhorseaka",
        "Penerbit": "Saga Press",
        "Rilis": 2024
    },
    {
        "No" : 10,
        "Judul": "Fates Shadow",
        "Genre": "Fiksi Ilmiah",
        "Penulis": "Ken Liu",
        "Penerbit": "Tor Books",
        "Rilis": 2024
    },
    {
        "No" : 11,
        "Judul":"The Echo of Silence",
        "Genre": "Thriller",
        "Penulis": "Lisa Jewell",
        "Penerbit": "Atria Books",
        "Rilis": 2024
    },
    {
        "No" : 12,
        "Judul": "A Dance with Ghosts",
        "Genre": "Horor",
        "Penulis": "Stephen Graham Jones",
        "Penerbit": "Gallery Books",
        "Rilis": 2024
    },
    {
        "No" : 13,
        "Judul": "The Summer We Lost",
        "Genre": "Romansa",
        "Penulis": "Emily Henry",
        "Penerbit": "Berkley",
        "Rilis": 2024
    },
    {
        "No" : 14,
        "Judul": "The Eye of the World",
        "Genre": "Fantasi",
        "Penulis": " Robert Jordan",
        "Penerbit": " Tor Books",
        "Rilis": 1990
    },
    {
        "No" : 15,
        "Judul": "The God of Small Things",
        "Genre": "Fiksi",
        "Penulis": "Arundhati Roy",
        "Penerbit": "HarperCollins",
        "Rilis": 1990
    },
    {
        "No" : 16,
        "Judul": "The Witching Hour",
        "Genre": "Horor",
        "Penulis": "Anne Rice",
        "Penerbit": "Knopf",
        "Rilis": 1990
    },
    {
        "No" : 17,
        "Judul": "It",
        "Genre": "Horor",
        "Penulis": " Stephen King",
        "Penerbit": " Viking Penguin",
        "Rilis": 1990
    },
    {
        "No" : 18,
        "Judul": "5 cm",
        "Genre": "Fiksi",
        "Penulis": "Donny Dhirgantoro",
        "Penerbit": " Elex Media Komputindo",
        "Rilis": 1990
    },
    {
        "No" : 19,
        "Judul": "The Pelican Brief",
        "Genre": "Thriller",
        "Penulis": "John Grisham",
        "Penerbit": "Doubleday",
        "Rilis": 1990
    },
    {
        "No" : 20,
        "Judul": "Xieran",
        "Genre": "Fantasi",
        "Penulis": "Xiez",
        "Penerbit": "Xi Zhu fyu",
        "Rilis": 1990
    }
    ]';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Buku Novel</title>
  <!-- Css Tabel -->
  <style>
    table {
      width: 80%;
      border-collapse: collapse;
      margin: 20px auto;
    }
    th, td {
      padding: 10px;
      text-align: left;
      border: 1px solid #ddd;
    }
    th {
      background-color:#f9f9f9 ;
    }
  </style>

</head>
<body>
  <center>
    <h2><u>Daftar Buku Novel</u></h2>
    <table>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Genre</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Rilis</th>
      </tr>
      <?php
      $list = json_decode($novelJSON);
      foreach ($list as $novel) {
          echo "<tr>";
          echo "<td>{$novel->No}</td>";
          echo "<td>{$novel->Judul}</td>";
          echo "<td>{$novel->Genre}</td>";
          echo "<td>{$novel->Penulis}</td>";
          echo "<td>{$novel->Penerbit}</td>";
          echo "<td>{$novel->Rilis}</td>";
          echo "</tr>";
      }
      ?>
    </table>
  </center>
</body>
</html>
    
