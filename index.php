<?php

include 'koneksi.php';
$user = mysqli_query($koneksi, "SELECT * FROM user");
$buku = mysqli_query($koneksi, "SELECT * FROM buku");

?>
<?php
$title = "Home" ?>
<?php include 'template/header.php'; ?>

<body>
	<!-- navbar -->
	<?php include 'template/nav.php'; ?>

	<div class="container mt-5 pt-5">
		<div class="jumbotron bg-body-tertiary">
			<h1 class="display-4">Selamat Datang</h1>
			<p class="lead">Perpustakaan Digital Daerah Kabupaten Gunungkidul.</p>
			<hr class="my-4">
			<p><i>anda belum login.</i></p>
		</div>
	</div>

	<!-- end navbar -->

	<div class="container" id="rapih">
		<div class="row">
			<div class="col-md-4">
				<div class="card mb-3 text-center bg-body-tertiary" style="max-width: 18rem;">
					<a href="form-pendaftaran.php" style="text-decoration: none;">
						<i class="bi bi-person-add text-center" style="font-size: 20vh;"></i>
						<div class="text-xl-center">
							<h5 style="color: var(--bs-body-color);"><b>Input Pengguna</b></h5>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-3 text-center bg-body-tertiary" style="max-width: 18rem;">
					<a href="form-buku.php" style="text-decoration: none;">
						<i class="bi bi-journal-plus text-center" style="font-size: 20vh;"></i>
						<div class="text-xl-center">
							<h5 style="color: var(--bs-body-color);"><b>Input Buku</b></h5>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-3 text-center bg-body-tertiary" style="max-width: 18rem;">
					<a href="data-perpustakaan.php" style="text-decoration: none;">
						<i class="bi bi-journals text-center" style="font-size: 20vh;"></i>
						<div class="text-xl-center">
							<h5 style="color: var(--bs-body-color);"><b>Data Perpustakaan</b></h5>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php include 'template/footer.php'; ?>