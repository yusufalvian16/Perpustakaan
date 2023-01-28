<?php
// panggil koneksinya
require_once 'koneksi.php';
?>
<?php
$title = "Pendaftaran" ?>
<?php include 'template/header.php'; ?>

<body>
	<?php include 'template/nav.php'; ?>
	<div class="container mt-5 p-4">
		<h2 class="text-center">Form Pengguna</h2>
		<form action="simpan-pendaftaran.php" method="post" class="row g-3">
			<div class="mb-3">
				<label for="nama" class="form-label">Nama</label>
				<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" required>
			</div>
			<div class="mb-3">
				<label for="username" class="form-label">Username</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" required>
			</div>
			<div class="col-md-6">
				<label for="inputEmail4" class="form-label">Email</label>
				<input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Masukan Email" required>
			</div>
			<div class="col-md-6">
				<label for="inputPassword4" class="form-label">Password</label>
				<input type="password" class="form-control" id="inputPassword4" placeholder="Masukan Paswword" name="password" required>
			</div>
			<div class="col-12">
				<label for="JenisKelamin" class="form-label">Jenis Kelamin</label>
				<select class="form-select" aria-label="Jenis Kelamin" required id="jenisKelamin" name="jk">
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan" placeholder="keterangan singkat" rows="3"></textarea>
			</div>
			<div class="col-12">
				<button type="submit" class="btn btn-primary" name="POST">Simpan</button>
			</div>
		</form>
	</div>
</body>
<?php include 'template/footer.php'; ?>