<?php

$data = ['Arya', 'Alya', 'Yoga', 'Rendo', 'Niki', 'Teguh'];
$jk = ['Laki-laki', 'Perempuan'];

var_dump($data);
echo "<hr>";
var_dump($jk);
echo "<hr>";
echo "{$data[3]} adalah {$jk[0]}<br>";
echo "{$data[1]} adalah {$jk[1]}";
echo "<hr>";
for ($i = 0; $i < count($data); $i++) {
   echo "<marquee behavior=alternate>Nama Saya adalah <u>{$data[$i]}</marquee></u><br>";
}
echo "<hr>";
foreach ($data as $mhs) {
   echo "Nama Saya adalah <u>{$mhs}</u><br>";
}
