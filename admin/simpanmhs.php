<?php 
	include "../config/koneksi.php";
?>
<?php
$nim = $_POST['nim'];
$nmmhs = $_POST['nmmhs'];
$noreglus = $_POST['noreglus'];
$ipk = $_POST['ipk'];
$predikat = $_POST['predikat'];
$nmprodi = $_POST['nmprodi'];
$tahunlulus = $_POST['tahunlulus'];

	$simpan = mysql_query("INSERT INTO tbl_lulus VALUES('$nim','$nmmhs','$noreglus','$ipk','$predikat','$nmprodi','$tahunlulus')");
	if($simpan){
?>
	<script language = "JavaScript">
		alert("BERHASIL MENYIMPAN!")
		document.location="lihatdatamhs.php";
	</script>
<?php
}else{
?>
	<script language = "JavaScript">
		alert("GAGAL MENYIMPAN!")
		document.location="inputdatamhs.php";
	</script>
<?php
}
?>