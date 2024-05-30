<?php 
// koneksi database
include 'koneksijual.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from jual where id='$id'");
 
// mengalihkan halaman kembali ke jual.php
header("location:jual.php");
 
?>