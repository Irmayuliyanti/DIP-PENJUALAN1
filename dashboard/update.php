<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
$email = $_POST['email'];
$jenis_kelamin = $_POST['jenis_kelamin']; 
$username = $_POST['username'];
$password = $_POST['password'];
 
// update data ke database
mysqli_query($koneksi,"update admin set nama='$nama', alamat='$alamat', no_telepon='$no_telepon', email='$email', jenis_kelamin='$jenis_kelamin', username='$username', password='$password' where nama='$nama'" );


// mengalihkan halaman kembali ke admin.php
header("location:admin.php");
 
?>