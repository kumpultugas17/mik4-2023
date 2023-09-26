<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Latihan 2</title>
</head>

<body>
   <h4>Hitung Gaji Karyawan</h4>
   <?php
   $nama = 'M. Iqbal Adenan';
   $status = true;
   $tunjangan_anak = 700000;
   $gaji_pokok = 2500000;
   $gaji_kotor = @$_POST['nama'] + @$_POST['nama'];

   echo 'Nama Karyawan : ' . $nama . '<br>';
   echo 'Status Menikah : ' . $status . '<br>';
   echo 'Tunjangan Anak : ' . $tunjangan_anak . '<br>';
   echo 'Gaji Pokok : ' . $gaji_pokok . '<br>';
   echo 'Gaji Kotor : ' . $gaji_kotor . '<br>';
   ?>
</body>

</html>