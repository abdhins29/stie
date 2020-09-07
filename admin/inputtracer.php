<?php 
include "akses.php";
include "../admin/header.php";
?>
<link rel="stylesheet" href="../asset/css/input.css">
<body style="background-image: url(../config/bg-u.jpg);">
	<div id="body">
		<form method="POST" action="simpantracer.php">
			<div class="container">
				<h2 class="form-group-heading">INPUT DATA TRACER</h2>
				<div class="form-group">
					<input type="text" name="nmmhs" class="form-control" placeholder="NAMA ALUMNI" required>
					<input type="text" name="kodept" class="form-control" value="103010">
					<input type="text" name="namapt" class="form-control" value="SEKOLAH TINGGI ILMU EKONOMI (STIE) PASAMAN">
					<select name="tahunlulus" class="form-control" required>
						<option value="PILIH-TAHUN-LULUS">--PILIH TAHUN LULUS--</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
					</select>
					<input type="text" name="kodeprodi" class="form-control" value="61201">
					<input type="text" name="namaprodi" class="form-control" value="S1 MANAJEMEN">
					<input type="text" name="nohp" class="form-control" placeholder="No. HP/TELEPHONE" required>
					<input type="text" name="email" class="form-control" placeholder="ALAMAT EMAIL" required>
					
					<h2 class="form-group-heading">KUISIONER</h2>
					<label>1a. MENURUT ANDA SEBERAPA BESAR PENEKANAN PADA METODE PEMBELAJARAN DIBAWAH INI DILAKSANAKAN DIPROGRAM STUDI ANDA?(PERKULIAHAN)</label><br>
					<input type="radio" name="k1a" value="Sangat Besar"> Sangat Besar<br>
					<input type="radio" name="k1a" value="Besar"> Besar<br>
					<input type="radio" name="k1a" value="Cukup Besar"> Cukup Besar<br>
					<input type="radio" name="k1a" value="Kurang"> Kurang<br>
					<input type="radio" name="k1a" value="Tidak Sama Sekali"> Tidak Sama Sekali<br>
					<label>1b. MENURUT ANDA SEBERAPA BESAR PENEKANAN PADA METODE PEMBELAJARAN DIBAWAH INI DILAKSANAKAN DIPROGRAM STUDI ANDA?(DEMONSTRASI)</label><br>
					<input type="radio" name="k1b" value="Sangat Besar"> Sangat Besar<br>
					<input type="radio" name="k1b" value="Besar"> Besar<br>
					<input type="radio" name="k1b" value="Cukup Besar"> Cukup Besar<br>
					<input type="radio" name="k1b" value="Kurang"> Kurang<br>
					<input type="radio" name="k1b" value="Tidak Sama Sekali"> Tidak Sama Sekali<br>
					<label>1c. MENURUT ANDA SEBERAPA BESAR PENEKANAN PADA METODE PEMBELAJARAN DIBAWAH INI DILAKSANAKAN DIPROGRAM STUDI ANDA?(PARTISIPASI DALAM PROYEK RISET)</label><br>
					<input type="radio" name="k1c" value="Sangat Besar"> Sangat Besar<br>
					<input type="radio" name="k1c" value="Besar"> Besar<br>
					<input type="radio" name="k1c" value="Cukup Besar"> Cukup Besar<br>
					<input type="radio" name="k1c" value="Kurang"> Kurang<br>
					<input type="radio" name="k1c" value="Tidak Sama Sekali"> Tidak Sama Sekali<br>
					<label>1d. MENURUT ANDA SEBERAPA BESAR PENEKANAN PADA METODE PEMBELAJARAN DIBAWAH INI DILAKSANAKAN DIPROGRAM STUDI ANDA?(MAGANG)</label><br>
					<input type="radio" name="k1d" value="Sangat Besar"> Sangat Besar<br>
					<input type="radio" name="k1d" value="Besar"> Besar<br>
					<input type="radio" name="k1d" value="Cukup Besar"> Cukup Besar<br>
					<input type="radio" name="k1d" value="Kurang"> Kurang<br>
					<input type="radio" name="k1d" value="Tidak Sama Sekali"> Tidak Sama Sekali<br>
					<label>1e. MENURUT ANDA SEBERAPA BESAR PENEKANAN PADA METODE PEMBELAJARAN DIBAWAH INI DILAKSANAKAN DIPROGRAM STUDI ANDA?(PRATIKUM)</label><br>
					<input type="radio" name="k1e" value="Sangat Besar"> Sangat Besar<br>
					<input type="radio" name="k1e" value="Besar"> Besar<br>
					<input type="radio" name="k1e" value="Cukup Besar"> Cukup Besar<br>
					<input type="radio" name="k1e" value="Kurang"> Kurang<br>
					<input type="radio" name="k1e" value="Tidak Sama Sekali"> Tidak Sama Sekali<br>
					<label>1f. MENURUT ANDA SEBERAPA BESAR PENEKANAN PADA METODE PEMBELAJARAN DIBAWAH INI DILAKSANAKAN DIPROGRAM STUDI ANDA?(KERJA LAPANGAN)</label><br>
					<input type="radio" name="k1f" value="Sangat Besar"> Sangat Besar<br>
					<input type="radio" name="k1f" value="Besar"> Besar<br>
					<input type="radio" name="k1f" value="Cukup Besar"> Cukup Besar<br>
					<input type="radio" name="k1f" value="Kurang"> Kurang<br>
					<input type="radio" name="k1f" value="Tidak Sama Sekali"> Tidak Sama Sekali<br>
					<label>1g. MENURUT ANDA SEBERAPA BESAR PENEKANAN PADA METODE PEMBELAJARAN DIBAWAH INI DILAKSANAKAN DIPROGRAM STUDI ANDA?(DISKUSI)</label><br>
					<input type="radio" name="k1g" value="Sangat Besar"> Sangat Besar<br>
					<input type="radio" name="k1g" value="Besar"> Besar<br>
					<input type="radio" name="k1g" value="Cukup Besar"> Cukup Besar<br>
					<input type="radio" name="k1g" value="Kurang"> Kurang<br>
					<input type="radio" name="k1g" value="Tidak Sama Sekali"> Tidak Sama Sekali<br>
					<label>2. KAPAN ANDA MULAI MENCARI PEKERJAAN?(PEKERJAAN SAMBILAN TIDAK DIMASUKAN)</label><br>
					<input type="radio" name="k2a" value="Kira-kira 1> Bulan Sebelum Lulus"> Kira-kira 1> Bulan Sebelum Lulus<br>
					<input type="radio" name="k2a" value="Kira-kira 1> Bulan Sesudah Lulus"> Kira-kira 1> Bulan Sesudah Lulus<br>
					<input type="radio" name="k2a" value="Saya tidak mencari kerja"> Saya tidak mencari kerja (Langsung kepertanyaan 8)<br>
					<label>3. BAGAIMANA ANDA MENCARI PERKERJAAN TERSEBUT?</label><br>
					<input type="text" name="k3a" placeholder="JAWABAN ANDA" class="form-control">
					<label>4. BERAPA BULAN WAKTU YANG DIHABISKAN (SEBELUM DAN SESUDAH KELULUSAN) UNTUK MEMPEROLEH PEKERJAAN PERTAMA?</label><br>
					<input type="radio" name="k4a" value="Kira-kira 1> Bulan Sebelum Lulus"> Kira-kira 1> Bulan Sebelum Lulus<br>
					<input type="radio" name="k4a" value="Kira-kira 1> Bulan Sesudah Lulus"> Kira-kira 1> Bulan Sesudah Lulus<br>
					<label>5. BERAPA PERUSAHAAN/INSTANSI/INSTITUSI/YANG SUDAH ANDA LAMAR (LEWAT SURAT ATAU E-MAIL) SEBELUM ANDA MEMPEROLEH PEKERJAAN PERTAMA?</label>
					<input type="text" name="k5a" placeholder="JAWABAN ANDA" class="form-control">
					<label>6. BERAPA BANYAK PERUSAHAAN/INSTANSI/INSTITUSI YANG MERESPONS LAMARAN ANDA?</label>
					<input type="text" name="k6a" placeholder="JAWABAN ANDA" class="form-control">
					<label>7. BERAPA BANYAK PERUSAHAAN/INSTANSI/INSTITUSI YANG MENGUNDANG ANDA UNTUK WAWANCARA?</label>
					<input type="text" name="k7a" placeholder="JAWABAN ANDA" class="form-control">
					<label>8. APAKAH ANDA BEKERJA SAAT INI(TERMASUK KERJA SAMBILAN DAN WIRAUSAHA)?</label><br>
					<input type="radio" name="k8a" value="Ya (Jika Ya, Lanjut kepertanyaan 11)"> Ya (Jika Ya, Lanjut Kepertanyaan 11)<br>
					<input type="radio" name="k8a" value="Tidak"> Tidak<br>
					<label>9. BAGAIMANA ANDA MENGGAMBARKAN SITUASI ANDA SAAT INI?</label><br>
					<input type="text" name="k9a" placeholder="JAWABAN ANDA" class="form-control">
					<label>10. APAKAH ANDA AKTIF MENCARI PEKERJAAN DALAM 4 MINGGU TERAKHIR?</label><br>
					<input type="radio" name="k10a" value="Tidak"> Tidak<br>
					<input type="radio" name="k10a" value="Tidak, tapi saya sedang menunggu hasil lamaran kerja"> Tidak, tapi saya sedang menunggu hasil lamaran kerja<br>
					<input type="radio" name="k10a" value="Ya, saya akan mulai bekerja dalam 2 minggu kedepan"> Ya, saya akan mulai bekerja dalam 2 minggu kedepan<br>
					<input type="radio" name="k10a" value="Ya, tapi saya belum pasti akan bekerja dalam 2 minggu kedepan"> Ya, tapi saya belum pasti akan bekerja dalam 2 minggu kedepan<br>
					<input type="radio" name="k10a" value="Lainnya..."> Lainnya...<br>
					<label>11. APA JENIS PERUSAHAAN/INSTANSI/INSTITUSI TEMPAT ANDA BEKERJA SEKARANG?</label><br>
					<input type="radio" name="k11a" value="Instansi pemerintah (termasuk BUMN)"> Instansi pemerintah (termasuk BUMN)<br>
					<input type="radio" name="k11a" value="Organisani non-profit/Lembaga Swadaya Masyakarat"> Organisani non-profit/Lembaga Swadaya Masyakarat<br>
					<input type="radio" name="k11a" value="Perusahaan swasta"> Perusahaan swasta<br>
					<input type="radio" name="k11a" value="Wiraswasta/perusahaan sendiri"> Wiraswasta/perusahaan sendiri<br>
					<input type="radio" name="k11a" value="Lainnya..."> Lainnya...<br>
					<label>12. KIRA-KIRA BERAPA PENDAPATAN ANDA SETIAP BULANNYA?</label>
					<input type="text" name="k12a" class="form-control" placeholder="JAWABAN ANDA">
					<label>13. SEBERAPA ERAT HUBUNGAN ANTARA BIDANG STUDI DENGAN PEKERJAAN ANDA?</label><br>
					<input type="radio" name="k13a" value="Sangat Erat"> Sangat Erat<br>
					<input type="radio" name="k13a" value="Erat"> Erat<br>
					<input type="radio" name="k13a" value="Cukup Erat"> Cukup Erat<br>
					<input type="radio" name="k13a" value="Kurang"> Kurang<br>
					<input type="radio" name="k13a" value="Tidak Sama Sekali"> Tidak Sama Sekali<br>
					<label>14. TINGKAT PENDIDIKAN APA YANG PALING TEPAT/SESUAI UNTUK PEKERJAAN ANDA SAAT INI?</label><br>
					<input type="radio" name="k14a" value="Sangat Lebih Tinggi"> Sangat Lebih Tinggi<br>
					<input type="radio" name="k14a" value="Tingkat yang Sama"> Tingkat yang Sama<br>
					<input type="radio" name="k14a" value="Setingkat Lebih Rendah"> Setingkat Lebih Rendah<br>
					<input type="radio" name="k14a" value="Tidak Perlu Pendidikan Tinggi"> Tidak Perlu Pendidikan Tinggi<br>
					<label>15. JIKA MENURUT ANDA PEKERJAAN ANDA SAAT INI TIDAK SESUAI DENGAN PENDIDIKAN ANDA, MENGAPA ANDA MENGAMILNYA?</label><br>
					<input type="text" name="k15a" placeholder="JAWABAN ANDA" class="form-control">
					<label>16. PADA SAAT LULUS, PADA TINGGKAT MANA KOMPETENSI YANG ANDA KUASAI?</label><br>	
					<input type="text" name="k16a" placeholder="JAWABAN ANDA" class="form-control">
					<label>17. PADA SAAT LULUS, BAGAIMANA KONTRIBUSI PERGURUAN TINGGI DALAM HAL KOMPETENSI?</label><br>
					<input type="text" name="k17a" placeholder="JAWABAN ANDA" class="form-control">
					<label>18. MENURUT ANDA, PERLUKAH DIADAKAN SUATU MEDIA SEBAGAI SARANA KOMUNIKASI ANTARA ALUMNI?</label><br>
					<input type="radio" name="k18a" value="Ya"> Ya<br>
					<input type="radio" name="k18a" value="Tidak"> Tidak<br>
					<label>19. JIKA JAWABAN DIATAS "YA", MEDIA APA YANG ANDA USULKAN?</label>
					<input type="text" name="k19a" class="form-control" placeholder="JAWABAN ANDA">
				</div>
				<div class="form-group-btn">
					<button class="btn btn-lg btn-primary btn-block" type="submit" name="simpan">SIMPAN</button>
				</div>
			</div>
		</form>
	</div>
</body>