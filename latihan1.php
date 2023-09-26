<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Latihan 1</title>
</head>

<body>
   <h4>Belajar Tipe Data & Variabel</h4>
   <?php
   $nama = 'M. Iqbal Adenan';
   $umur = 27;
   $tgl_lahir = '2000-10-17';
   $tinggi_badan = 55.7;
   $lulus = false;
   // true = benar
   // false = salah

   // cara menampilkan tipe data
   var_dump($nama);
   var_dump($umur);
   var_dump($tgl_lahir);
   var_dump($tinggi_badan);
   var_dump($lulus);

   echo 'Nama : ' . $nama;
   echo '<br>Umur : ' . $umur;
   echo '<br>Tanggal Lahir : ' . $tgl_lahir;
   ?>
</body>

</html>