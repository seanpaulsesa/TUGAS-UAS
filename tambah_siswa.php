<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Template Admin</title>

	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.grid.css">
	<link rel="stylesheet" href="assets/css/bootstrap.grid.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.reboot.css">
	<link rel="stylesheet" href="assets/css/bootstrap.reboot.min.css">

	<link rel="stylesheet" href="fontawesome/css/all.min.css">

	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/bootstrap.bundle.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	</style>

	<style>
		.nav-link:hover{
			background-color: darkgrey;
		}
		.display-4{
			font-weight: bold;
		}
		.card-body-icon{
			position: absolute;
			z-index: 0;
			top: 25px;
			right: 4px;
			opacity: 0,5;
			font-size: 90px;

		}
	</style>
</head>
<body>

	<?php session_start(); ?>

	<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="#">APK - Pace Koding</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   
    
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  <div class="icon ml-5">
  	<h5>
  		<i class="fa-solid fa-bell ml-3"></i>
  		<a class="badge badge-primary" href="logout.php"><i class="fa-solid fa-arrow-right-to-bracket ml-3"></i></a>
  		
  	</h5>
  </div>
</nav>

<div class="row no-gutters">
	<div class="col-md-3 bg-dark">
	<ul class="nav flex-column ml-3 mt-4 mb-4 mr-4">
		<li class="nav-item">
			<a class="nav-link text-white" href=""><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
			<hr class="bg-secondary">
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href=""><i class="fas fa-user-graduate mr-2"></i>Mahasiswa</a>
			<hr class="bg-secondary">
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href="tambah_siswa.php"><i class="fa-solid fa-square-plus mr-2"></i>Tambah Mahasiswa</a>
			<hr class="bg-secondary">
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href=""><i class="fa-regular fa-eye mr-2"></i>Lihat Mahasiswa</a>
			<hr class="bg-secondary">
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href=""><i class="fas fa-user-graduate mr-2"></i>Dosen</a>
			<hr class="bg-secondary">
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href=""><i class="fa-solid fa-square-plus mr-2"></i>Tambah Dosen</a>
			<hr class="bg-secondary">
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href=""><i class="fa-regular fa-eye mr-2"></i>Lihat Dosen</a>
			<hr class="bg-secondary">
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href="logout.php"><i class="fa-solid fa-right-from-bracket mr-2"></i>Keluar</a>
			<hr class="bg-secondary">
		</li>
	</ul>	
	</div>

	<div class="col-md-9 p-5 pt-2">
		<h3><i class="fa-solid fa-square-plus mr-2"></i>Tambah Mahasiswa</h3>

		<div class="row">
			<div class="col-md-12">
			<form action="proses_tambah_siswa.php" method="POST" enctype="multipart/form-data">
				<form>

			  <form>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Mahasiswa</label>
			    <input type="text" class="form-control" placeholder="Masukan Nama Mahasiswa">
			  </div> 

			  <div class="form-group">
			    <label for="exampleInputEmail1">No Absen</label>
			    <input type="number" class="form-control" placeholder="Masukan No Asben">
			  </div> 

			  <div class="form-group">
			    <label for="exampleInputEmail1">Kelas Mahasiswa</label>
			    <input type="text" class="form-control" placeholder="Masukan Nama Kelas">
			  </div> 

			  <div class="form-group">
			    <label for="exampleInputEmail1">Alamat Mahasiswa</label>
			    <textarea name="alamat" cols="30" rows="2" class="form-control"></textarea>
			  </div>
			  	<input type="hidden" name="id_penguna" value="<?php echo $_SESSION['id_penguna']; ?>"> 
			</form>
			</div>
		l
		</div>
	</div>

	</div>
	<div class="col-md-0"> 
		<div class="card-footer">
			<marquee><p>APK ini Dibuat Oleh : Pace Koding💻🚀</p></marquee>
		</div>
</div>
</body>
</html>

