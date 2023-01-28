<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$username       = $_POST['username'];
$nama           = $_POST['nama'];
$password       = $_POST['password'];
$email      	= $_POST['email'];
$jenis_kelamin  = $_POST['jk'];	
$keterangan       = $_POST['keterangan'];

// query SQL untuk insert data
$query="UPDATE user SET nama='$nama',password='$password',email='$email',jenis_kelamin='$jenis_kelamin',keterangan='$keterangan' WHERE username='$username'";
mysqli_query($koneksi, $query);

if($query){
	echo '<script language="javascript">alert("data berhasil diubah...");window.location="data-perpustakaan.php";</script>';
}
else{
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='index.php'>Kembali Ke Form</a>";
}
?>