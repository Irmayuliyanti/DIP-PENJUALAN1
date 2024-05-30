<?php 
// koneksi database
include 'koneksijual.php';
 
// menangkap data yang di kirim dari form
$tanggal = $_POST['tanggal'];
$nama_admin = $_POST['nama_admin'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$nama_kurir = $_POST['nama_kurir']; 
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga']; 
$jumlah = $_POST['jumlah']; 
$sub_total = $_POST['sub_total']; 
 
// update data ke database
mysqli_query($koneksi,"update jual set tanggal='$tanggal', nama_admin='$nama_admin', nama_pelanggan='$nama_pelanggan', nama_kurir='$nama_kurir', nama_barang='$nama_barang', harga='$harga', jumlah='$jumlah', sub_total='$sub_total' where tanggal='$tanggal'");


// mengalihkan halaman kembali ke jual.php
header("location:jual.php");
 
?>