<?php 
// koneksi database
include 'koneksipesan.php';
 
// menangkap data id yang di kirim dari url
$nama_barang = $_GET['nama_barang'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from pesan where nama_barang='$nama_barang'");
 
// mengalihkan halaman kembali ke index.php
header("location:pesan.php");
 
?>