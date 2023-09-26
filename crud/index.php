<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>FORM PRODUK</title>
</head>

<body>
   <fieldset>
      <legend>FORM PRODUK</legend>
      <form action="insert.php" method="post">
         <div style="margin-bottom: 5px;">
            <label for="produk">Nama Produk</label>
            <input type="text" name="p" id="produk">
         </div>
         <div style="margin-bottom: 5px;">
            <label for="kategori">Kategori</label>
            <input type="text" name="k" id="kategori">
         </div>
         <div style="margin-bottom: 5px;">
            <label for="harga">Harga</label>
            <input type="number" name="h" id="harga">
         </div>
         <button type="submit" name="submit">Submit</button>
      </form>
   </fieldset>
   <hr>
   <fieldset>
      <legend>Data Produk</legend>
      <table border="1" cellpadding="5" cellspacing="0">
         <thead>
            <tr>
               <th>No</th>
               <th>Nama Produk</th>
               <th>Kategori</th>
               <th>Harga</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $no = 1;
            $conn = mysqli_connect('localhost', 'root', '', 'mik4_db_produk');
            $query = $conn->query("SELECT * FROM produk");
            foreach ($query as $data) :
            ?>
               <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['produk'] ?></td>
                  <td><?php echo $data['kategori'] ?></td>
                  <td><?php echo $data['harga'] ?></td>
               </tr>
            <?php endforeach ?>
         </tbody>
      </table>
   </fieldset>
</body>

</html>