<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_buku          = $_GET['id_buku'];
$judul_buku       = $_POST['judul_buku'];
$penulis_buku     = $_POST['penulis_buku'];
$sinopsis    = $_POST['sinopsis'];	
$tahun   = $_POST['tahun'];
$stok         	  = $_POST['stok'];

// query SQL untuk insert data
$query="UPDATE buku SET judul_buku='$judul_buku',penulis_buku='$penulis_buku',sinopsis='$sinopsis',tahun='$tahun',stok='$stok' WHERE id_buku='$id_buku'";
mysqli_query($koneksi, $query);

if($query){
	echo '<script language="javascript">alert("data berhasil diubah...");window.location="data-perpustakaan.php";</script>';
}
else{
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='index.php'>Kembali Ke Form</a>";
}
?>