<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Data Nilai</title>
</head>

<body>
   <?php
   // memasukkan nama dan nilai
   $nama = "Zulkifli";
   $nilai_tugas = 60;
   $nilai_uts = 60;
   $nilai_uas = 60;

   //menghitung nilai 
   $nilai_akhir = ($nilai_tugas * 0.2) + ($nilai_uts * 0.3) + ($nilai_uas * 0.5);

   // if tunggal
   if ($nilai_akhir >= 60) {
      $keterangan = "Lulus";
   } else {
      $keterangan = "Tidak Lulus";
   }

   // if majemuk
   if ($nilai_akhir >= 85) {
      $nilai_huruf = "A";
   } elseif ($nilai_akhir >= 75) {
      $nilai_huruf = "B";
   } elseif ($nilai_akhir >= 60) {
      $nilai_huruf = "C";
   } elseif ($nilai_akhir >= 50) {
      $nilai_huruf = "D";
   } else {
      $nilai_huruf = "E";
   }


   // menampilkan nilai
   echo "Nama : {$nama}<br>";
   echo "Nilai Tugas : {$nilai_tugas}<br>";
   echo "Nilai UTS : {$nilai_uts}<br>";
   echo "Nilai UAS : {$nilai_uas}<br>";
   echo "Nilai Akhir : {$nilai_akhir}<br>";
   echo "Keterangan : {$keterangan}<br>";
   echo "Nilai Huruf : {$nilai_huruf}<br>";

   echo "<hr>";

   $nilai = "10";
   var_dump($nilai === "10");
   ?>
</body>

</html>