<?php
// panggil koneksinya
require_once 'koneksi.php';
?>
<?php
$title = "Data perpustakaan" ?>
<?php include 'template/header.php'; ?>
<!-- <style type="text/css">
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		font-size: 14px;
		color: white;

	}

	td {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 4px;
		background: #ffffff;
		color: black;
	}

	th {
		padding: 5px;
		border: 3px solid #363646;
		color: white;
		background: #363646;
		font-size: 13px;
		box-sizing: content-box;
	}
</style> -->

<body>
	<?php include 'template/nav.php'; ?>

	<div class="container mt-5 p-4">
		<div class="top-bar">
			<h3 class="text-center mt-3">Data Perpustakaan</h3>
		</div>
		<div class="form-data">
			<h3>Data User</h3>

			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th scope="col" class="text-center align-items-center align-middle">No</th>
						<th scope="col" class="text-center align-items-center align-middle">Nama</th>
						<th scope="col" class="text-center align-items-center align-middle">username</th>
						<th scope="col" class="text-center align-items-center align-middle">Email</th>
						<th scope="col" class="text-center align-items-center align-middle">Jenis Kelamin</th>
						<th scope="col" class="text-center align-items-center align-middle">Keterangan</th>
						<th colspan="2" class="text-center align-items-center align-middle">Aksi</th>
					</tr>
				</thead>
				<!-- <div class="scroll-pane"> -->
				<tbody>
					<?php
					$i = 1;
					include "koneksi.php";
					$query = "SELECT * FROM user";
					$result = mysqli_query($koneksi, $query);
					while ($data = mysqli_fetch_array($result)) {
						echo "<tr>";
						echo "<th scope=\"row\">" . $i++ . "</th>";
						echo "<td>" . $data['nama'] . "</td>";
						echo "<td>" . $data['username'] . "</td>";
						echo "<td>" . $data['email'] . "</td>";
						echo "<td>" . $data['jenis_kelamin'] . "</td>";
						echo "<td>" . $data['keterangan'] . "</td>";
						echo "<td><a href='detail-anggota.php?username=" . $data['username'] . "'><button type=\"button\" class=\"btn btn-primary btn-sm\">Ubah</button></a></td>";
						echo "<td><a href='hapus-user.php?username=" . $data['username'] . "'><button type=\"button\" class=\"btn btn-danger btn-sm\">Hapus</button></a></td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
			<div class="mt-4 mb-4">
				<a class="btn btn-primary w-100" href="form-pendaftaran.php" role="button">Tambah Data</a>
			</div>
		</div>
		<h3 class="mt-5">Data Buku</h3>
		<!-- <a class="btn btn-primary" href="form-buku.php" role="button">Tambah Data</a> -->
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th scope="col" class="text-center align-items-center align-middle">No</th>
					<th scope="col" class="text-center align-items-center align-middle">Judul Buku</th>
					<th scope="col" class="text-center align-items-center align-middle">Penulis Buku</th>
					<th scope="col" class="text-center align-items-center align-middle">Sinopsis</th>
					<th scope="col" class="text-center align-items-center align-middle">Tahun Penerbit</th>
					<th scope="col" class="text-center align-items-center align-middle">Stok</th>
					<th colspan="2" class="text-center align-items-center align-middle">Aksi</th>
				</tr>
			</thead>
			<!-- <div class="scroll-pane"> -->
			<tbody>
				<?php
				$a = 1;
				include "koneksi.php";
				$query = "SELECT * FROM buku";
				$result = mysqli_query($koneksi, $query);
				while ($data = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<th scope=\"row\">" . $a++ . "</th>";
					echo "<td>" . $data['judul_buku'] . "</td>";
					echo "<td>" . $data['penulis_buku'] . "</td>";
					echo "<td>" . $data['sinopsis'] . "</td>";
					echo "<td>" . $data['tahun'] . "</td>";
					echo "<td>" . $data['stok'] . "</td>";
					echo "<td><a href='detail-buku.php?id_buku=" . $data['id_buku'] . "'><button type=\"button\" class=\"btn btn-primary btn-sm\">Ubah</button></a></td>";
					echo "<td><a href='hapus-buku.php?id_buku=" . $data['id_buku'] . "'><button type=\"button\" class=\"btn btn-danger btn-sm\">Hapus</button></a></td>";
					echo "</tr>";
				}
				?>
			</tbody>
		</table>
		<div class="mt-4 mb-4">
			<a class="btn btn-primary w-100" href="form-buku.php" role="button">Tambah Data</a>
		</div>
	</div>
	</div>
	</div>
	<?php include 'template/footer.php'; ?>