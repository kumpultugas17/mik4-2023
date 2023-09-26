<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Perhitungan Gaji Sederhana</title>
</head>

<body>
   <fieldset>
      <legend>FORM INPUT</legend>
      <form action="" method="post">
         <label for="nama">Nama Lengkap</label>
         <input type="text" name="nama" id="nama"> <br>
         <label for="jabatan">Jabatan</label>
         <input type="text" name="jabatan" id="jabatan"> <br>
         <label for="tunjangan">Tunjangan</label>
         <input type="number" name="tunjangan" id="tunjangan"> <br>
         <label for="gp">Gaji Pokok</label>
         <input type="number" name="gp" id="gp"> <br>
         <button type="submit" name="submit">Submit</button>
      </form>
   </fieldset>

   <?php if (isset($_POST['submit'])) { ?>
      <fieldset>
         <legend>OUTPUT</legend>
         <?php
         // proses hitung gaji
         $gaji_bersih = @$_POST['tunjangan'] + @$_POST['gp'];

         // output
         echo "Nama Karyawan: " . @$_POST['nama'] . "<br>";
         echo "Jabatan: " . @$_POST['jabatan'] . "<br>";
         echo "Tunjangan: " . @$_POST['tunjangan'] . "<br>";
         echo "Gaji Pokok: " . @$_POST['gp'] . "<br>";
         echo "Gaji Bersih: " . $gaji_bersih . "<br>";
         ?>
      </fieldset>
   <?php } ?>
</body>

</html>