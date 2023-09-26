<?php
$conn = mysqli_connect('localhost', 'root', '', 'mik4_db_produk');

$p = $_POST['p'];
$k = $_POST['k'];
$h = $_POST['h'];

$conn->query("INSERT INTO produk (produk, kategori, harga) VALUES ('$p', '$k', '$h')");

header('location:index.php');
