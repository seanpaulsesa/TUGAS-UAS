<?php

	//memangil file koneksi
	include "koneksi.php"; 
	
	//  untuk memulai sesion pada website
    session_start();

    // untuk memangil data dari  form
    $username = $_POST['username'];
    $password = $_POST['password'];

   $query = "SELECT * FROM tbl_pengguna WHERE username = '".$username."' and password = ' ".$password."'";
    $data = mysqli_query($koneksi, $query);

    $cek = mysqli_num_rows($data);

    if($cek > 0)
    {
    	$baris = mysqli_fetch_array($data);
    	$_SESSION['id_pengguna'] = $baris['id_pengguna'];
    	$_SESSION['username'] = $baris['username'];
    	$_SESSION['password'] = $baris['password'];
    	$_SESSION['nama_lengkap'] = $baris['nama_lengkap'];
    	header("Location:dashboard.php");
    } else
    {
    	header("Location:index.php");
    }

?>