<?php 
session_start();
include ("config/koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$cekuser= mysql_query("SELECT * FROM tbl_user WHERE username = '$username'");

if (mysql_num_rows($cekuser) <> 0 ) {
?>
	<script language = "JavaScript">
		alert("USERNAME SUDAH TERDAFTAR!")
		document.location="regis.php";
	</script>
<?php
} else {
	if (!$username || !$password) {
?>
	<script language = "JavaScript">
		alert("USERNAME BELUM DIGUNAKAN!")
	</script>
<?php
}
	$daftar = mysql_query("INSERT INTO tbl_user (username,password,level) VALUES('$username','$password','$level')");
	if($daftar){
?>
	<script language = "JavaScript">
		alert("BERHASIL MENDAFTAR!")
		document.location="index.php";
	</script>
<?php
}
?>
	<script language = "JavaScript">
		alert("GAGAL MENDAFTAR!")
		document.location="regis.php";
	</script>
<?php
}
?>