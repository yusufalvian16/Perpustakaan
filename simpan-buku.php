<?php
include 'koneksi.php';
// menyimpan data kedalam variabel

$judul_buku       = $_POST['judul_buku'];
$penulis_buku     = $_POST['penulis_buku'];
$sinopsis    = $_POST['sinopsis'];	
$tahun   = $_POST['tahun'];
$stok         	  = $_POST['stok'];

// query SQL untuk insert data
$query="INSERT INTO buku SET id_buku='',judul_buku='$judul_buku',penulis_buku='$penulis_buku',sinopsis='$sinopsis',tahun='$tahun',stok='$stok'";
mysqli_query($koneksi, $query);

if($query){
	echo '<script language="javascript">alert("data berhasil disimpan");window.location="form-buku.php";</script>';
}
else{
	echo '<script language="javascript">alert("data gagal disimpan");window.location="form-buku.php";</script>';
}
?>