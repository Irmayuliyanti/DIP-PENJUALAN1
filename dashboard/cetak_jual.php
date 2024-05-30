<!-- Dokumen HTML: Bagian judul halaman -->
<title>Laporan Data Penjualan</title>

<?php
// Sisipkan file koneksi.php untuk melakukan koneksi ke database
include 'koneksi.php';

// Memulai sesi (session) PHP
session_start();
// Sisipkan file header.php yang berisi bagian header halaman
include 'header.php';

?>

<?php
		// Query untuk menampilkan data dosen beserta nama prodi yang terafiliasi
        $data =mysqli_query($koneksi,"select * from jual");
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
	<h3>Laporan Data Penjualan</h3>

  </div>
		<!-- Tabel untuk menampilkan data dosen -->
		<table class="table table-striped table-sm">
		<tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama_Admin</th>
                <th>Nama_Pelanggan</th>
                <th>Nama_Kurir</th>
                <th>Nama_Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Sub_Total</th>
		</tr>
		<?php
include 'koneksijual.php';
$no = 1; // Ubah ini sesuai dengan kebutuhan Anda, misalnya, jika ingin dimulai dari 1

$data = mysqli_query($koneksi, "select * from jual");

while ($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td><?php echo $no; $no++; ?></td>
        <td><?php echo $d['tanggal']; ?></td>
        <td><?php echo $d['nama_admin']; ?></td>
        <td><?php echo $d['nama_pelanggan']; ?></td>
        <td><?php echo $d['nama_kurir']; ?></td>
        <td><?php echo $d['nama_barang']; ?></td>
        <td><?php echo $d['harga']; ?></td>
        <td><?php echo $d['jumlah']; ?></td>
        <td><?php echo $d['sub_total']; ?></td>
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