<?php 
// koneksi database
include 'koneksipel.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO pelanggan (nama, alamat, no_telepon, email, username, `password`) VALUES('$nama','$alamat', '$no_telepon', '$email', '$username', '$password')");
 
// mengalihkan halaman kembali ke pelanggan.php
header("location:pel.php");
 
?>