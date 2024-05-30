<?php 
// koneksi database
include 'koneksipesan.php';
 
// menangkap data yang di kirim dari form
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];


// update data ke database
mysqli_query($koneksi,"update pesan set harga='$harga', jumlah='$jumlah' where nama_barang='$nama_barang'");
 
// mengalihkan halaman kembali ke pesan.php
header("location:pesan.php");
 
?>