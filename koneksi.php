<?php
$server = "localhost";
$username = "root";
$password = "";
$nama_db = "apiku";


$koneksi = mysqli_connect($server, $username, $password, $nama_db);

if (!$koneksi)
 {
	echo "Data Base Tidak Konek";
}
else
 {
	echo "koneksi berhasil";
}
?>