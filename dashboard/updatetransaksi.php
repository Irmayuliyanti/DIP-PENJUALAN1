<?php 
// koneksi database
include 'koneksitransaksi.php';
 
// menangkap data yang di kirim dari form
$nama_pelanggan = $_POST['nama_pelanggan'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$total = $_POST['total'];


// update data ke database
mysqli_query($koneksi,"update transaksi set nama_pelanggan='$nama_pelanggan', nama_barang='$nama_barang', harga='$harga', jumlah='$jumlah', total='$total' where nama_pelanggan='$nama_pelanggan'");
 
// mengalihkan halaman kembali ke transaksi.php
header("location:transaksi.php");
 
?>