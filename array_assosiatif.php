<?php
$mahasiswa = array(
   [
      "nim" => "224.MIK.017",
      "nama" => "Heni",
      "jk" => "Perempuan",
      "alamat" => "Palangkaraya",
      "telepon" => "0852***",
      "email" => "heni@gmail.com"
   ],
   [
      "nim" => "224.MIK.025",
      "nama" => "Reza",
      "jk" => "Laki-laki",
      "alamat" => "Banjarmasin",
      "telepon" => "0813***",
      "email" => "reza@gmail.com"
   ]
);
foreach ($mahasiswa as $mhs) {
   echo "NIM : {$mhs['nim']}<br>";
   echo "Nama : {$mhs['nama']}<br>";
   echo "Jenis Kelamin : {$mhs['jk']}<br>";
   echo "<hr>";
}

echo "<table border=1 cellspacing=0 cellpadding=5>
   <tr>
      <th>NIM</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
      <th>Telepon</th>
      <th>E-Mail</th>
   </tr>";
foreach ($mahasiswa as $mhs) {
   echo "<tr>
         <td>{$mhs['nim']}</td>
         <td>{$mhs['nama']}</td>
         <td>{$mhs['jk']}</td>
         <td>{$mhs['alamat']}</td>
         <td>{$mhs['telepon']}</td>
         <td>{$mhs['email']}</td>
      </tr>";
}
echo "</table>";
