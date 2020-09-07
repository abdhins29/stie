<?php
if(isset ($_GET['nim']))
{
	$nim = $_GET['nim'];
include"../config/koneksi.php";
$sqlLihat = mysql_query("SELECT * from tbl_lulus");
while ($lihat = mysql_fetch_array($sqlLihat)){				
?>
<body style="color:black" onload="window.print();">
<center>
	<h2>YAYASAN PENDIDIKAN PASAMAN (YAPPAS)</h2>
	<h2>SEKOLAH TINGGI ILMU EKONOMI PASAMAN</h2>
	<h2>TERAKREDITASI 'B'</h2>
	<h5>Jl. Mayor Said Zamzam Pujorahayu, Simpang III Ophir, Kecamatan Luhak Nan Duo, Kabupaten Pasaman Barat, Provinsi Sumatera Barat</h3>
<hr style="border-color:black;width:81%">
<hr style="border-color:black;width:80%;margin:-18px 0px 20px 0px;"><br><br>
<div class="container">
<h3>DATA KELULUSAN MAHASISWA</h3>
<hr style="border-color:black;width:80%;margin:-18px 0px 20px 0px;">
	<table width="500" style="font-size:12px">
		<tr>
			<td style="padding-bottom: 20px;"><b>NAMA MAHASISWA</b></td>
			<td style="padding-bottom: 20px;"> <?php echo $lihat['nmmhs']; ?></td>
		</tr>
		<tr>
			<td style="padding-bottom: 20px;"><b>NIM</b></td>
			<td style="padding-bottom: 20px;"> <?php echo $lihat['nim']; ?></td>
		</tr>
		<tr>
			<td style="padding-bottom: 20px;"><b>No. REGISTRASI LULUS</b></td>
			<td style="padding-bottom: 20px;"> <?php echo $lihat['noreglus']; ?></td>
		</tr>
		<tr>
			<td style="padding-bottom: 20px;"><b>IPK</b></td>
			<td style="padding-bottom: 20px;"> <?php echo $lihat['ipk']; ?></td>
		</tr>
		<tr>
			<td style="padding-bottom: 20px;"><b>PREDIKAT KELULUSAN</b></td>
			<td style="padding-bottom: 20px;"> <?php echo $lihat['predikat']; ?></td>
		</tr>
		<tr>
			<td style="padding-bottom: 20px;"><b>NAMA PRODI</b></td>
			<td style="padding-bottom: 20px;"> <?php echo $lihat['nmprodi']; ?></td>
		</tr>
		<tr>
			<td style="padding-bottom: 20px;"><b>TAHUN LULUS</b></td>
			<td style="padding-bottom: 20px;"> <?php echo $lihat['tahunlulus']; ?></td>
		</tr>
	</table>
</div>
<?php 
}
}
 ?>
</center>
	<p align="right" style="color:black;">Pasaman , <?php echo date("d-m-Y") ?></p>
	<p align="right" style="color:black; padding-top: 80px">STIE PASAMAN</p>	