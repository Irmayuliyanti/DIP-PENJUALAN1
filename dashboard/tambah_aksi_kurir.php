<?php 
// koneksi database
include 'koneksikurir.php';
 
// menangkap data yang di kirim dari form
$id = rand();
$nama = $_POST['nama'];
$no_telepon = $_POST['no_telepon'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO kurir (id, nama, no_telepon, email, username, `password`) VALUES('$id', '$nama', '$no_telepon', '$email', '$username', '$password')");
 
// mengalihkan halaman kembali ke kurir.php
header("location:kurir.php");
 
?>