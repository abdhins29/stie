<?php
session_start();
	if (!isset($_SESSION['username'])) {
	echo "<script language = 'JavaScript'>
		alert('USERNAME TIDAK ADA!')
		document.location='../index.php';
		</script>";
	}
/*
	if($_SESSION['level'] !== "ADMIN"){
	echo "<script language = 'JavaScript'>
		alert('ANDA HARUS LOGIN SEBAGAI ADMIN!')

		</script>";
}*/
?>