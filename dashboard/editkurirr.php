<?php
include'headerrr.php';
include'sidebarrr.php';
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Kurir </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          </div>
        </div>
      </div>

	<a class="btn btn-primary" href="kurirr.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
  <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
</svg>KEMBALI</a>
	<br/>
	<br/>
 
	<?php
	include 'koneksikirim.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from kurir where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="updatekurirr.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
						<input type="hidden" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>No_Telepon</td>
					<td><input type="text" name="no_telepon" value="<?php echo $d['no_telepon']; ?>"></td>
				</tr><tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr><tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo $d['username']; ?>"></td>
				</tr><tr>
					<td>Password</td>
					<td><input type="text" name="password" value="<?php echo $d['password']; ?>"></td>
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
</body>
</html>