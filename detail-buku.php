<?php
// panggil koneksinya
require_once 'koneksi.php';
?>
<?php
$title = "Detail buku" ?>
<?php include 'template/header.php'; ?>

<body>
	<?php include 'template/nav.php'; ?>
	<div class="container mt-5 p-4">
		<h2 class="text-center">Detail Buku Perpustakaan</h2>
		<div class="alert alert-warning d-flex align-items-center" role="alert">
			<div>
				<i class="bi bi-exclamation-triangle me-2"> </i> Isilah seluruh kolom dan pastikan kebenarannya
			</div>
		</div>
		<!-- <p>Note* : Isilah seluruh kolom dan pastikan kebenarannya!</p> -->
		<?php
		include 'koneksi.php';
		$id_buku = $_GET['id_buku'];
		$query = "SELECT * FROM buku WHERE id_buku='$id_buku'";
		$result = mysqli_query($koneksi, $query);
		while ($data = mysqli_fetch_array($result)) {
		?>
			<form action="ubah-buku.php?id_buku=<?php echo $data['id_buku']; ?>" method="post">
				<div class="mb-3">
					<label for="judul_buku" class="form-label">Judul Buku</label>
					<input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Masukan Judul buku" required value="<?php echo $data['judul_buku']; ?>">
				</div>
				<div class="mb-3">
					<label for="penulis_buku" class="form-label">Penulis Buku</label>
					<input type="text" class="form-control" id="penulis_buku" name="penulis_buku" placeholder="Masukan Penulis Buku" required value="<?php echo $data['penulis_buku']; ?>">
				</div>
				<div class="mb-3">
					<label for="sinopsis" class="form-label">Penerbit Buku</label>
					<input type="text" class="form-control" id="sinopsis" name="sinopsis" placeholder="Masukan Penerbit Buku" required value="<?php echo $data['sinopsis']; ?>">
				</div>
				<div class="mb-3">
					<label for="tahun" class="form-label">Tahun Penerbit</label>
					<input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukan Tahun Penerbit" required value="<?php echo $data['tahun']; ?>">
				</div>
				<div class="mb-3">
					<label for="stok" class="form-label">Stok Buku</label>
					<input type="text" class="form-control" id="stok" name="stok" placeholder="Masukan Stok Buku" required value="<?php echo $data['stok']; ?>">
				</div>
				<div class="col-12">
					<button type="submit" name="POST" class="btn btn-primary">Update</button>
				</div>
			</form>
		<?php
		}
		?>
	</div>
</body>
<?php include 'template/footer.php'; ?>