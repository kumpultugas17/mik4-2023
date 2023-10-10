<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>UTS Semester 1</title>
   <link rel="stylesheet" href="bootstrap-5.2/css/bootstrap.min.css">
</head>

<body>
   <div class="container">
      <div class="row">
         <div class="col-12">
            <form action="" method="post">
               <div class="form-floating mb-3">
                  <input type="text" name="nama_karyawan" class="form-control" id="floatingInput" placeholder="Nama Karyawan">
                  <label for="floatingInput">Nama Karyawan</label>
               </div>
               <label class="form-label" for="">Golongan</label>
               <select name="golongan" class="form-select" id="">
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
               </select>
               <label class="form-label" for="">Tahun Masuk Kerja</label>
               <input type="text" class="form-control" name="thn_masuk">
               <label class="form-label" for="">Jumlah Anak</label>
               <input type="text" class="form-control" name="jumlah_anak">
               <button type="submit" class="btn btn-outline-primary" name="submit">Submit</button>
            </form>

            <?php
            $nama_karyawan = $_POST['nama_karyawan'];
            $golongan = $_POST['golongan'];
            $thn_masuk = $_POST['thn_masuk'];
            $jumlah_anak = $_POST['jumlah_anak'];
            // No 1
            switch ($golongan) {
               case 'A':
                  $gaji = 3500000;
                  break;
               case 'B':
                  $gaji = 2750000;
                  break;
               case 'C':
                  $gaji = 2200000;
                  break;
               default:
                  $gaji = 1500000;
                  break;
            }
            // No 2
            $lama_kerja = 2023 - $thn_masuk;
            // No 3
            if ($lama_kerja >= 5) {
               $bonus = 2000000;
            } else {
               $bonus = 750000;
            }
            // No 4
            if ($jumlah_anak > 3) {
               $tunjangan_anak = 200000 * 3;
            } else {
               $tunjangan_anak = 200000 * $jumlah_anak;
            }
            // No 5
            $total = $gaji + $bonus + $tunjangan_anak;
            // Hasil
            echo "{$nama_karyawan}<br>";
            echo "{$golongan}<br>";
            echo "{$lama_kerja}<br>";
            echo "{$jumlah_anak}<br>";
            echo "{$gaji}<br>";
            echo "{$tunjangan_anak}<br>";
            echo "{$bonus}<br>";
            echo "{$total}<br>";
            ?>
         </div>
      </div>
   </div>


   <script src="bootstrap-5.2/js/bootstrap.min.js"></script>
</body>

</html>