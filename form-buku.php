<?php
// panggil koneksinya
require_once 'koneksi.php';
?>
<?php
$title = "Form buku" ?>
<?php include 'template/header.php'; ?>

<body>
	<?php include 'template/nav.php'; ?>
	<div class="container mt-5 p-4">
		<h2 class="text-center">Judul Buku</h2>
		<form action="simpan-buku.php" method="post" class="row g-3">
			<div class="mb-3">
				<label for="judul_buku" class="form-label">Judul Buku</label>
				<input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Masukan Judul buku" required>
			</div>
			<div class="mb-3">
				<label for="penulis_buku" class="form-label">Penulis Buku</label>
				<input type="text" class="form-control" id="penulis_buku" name="penulis_buku" placeholder="Masukan Penulis Buku" required>
			</div>
			<div class="mb-3">
				<label for="sinopsis" class="form-label">Penerbit Buku</label>
				<input type="text" class="form-control" id="sinopsis" name="sinopsis" placeholder="Masukan Penerbit Buku" required>
			</div>
			<div class="mb-3">
				<label for="tahun" class="form-label">Tahun Penerbit</label>
				<input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukan Tahun Penerbit" required>
			</div>
			<div class="mb-3">
				<label for="stok" class="form-label">Stok Buku</label>
				<input type="text" class="form-control" id="stok" name="stok" placeholder="Masukan Stok Buku" required>
			</div>
			<div class="col-12">
				<button type="submit" name="POST" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</body>
<?php include 'template/footer.php'; ?>