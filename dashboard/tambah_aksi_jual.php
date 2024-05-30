<?php 
// koneksi database
include 'koneksijual.php';
 
// menangkap data yang di kirim dari form
$id = rand();
$tanggal = $_POST['tanggal'];
$nama_admin = $_POST['nama_admin'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$nama_kurir = $_POST['nama_kurir']; 
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga']; 
$jumlah = $_POST['jumlah']; 
$sub_total = $_POST['sub_total']; 
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO jual (id, tanggal, nama_admin, nama_pelanggan, nama_kurir, nama_barang, harga, jumlah, sub_total) VALUES('$id', '$tanggal', '$nama_admin', '$nama_pelanggan', '$nama_kurir', '$nama_barang', '$harga',' $jumlah', '$sub_total')");
// mengalihkan halaman kembali ke jual.php
header("location:jual.php");
 
?>