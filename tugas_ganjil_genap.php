<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tugas Ganjil Genap</title>
</head>

<body>

   <table border=1>
      <tr>
         <th>Angka</th>
         <th>Keterangan</th>
      </tr>
      <?php
      for ($i = 0; $i <= 10; $i++) {
         if ($i % 2 == 0) {
            echo "<tr>
            <td>{$i}</td>
            <td bgcolor='aqua'>Genap</td>
         </tr>";
         } else {
            echo "<tr>
            <td>{$i}</td>
            <td bgcolor='salmon'>Ganjil</td>
         </tr>";
         }
      }
      ?>

   </table>
</body>

</html>