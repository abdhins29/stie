<?php 
session_start();
unset($_SESSION['username']);
unset($_SESSION['level']);
session_destroy();
?>
	<script language = "JavaScript">
		alert("ANDA BERHASIL LOG-OUT!")
		document.location="index.php";
	</script>