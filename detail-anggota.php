<?php
// panggil koneksinya
require_once 'koneksi.php';
?>
<?php
$title = "Template form" ?>
<?php include 'template/header.php'; ?>

<body>
	<?php include 'template/nav.php'; ?>
	<div class="container mt-5 p-4">
		<h2 class="text-center">Form Pengguna</h2>
		<div class="alert alert-warning d-flex align-items-center" role="alert">
			<div>
				<i class="bi bi-exclamation-triangle me-2"> </i> Untuk mengubah data, pastikan seluruh kolom terisi dengan sebenar-benarnya
			</div>
		</div>
		<!-- <p>Note* : Untuk mengubah data, pastikan seluruh kolom terisi dengan sebenar-benarnya</p> -->
		<?php
		include 'koneksi.php';
		$username = $_GET['username'];
		$query = "SELECT * FROM user WHERE username='$username'";
		$result = mysqli_query($koneksi, $query);
		while ($data = mysqli_fetch_array($result)) {
		?>
			<form action="ubah-anggota.php" method="post" class="row g-3">
				<form action="simpan-pendaftaran.php" method="post">
					<div class="mb-3">
						<label for="nama" class="form-label">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama anda" value="<?php echo $data['nama']; ?>" required="">
					</div>
					<div class="mb-3">
						<label for="username" class="form-label">Username</label>
						<input type="text" class="form-control" id="username" name="username" readonly="readonly" placeholder="Masukkan username" value="<?php echo $data['username']; ?>">
					</div>
					<div class="col-md-6">
						<label for="inputEmail4" class="form-label">Email</label>
						<input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Masukkan Email" value="<?php echo $data['email']; ?>" required>
					</div>
					<div class="col-md-6">
						<label for="inputPassword4" class="form-label">Password</label>
						<input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" value="<?php echo $data['password']; ?>" required>
					</div>
					<div class="col-12">
						<label for="JenisKelamin" class="form-label">Jenis Kelamin</label>
						<select class="form-select" aria-label="Jenis Kelamin" required id="jenisKelamin" name="jk">
							<option <?php if ($data['jenis_kelamin'] == "Laki-laki") {
										echo "selected";
									}
									?> value="Laki-laki">Laki-laki</option>
							<option <?php if ($data['jenis_kelamin'] == "Perempuan") {
										echo "selected";
									}
									?> value="Perempuan">Perempuan</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan" placeholder="keterangan singkat" rows="3"><?php echo $data['keterangan']; ?></textarea>
					</div>
					<div class="col-12">
						<button type="submit" class="btn btn-primary" name="POST">Update</button>
					</div>
				</form>
			<?php             }
			?>
	</div>
</body>
<?php include 'template/footer.php'; ?>