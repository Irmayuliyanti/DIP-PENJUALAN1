<?php 
// koneksi database
include 'koneksipelanggan.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from pelanggan where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:pelanggan.php");
 
?>