 <?php
 include "koneksi.php";
 $id_buku   = $_GET['id_buku'];
 // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
 $query = "DELETE FROM buku WHERE id_buku='$id_buku'";
 mysqli_query($koneksi, $query);
 if($query){
 	echo '<script language="javascript">alert("data berhasil dihapus");window.location="data-perpustakaan.php"</script>';

 }

 ?>