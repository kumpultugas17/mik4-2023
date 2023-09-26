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
         <select name="jabatan">
            <option value="Manager">Manager</option>
            <option value="Sekretaris">Sekretaris</option>
            <option value="Bendahara">Bendahara</option>
            <option value="Staff">Staff</option>
         </select> <br>
         <label for="">Status</label>
         <input type="radio" name="status" value="Menikah"> Menikah
         <input type="radio" name="status" value="Belum Menikah"> Belum Menikah <br>
         <button type="submit" name="submit">Submit</button>
      </form>
   </fieldset>

   <?php if (isset($_POST['submit'])) { ?>
      <fieldset>
         <legend>OUTPUT</legend>
         <?php
         switch ($_POST['jabatan']) {
            case 'Manager':
               $gp = 20000000;
               break;
            case 'Sekretaris':
               $gp = 15000000;
               break;
            case 'Bendahara':
               $gp = 10000000;
               break;
            default:
               $gp = 7000000;
               break;
         }

         // proses hitung gaji
         if ($_POST['status'] == 'Menikah') {
            $tunjangan_kelauarga = 0.25 * $gp;
         } else {
            $tunjangan_kelauarga = 0;
         }

         $gaji_bersih = $tunjangan_kelauarga + $gp;

         // output
         echo "Nama Karyawan: " . @$_POST['nama'] . "<br>";
         echo "Jabatan: " . @$_POST['jabatan'] . "<br>";
         echo "Status: " . @$_POST['status'] . "<br>";
         echo "Tunjangan Kelauraga: " . $tunjangan_kelauarga . "<br>";
         echo "Gaji Pokok: " . $gp . "<br>";
         echo "Gaji Bersih: " . $gaji_bersih . "<br>";
         ?>
      </fieldset>
   <?php } ?>
</body>

</html>