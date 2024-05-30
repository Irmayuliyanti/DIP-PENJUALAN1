<?php 
// koneksi database
include 'koneksipesan.php';
 
// menangkap data yang di kirim dari form
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO pesan (nama_barang, harga, jumlah) VALUES('$nama_barang', '$harga', '$jumlah')");
 
// mengalihkan halaman kembali ke pesan.php
header("location:pesan.php");
 
?>