<?php
// $daftarTimezone = DateTimeZone::listIdentifiers();

// foreach ($daftarTimezone as $timezone) {
//   echo "{$timezone} <br>";
// }

date_default_timezone_set("Asia/Jakarta") . '<br>';
$hariIni = new DateTime();

echo $hariIni->format('d-m-Y H:i') . '<br>';
echo $hariIni->format('l F Y, H:i') . '<br>';
echo $hariIni->format('D M y, H:i') . '<br>';
echo $hariIni->format('d-m-Y, h:iA') . '<br>';

echo '<hr>';

$tglSekarang = date('d-m-Y');
echo $tglSekarang . '<br>';
echo "<u>Format Hari</u><br>";
echo date('d') . '<br>';
echo date('j') . '<br>';
echo date('D') . '<br>';
echo date('l') . '<br>';
echo "<u>Format Bulan</u><br>";
echo date('m') . '<br>';
echo date('n') . '<br>';
echo date('M') . '<br>';
echo date('F') . '<br>';
echo "<u>Format Tahun</u><br>";
echo date('y') . '<br>';
echo date('Y') . '<br>';

echo "<hr>";

echo "Angsuran : " . $hutang = 1500000;
echo "<br>Denda : " . $denda = 150000;
echo "<br>Jatuh Tempo : " . $tempo = date('01-09-2023');
echo "<br>Tanggal Hari Ini :" . $tglSekarang = date('d-m-Y');

if ($tglSekarang > $tempo) {
   echo "<br>Total Bayar : " . $hutang + $denda;
} else {
   echo "<br>Total Bayar : " . $hutang;
}

echo "<hr>";

echo "Angsuran : " . $angsuran = 2000000;
echo "<br>Jatuh Tempo : " . $Tgltempo = date('05-09-2023');
echo "<br>Tanggal Bayar :" . $tglBayar = date('07-09-2023');

if ($tglBayar < $Tgltempo) {
   echo "<br>Total Bayar : " . $angsuran - 100000;
} else {
   echo "<br>Total Bayar : " . $angsuran + 100000;
}
