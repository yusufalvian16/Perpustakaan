<?php
$koneksi = mysqli_connect("localhost", "root", "", "perpustakaan");

if (!$koneksi){
	echo "Koneksi database mysqli gagal!!! " . mysqli_connect_error();
	
}
