<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Variabel POST</title>
</head>

<body>
   <form action="" method="post">
      <table>
         <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama_lengkap"></td>
         </tr>
         <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir"></td>
         </tr>
         <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir"></td>
         </tr>
         <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
               <input type="radio" name="jk" value="Laki-laki"> Laki-laki<br>
               <input type="radio" name="jk" value="Perempuan"> Perempuan
            </td>
         </tr>
         <tr>
            <td>Agama</td>
            <td>:</td>
            <td>
               <select name="agama">
                  <option value="Islam">Islam</option>
                  <option value="Protestan">Protestan</option>
                  <option value="Khatholik">Khatholik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Konghuchu">Konghuchu</option>
               </select>
            </td>
         </tr>
         <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" cols="30" rows="4"></textarea></td>
         </tr>
         <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>
               <input type="checkbox" name="hobi"> Olahraga
               <input type="checkbox" name="hobi"> Memasak <br>
               <input type="checkbox" name="hobi"> Shooping
               <input type="checkbox" name="hobi"> Traveling <br>
            </td>
         </tr>
         <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><input type="number" name="telepon"></td>
         </tr>
         <tr>
            <td>E-Mail</td>
            <td>:</td>
            <td><input type="email" name="email"></td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td>
               <button type="submit">Submit</button>
               <button type="reset">Batal</button>
            </td>
         </tr>
      </table>
   </form>
</body>

</html>