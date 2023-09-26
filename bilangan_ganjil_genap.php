<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bilangan Ganjil Genap</title>
</head>

<body>
   <?php
   $nilai = 2;
   if ($nilai % 2 == 0) {
      echo "{$nilai} -> Bilangan Genap";
   } else {
      echo "{$nilai} -> Bilangan Ganjil";
   }
   ?>
</body>

</html>