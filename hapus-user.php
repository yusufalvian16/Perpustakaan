 <?php
 include "koneksi.php";
 $username   = $_GET['username'];
 // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
 $query = "DELETE FROM user WHERE username='$username'";
 mysqli_query($koneksi, $query);
 if($query){
 	echo '<script language="javascript">alert("data berhasil dihapus");window.location="data-perpustakaan.php"</script>';

 }

 ?>