<?php 
// koneksi database
include 'koneksiuser.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from admin where id='$id'");
 
// mengalihkan halaman kembali ke mahasiswa.php
header("location:user.php");
 
?>