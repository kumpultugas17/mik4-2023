<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Variabel GET</title>
</head>

<body>

   <form action="output_GET.php" method="get">
      Nama : <input type="text" name="nama"><br>
      Usia : <input type="text" name="usia"><br>
      Alamat : <input type="text" name="alamat"><br>
      Telepon : <input type="text" name="telepon"><br>
      Email : <input type="text" name="email"><br>
      <button type="submit">Submit</button>
   </form>

   <table border="1" cellspacing="0" cellpadding="5">
      <thead>
         <tr>
            <th>Nama</th>
            <th>Usia</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>E-Mail</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td><?= @$_GET['nama'] ?></td>
            <td><?php echo @$_GET['usia'] ?></td>
            <td><?= @$_GET['alamat'] ?></td>
            <td><?= @$_GET['telepon'] ?></td>
            <td><?= @$_GET['email'] ?></td>
         </tr>
      </tbody>
   </table>
</body>

</html>