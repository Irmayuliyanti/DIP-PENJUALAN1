<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = rand();
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon']; 
$email = $_POST['email'];
$jenis_kelamin = $_POST['jenis_kelamin']; 
$username = $_POST['username']; 
$password = $_POST['password']; 
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO admin (id, nama, alamat, no_telepon, email, jenis_kelamin, username, `password`) VALUES('$id', '$nama', '$alamat', '$no_telepon', '$email',' $jenis_kelamin', '$username', '$password')");
// mengalihkan halaman kembali ke admin.php
header("location:admin.php");
 
?>
