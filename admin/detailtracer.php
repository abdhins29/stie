<?php
if(isset ($_GET['nmmhs']))
{
	$nmmhs = $_GET['nmmhs'];
include"../config/koneksi.php";
$sqlLihat = mysql_query("SELECT * from tbl_tracer");
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
	<h3>DATA TRACER ALUMNI</h3>
	<hr style="border-color:black;width:80%;margin:-18px 0px 20px 0px;">
		<table width="500" style="font-size:12px">
			<tr>
				<td><b>NAMA ALUMNI</b></td>
				<td> <?php echo $lihat['nmmhs']; ?></td>
			</tr>
			<tr>
				<td><b>KODE PERGURUAN TINGGI</b></td>
				<td> <?php echo $lihat['kodept']; ?></td>
			</tr>
			<tr>
				<td><b>NAMA PERGURUAN TINGGI</b></td>
				<td> <?php echo $lihat['namapt']; ?></td>
			</tr>
			<tr>
				<td><b>TAHUN LULUS</b></td>
				<td> <?php echo $lihat['tahunlulus']; ?></td>
			</tr>
			<tr>
				<td><b>KODE PRODI</b></td>
				<td> <?php echo $lihat['kodeprodi']; ?></td>
			</tr>
			<tr>
				<td><b>NAMA PRODI</b></td>
				<td> <?php echo $lihat['nmprodi']; ?></td>
			</tr>
			<tr>
				<td><b>No. HP/TELEPON</b></td>
				<td> <?php echo $lihat['nohp']; ?></td>
			</tr>
			<tr>
				<td><b>EMAIL</b></td>
				<td> <?php echo $lihat['email']; ?></td>
			</tr>
		</table><br><br>

	<h3>DATA KUISIONER ALUMNI</h3>
	<hr style="border-color:black;width:80%;margin:-18px 0px 20px 0px;">
		<table width="800" style="font-size:12px">
			<tr>
				<td><b>MENURUT ANDA SEBERAPA BESAR PENEKANAN PADA METODE PEMBELAJARAN DIBAWAH INI DILAKSANAKAN DIPROGRAM STUDI ANDA?(PERKULIAHAN)</b></td>
				<td> <?php echo $lihat['k1a']; ?></td>
			</tr>
			<tr>
				<td><b>MENURUT ANDA SEBERAPA BESAR PENEKANAN PADA METODE PEMBELAJARAN DIBAWAH INI DILAKSANAKAN DIPROGRAM STUDI ANDA?(DEMONSTRASI)</b></td>
				<td> <?php echo $lihat['k1b']; ?></td>
			</tr>
			<tr>
				<td><b>MENURUT ANDA SEBERAPA BESAR PENEKANAN PADA METODE PEMBELAJARAN DIBAWAH INI DILAKSANAKAN DIPROGRAM STUDI ANDA?(PARTISIPASI DALAM PROYEK RISET)</b></td>
				<td> <?php echo $lihat['k1c']; ?></td>
			</tr>
			<tr>
				<td><b>MENURUT ANDA SEBERAPA BESAR PENEKANAN PADA METODE PEMBELAJARAN DIBAWAH INI DILAKSANAKAN DIPROGRAM STUDI ANDA?(MAGANG)</b></td>
				<td> <?php echo $lihat['k1d']; ?></td>
			</tr>
			<tr>
				<td><b>MENURUT ANDA SEBERAPA BESAR PENEKANAN PADA METODE PEMBELAJARAN DIBAWAH INI DILAKSANAKAN DIPROGRAM STUDI ANDA?(PRATIKUM)</b></td>
				<td> <?php echo $lihat['k1e']; ?></td>
			</tr>
			<tr>
				<td><b>MENURUT ANDA SEBERAPA BESAR PENEKANAN PADA METODE PEMBELAJARAN DIBAWAH INI DILAKSANAKAN DIPROGRAM STUDI ANDA?(KERJA LAPANGAN)</b></td>
				<td> <?php echo $lihat['k1f']; ?></td>
			</tr>
			<tr>
				<td><b>MENURUT ANDA SEBERAPA BESAR PENEKANAN PADA METODE PEMBELAJARAN DIBAWAH INI DILAKSANAKAN DIPROGRAM STUDI ANDA?(DISKUSI)</b></td>
				<td> <?php echo $lihat['k1g']; ?></td>
			</tr>
			<tr>
				<td><b>KAPAN ANDA MULAI MENCARI PEKERJAAN?(PEKERJAAN SAMBILAN TIDAK DIMASUKAN)</b></td>
				<td> <?php echo $lihat['k2a']; ?></td>
			</tr>
						<tr>
				<td><b>BAGAIMANA ANDA MENCARI PERKERJAAN TERSEBUT?</b></td>
				<td> <?php echo $lihat['k3a']; ?></td>
			</tr>
			<tr>
				<td><b>BERAPA BULAN WAKTU YANG DIHABISKAN (SEBELUM DAN SESUDAH KELULUSAN) UNTUK MEMPEROLEH PEKERJAAN PERTAMA?</b></td>
				<td> <?php echo $lihat['k4a']; ?></td>
			</tr>
			<tr>
				<td><b>BERAPA PERUSAHAAN/INSTANSI/INSTITUSI/YANG SUDAH ANDA LAMAR (LEWAT SURAT ATAU E-MAIL) SEBELUM ANDA MEMPEROLEH PEKERJAAN PERTAMA?</b></td>
				<td> <?php echo $lihat['k5a']; ?></td>
			</tr>
			<tr>
				<td><b>BERAPA BANYAK PERUSAHAAN/INSTANSI/INSTITUSI YANG MERESPONS LAMARAN ANDA?</b></td>
				<td> <?php echo $lihat['k6a']; ?></td>
			</tr>
			<tr>
				<td><b>BERAPA BANYAK PERUSAHAAN/INSTANSI/INSTITUSI YANG MENGUNDANG ANDA UNTUK WAWANCARA?</b></td>
				<td> <?php echo $lihat['k7a']; ?></td>
			</tr>
			<tr>
				<td><b>APAKAH ANDA BEKERJA SAAT INI(TERMASUK KERJA SAMBILAN DAN WIRAUSAHA)?</b></td>
				<td> <?php echo $lihat['k8a']; ?></td>
			</tr>
			<tr>
				<td><b>BAGAIMANA ANDA MENGGAMBARKAN SITUASI ANDA SAAT INI?</b></td>
				<td> <?php echo $lihat['k9a']; ?></td>
			</tr>
			<tr>
				<td><b>APAKAH ANDA AKTIF MENCARI PEKERJAAN DALAM 4 MINGGU TERAKHIR?</b></td>
				<td> <?php echo $lihat['k10a']; ?></td>
			</tr>
			<tr>
				<td><b>APA JENIS PERUSAHAAN/INSTANSI/INSTITUSI TEMPAT ANDA BEKERJA SEKARANG?</b></td>
				<td> <?php echo $lihat['k11a']; ?></td>
			</tr>
						<tr>
				<td><b>KIRA-KIRA BERAPA PENDAPATAN ANDA SETIAP BULANNYA?</b></td>
				<td> <?php echo $lihat['k12a']; ?></td>
			</tr>
			<tr>
				<td><b>SEBERAPA ERAT HUBUNGAN ANTARA BIDANG STUDI DENGAN PEKERJAAN ANDA?</b></td>
				<td> <?php echo $lihat['k13a']; ?></td>
			</tr>
			<tr>
				<td><b>TINGKAT PENDIDIKAN APA YANG PALING TEPAT/SESUAI UNTUK PEKERJAAN ANDA SAAT INI?</b></td>
				<td> <?php echo $lihat['k14a']; ?></td>
			</tr>
			<tr>
				<td><b>JIKA MENURUT ANDA PEKERJAAN ANDA SAAT INI TIDAK SESUAI DENGAN PENDIDIKAN ANDA, MENGAPA ANDA MENGAMILNYA?</b></td>
				<td> <?php echo $lihat['k15a']; ?></td>
			</tr>
			<tr>
				<td><b>PADA SAAT LULUS, PADA TINGGKAT MANA KOMPETENSI YANG ANDA KUASAI?</b></td>
				<td> <?php echo $lihat['k16a']; ?></td>
			</tr>
			<tr>
				<td><b>PADA SAAT LULUS, BAGAIMANA KONTRIBUSI PERGURUAN TINGGI DALAM HAL KOMPETENSI?</b></td>
				<td> <?php echo $lihat['k17a']; ?></td>
			</tr>
			<tr>
				<td><b>MENURUT ANDA, PERLUKAH DIADAKAN SUATU MEDIA SEBAGAI SARANA KOMUNIKASI ANTARA ALUMNI?</b></td>
				<td> <?php echo $lihat['k18a']; ?></td>
			</tr>
			<tr>
				<td><b>JIKA JAWABAN DIATAS "YA", MEDIA APA YANG ANDA USULKAN?</b></td>
				<td> <?php echo $lihat['k19a']; ?></td>
			</tr>
		</table>
	</div>
<?php 
}
}
 ?>
</center>
	<p align="right" style="color:black;">Simpang Empat , <?php echo date("d-m-Y") ?></p>
	<p align="right" style="color:black;">PIMPINAN</p>
	<p align="right" style="color:black; padding-top: 80px">STIE PASAMAN</p>	