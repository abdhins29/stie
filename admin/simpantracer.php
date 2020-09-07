<?php 
	include "../config/koneksi.php";
?>
<?php
	if (isset($_POST['simpan'])) {
		$nmmhs = $_POST['nmmhs'];
		$kodept = $_POST['kodept'];
		$namapt = $_POST['namapt'];
		$tahunlulus = $_POST['tahunlulus'];
		$kodeprodi = $_POST['kodeprodi'];
		$namaprodi = $_POST['namaprodi'];
		$nohp = $_POST['nohp'];
		$email = $_POST['email'];
		$k1a = $_POST['k1a'];
		$k1b = $_POST['k1b'];
		$k1c = $_POST['k1c'];
		$k1d = $_POST['k1d'];
		$k1e = $_POST['k1e'];
		$k1f = $_POST['k1f'];
		$k1g = $_POST['k1g'];
		$k2a = $_POST['k2a'];
		$k3a = $_POST['k3a'];
		$k4a = $_POST['k4a'];
		$k5a = $_POST['k5a'];
		$k6a = $_POST['k6a'];
		$k7a = $_POST['k7a'];
		$k8a = $_POST['k8a'];
		$k9a = $_POST['k9a'];
		$k10a = $_POST['k10a'];
		$k11a = $_POST['k11a'];
		$k12a = $_POST['k12a'];
		$k13a = $_POST['k13a'];
		$k14a = $_POST['k14a'];
		$k15a = $_POST['k15a'];
		$k16a = $_POST['k16a'];
		$k17a = $_POST['k17a'];
		$k18a = $_POST['k18a'];
		$k19a = $_POST['k19a'];

		$sqlSimpan = mysql_query("INSERT INTO tbl_tracer VALUES('$nmmhs','$kodept','$namapt','$tahunlulus','$kodeprodi','$namaprodi','$nohp','$email','$k1a','$k1b','$k1c','$k1d','$k1e','$k1f','$k1g','$k2a','$k3a','$k4a','$k5a','$k6a','$k7a','$k8a','$k9a','$k10a','$k11a','$k12a','$k13a','$k14a','$k15a','$k16a','$k17a','$k18a','$k19a')");
?>
	<script language = "JavaScript">
		alert("BERHASIL MENYIMPAN!")
		document.location="inputtracer.php";
	</script>
<?php 
} else{
?>
	<script language = "JavaScript">
		alert("GAGAL MENYIMPAN!")
		document.location="inputtracer.php";
	</script>
<?php 
}?>