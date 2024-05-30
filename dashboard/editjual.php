<?php
include 'header.php';
include 'sidebar.php';
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Penjualan</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
        </div>
        </div>
      </div>

<body>
	<a class="btn btn-primary" href="jual.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
</svg>KEMBALI</a>
	<br/>
	<br/>
 
	<?php
	include 'koneksijual.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from jual where id ='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="updatejual.php">
			<table>
				<input type="text" name="id" value=$id hidden>
				<tr>			
					<td>Tanggal</td>
					<td><input type="text" name="tanggal" value="<?php echo $d['tanggal']; ?>"></td>
				</tr>
				<tr>
					<td>Nama_Admin</td>
					<td><input type="text" name="nama_admin" value="<?php echo $d['nama_admin']; ?>"></td>
				</tr>
				<tr>
					<td>Nama_Pelanggan</td>
					<td><input type="text" name="nama_pelanggan" value="<?php echo $d['nama_pelanggan']; ?>"></td>
				</tr>
				<tr>
					<td>Nama_Kurir</td>
					<td><input type="text" name="nama_kurir" value="<?php echo $d['nama_kurir']; ?>"></td>
				</tr>
				<tr>
					<td>Nama_Barang</td>
					<td><input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="text" name="harga" value="<?php echo $d['harga']; ?>"></td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td><input type="text" name="jumlah" value="<?php echo $d['jumlah']; ?>"></td>
				</tr>
				<tr>
					<td>Sub_Total</td>
					<td><input type="text" name="sub_total" value="<?php echo $d['sub_total']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
  <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
</svg>Simpan</button></td>
                </tr>
            </table>
        </form>
    </body>
</main>
</html>

		<?php 
	}
	?>
 </main>
</body>
</html>