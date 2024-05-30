<?php 
// koneksi database
include 'koneksikirim.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$no_telepon = $_POST['no_telepon'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

 
// update data ke database
mysqli_query($koneksi,"update kurir set no_telepon='$no_telepon', email='$email', username='$username', password='$password' where nama='$nama'");
 
// mengalihkan halaman kembali ke kurir.php
header("location:kurirr.php");
 
?>