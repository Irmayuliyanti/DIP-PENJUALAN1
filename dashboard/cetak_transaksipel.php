<!-- Dokumen HTML: Bagian judul halaman -->
<title>Cetak Data Transaksi</title>

<?php
// Sisipkan file koneksi.php untuk melakukan koneksi ke database
include 'koneksiuser.php';

// Memulai sesi (session) PHP
session_start();
// Sisipkan file header.php yang berisi bagian header halaman
include 'headerr.php';

?>

<?php
		// Query untuk menampilkan data dosen beserta nama prodi yang terafiliasi
        $data =mysqli_query($koneksi,"select * from transaksi");
		$data =mysqli_fetch_array($data);
    ?>

	<!-- Gaya CSS untuk tabel -->
    <style type="text/css">
	 	th, td {
		  padding: 10px;
		  text-align: left;
		}
		table, th, td {
		  border: 1px solid;
		}
    </style>

    <!-- Judul Halaman -->
	<h3>Data Transaksi</h3>

  </div>
		<!-- Tabel untuk menampilkan data dosen -->
		<table class="table table-striped table-sm">
		<tr>
			<th>No</th>
			<th>Nama_Pelanggan</th>
			<th>Nama_Barang</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Total</th>
		</tr>
		<?php
include 'koneksitransaksipel.php';
$name = 1; // Ubah ini sesuai dengan kebutuhan Anda, misalnya, jika ingin dimulai dari 1

$data = mysqli_query($koneksi, "select * from transaksi");

while ($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td><?php echo $name; $name++; ?></td>
        <td><?php echo $d['nama_pelanggan']; ?></td>
        <td><?php echo $d['nama_barang']; ?></td>
        <td><?php echo $d['harga']; ?></td>
        <td><?php echo $d['jumlah']; ?></td>
        <td><?php echo $d['total']; ?></td>
    </tr>
    <?php
}
?>

	</table>
	</main>

	<!-- Script untuk mengaktifkan fungsi pencetakan halaman -->
	<script>
		window.print();
	</script>