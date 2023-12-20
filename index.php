<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>APLIKASI | CRUD</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.grid.css">
	<link rel="stylesheet" href="assets/css/bootstrap.grid.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.reboot.css">
	<link rel="stylesheet" href="assets/css/bootstrap.reboot.min.css">

	<script src="assets/js/bootstrap.bundle.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

<center><h1>Welcome Pace Koding</h1></center>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<form action="proses_login.php" method="POST" enctype="multipart/form-data">
					<div class="card-header">
						<h5>Silahkan Login</h5>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text"  name=" username" class="form-control">
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control">
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Login</button>
						</div>
					</div>
					<div class="card-footer">
						Dibuat Oleh : Pace Koding
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	
</body>
</html>