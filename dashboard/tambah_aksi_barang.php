<?php 
// koneksi database
include 'koneksibarang.php';
 
// menangkap data yang di kirim dari form
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO barang (nama_barang, harga, stok) VALUES('$nama_barang', '$harga', '$stok')");
 
// mengalihkan halaman kembali ke barang.php
header("location:barang.php");
 
?>