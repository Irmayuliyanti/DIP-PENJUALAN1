<?php
include'header.php';
include'sidebar.php';
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Barang</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          </div>
        </div>
      </div>

	<a class="btn btn-primary" href="barang.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
</svg>KEMBALI</a>
	<br/>
	<br/>
 
	<?php
	include 'koneksibarang.php';
	$nama_barang = $_GET['nama_barang'];
	$data = mysqli_query($koneksi,"select * from barang where nama_barang='$nama_barang'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="updatebarang.php">
			<table>
				<tr>			
					<td>Nama_Barang</td>
					<td>
                        <input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>">
						<input type="hidden" name="nama_barang" value="<?php echo $d['nama_barang']; ?>">
					</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="text" name="harga" value="<?php echo $d['harga']; ?>"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="text" name="stok" value="<?php echo $d['stok']; ?>"></td>
				</tr>
				<tr>
					
					<td></td>
					<td><button type="submit" class="btn btn-primary">Simpan</button></td>
                </tr>
            </table>
        </form>
    </body>
</main>
</html>

		<?php 
	}
	?>
</body>
</html>