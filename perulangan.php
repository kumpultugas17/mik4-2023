<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Perulangan (Looping)</title>
</head>

<body>
   <h4>Perulangan (Looping)</h4>
   <?php
   echo "Angka Tanpa Perulangan : <br>";
   echo "1<br>";
   echo "2<br>";
   echo "3<br>";
   echo "4<br>";
   echo "5<br>";
   echo "6<br>";
   echo "7<br>";
   echo "8<br>";
   echo "9<br>";
   echo "10<br>";

   echo "<br>Angka dengan Perulangan : Ascending <br>";
   for ($i = 1; $i <= 10; $i++) {
      echo "{$i} - Belajar Web Programming<br>";
   }

   echo "<br>Angka dengan Perulangan : Descanding <br>";
   echo "<table border=1>
      <tr>
         <th>No</th>
         <th>Kalimat</th>
      </tr>";
   for ($i = 10; $i >= 1; $i--) {
      echo "
            <tr>
               <td>{$i}</td>
               <td>Belajar Web Programming</td>
            </tr>
         ";
   }
   echo "</table>";

   $nama = ['Andre', 'Indri', 'Riza', 'Rafly', 'Iwan', 'Ahmad', 'Heni', 'Hestri', 'Mila', 'Laila'];
   for ($i = 0; $i < count($nama); $i++) {
      if ($i == 0) {
         echo "Kelompok 1<br>";
      }
      echo "{$i} - $nama[$i]<br>";

      if ($i == 5) {
         echo "Kelompok 2<br>";
      }
   }
   ?>
</body>

</html>