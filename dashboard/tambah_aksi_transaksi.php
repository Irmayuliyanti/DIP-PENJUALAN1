<?php 
// koneksi database
include 'koneksitransaksi.php';
 
// menangkap data yang di kirim dari form
$id = rand();
$nama_pelanggan = $_POST['nama_pelanggan'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$total = $_POST['total'];

 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO transaksi (id, nama_pelanggan, nama_barang, harga, jumlah, total) VALUES('$id', '$nama_pelanggan', '$nama_barang', '$harga', '$jumlah', '$total')");
 
// mengalihkan halaman kembali ke transaksi.php
header("location:transaksi.php");
 
?>