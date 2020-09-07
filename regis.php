<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STIE - PASAMAN :: REGISTER</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="config/koneksi.php">
	<link rel="stylesheet" href="asset/css/main.css">

	<script src="asset/js/jquery.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(config/bg-u.jpg);">
	<form method="POST" action="daftar.php">
		<div class="container">
			<h2 class="form-group-heading">SILAHKAN DAFTAR</h2>
			<div class="form-group">
				<input type="text" id=username name="username" class="form-control" placeholder="Silahkan Masukan Username Anda" required setfocus>	
				<input type="password" id=password name="password" class="form-control" placeholder="Silahkan Masukan Password Anda" required>
				<input type="text" id=level name="level" class="form-control" value="USER">
				<a href="index.php">Silahkan Login?</a>
			</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit" name="daftar">DAFTAR</button>
			</div>
		</div>
	</form>
</body>
</html>