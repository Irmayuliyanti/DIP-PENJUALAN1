<?php 
// koneksi database
include 'koneksikurir.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from kurir where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:kurir.php");
 
?>