<?php
session_start();
include "config/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$op = $_GET['op'];
if ($op == "in") {		
	$sql = mysql_query("SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'");
	if (mysql_num_rows($sql) ==1) {
	$query = mysql_fetch_array($sql);
	$_SESSION['username'] = $query['username'];
	$_SESSION['level'] = $query['level'];
	
	if($query['level'] == "ADMIN"){
		echo '<script language = "JavaScript">
		alert("SELAMAT ANDA BERHASIL LOGIN ADMIN!")
		document.location="admin/home.php";
		</script>';
	}elseif ($query['level'] == "USER") {
		echo '<script language = "JavaScript">
		alert("SELAMAT ANDA BERHASIL LOGIN USER!")
		document.location="user/home.php";
		</script>';
	}
	}else{
		echo '<script language = "JavaScript">
		alert("USERNAME atau PASSWORD SALAH!")
		document.location="index.php";
		</script>';
	}
}elseif ($op == "out") {
	unset($_SESSION['username']);
	unset($_SESSION['level']);
	header("location:index.php");
}
?>