<?php 
// koneksi database
include 'koneksibarang.php';
 
// menangkap data yang di kirim dari form
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];


// update data ke database
mysqli_query($koneksi,"update barang set harga='$harga', stok='$stok' where nama_barang='$nama_barang'");
 
// mengalihkan halaman kembali ke barang.php
header("location:barang.php");
 
?>