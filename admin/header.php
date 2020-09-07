<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STIE - PASAMAN :: ADMIN</title>
	<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="../config/koneksi.php">
	<link rel="stylesheet" href="../asset/css/header.css">

	<script src="../asset/js/jquery.min.js"></script>
	<script src="../asset/js/bootstrap.min.js"></script>

<div id="header">
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="home.php">STIE PASAMAN</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="home.php">HOME</a></li>
		          	<li class="dropdown">
	                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TRACER</a>
	                	<ul class="dropdown-menu">
	                  		
	                  		<li><a href="lihatdatatracer.php">LIHAT DATA TRACER</a></li>
	                	</ul>
	              	</li>
					<li class="dropdown">
	                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LULUSAN</a>
	                	<ul class="dropdown-menu">
	                  		<li><a href="inputdatamhs.php">INPUT DATA MAHASISWA LULUS</a></li>
	                  		<li><a href="lihatdatamhs.php">LIHAT DATA MAHASISWA LULUS</a></li>
	                	</ul>
	              	</li>
					<li><a href="../logout.php">LOG-OUT</span></a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>
</head>