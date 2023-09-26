<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <!-- perulangan statis-->
   <?php
   $batas = 7;
   for ($i = 0; $i < $batas; $i++) {
      echo "{$i}<br>";
   }
   ?>
   <hr>
   <!-- perulangan dinamis -->
   <form action="" method="post">
      Masukkan jumlah perulangan:
      <input type="number" name="batas"><br>
      Text: <input type="text" name="text">
      <button type="submit">Submit</button>
   </form>
   <?php
   $batas_perulangan = @$_POST['batas'];
   $text = @$_POST['text'];
   for ($j = 0; $j < $batas_perulangan; $j++) {
      echo "{$text}<br>";
   }
   ?>
</body>

</html>