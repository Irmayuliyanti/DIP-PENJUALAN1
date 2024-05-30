<?php 
// koneksi database
include 'koneksiuser.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
$email = $_POST['email']; 
$username = $_POST['username'];
$password = $_POST['password'];
 
// update data ke database
mysqli_query($koneksi,"update user set alamat='$alamat', no_telepon='$no_telepon', email='$email', username='$username', password='$password' where nama='$nama'");


// mengalihkan halaman kembali ke user.php
header("location:user.php");
 
?>