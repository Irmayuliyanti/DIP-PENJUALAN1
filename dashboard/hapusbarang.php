<?php 
// koneksi database
include 'koneksibarang.php';
 
// menangkap data id yang di kirim dari url
$nama_barang = $_GET['nama_barang'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from barang where nama_barang='$nama_barang'");
 
// mengalihkan halaman kembali ke index.php
header("location:barang.php");
 
?>