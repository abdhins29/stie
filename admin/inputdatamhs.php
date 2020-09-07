<?php 
include "akses.php";
include "../admin/header.php";
?>
<link rel="stylesheet" href="../asset/css/input.css">
<body style="background-image: url(../config/bg-u.jpg);">
	<div id="body">
		<form method="POST" action="simpanmhs.php">
			<div class="container">
				<h2 class="form-group-heading">INPUT DATA LULUSAN</h2>
				<div class="form-group">
					<input type="text" name="nim" class="form-control" placeholder="NIM" required>
					<input type="text" name="nmmhs" class="form-control" placeholder="NAMA MAHASISWA" required>
					<input type="text" name="noreglus" class="form-control" placeholder="No. REGISTRASI LULUS" required>
					<input type="text" name="ipk" class="form-control" placeholder="IPK" required>
					<select name="predikat" class="form-control" required>
						<option value="PILIH-PREDIKAT-KELULUSAN">--PILIH PREDIKAT KELULUSAN--</option>
						<option value="MEMUASKAN">MEMUASKAN</option>
						<option value="SANGAT MEMUASKAN">SANGAT MEMUASKAN</option>
					</select>
					<select name="nmprodi" class="form-control" required>
						<option value="pilih-prodi">--Pilih Prodi--</option>
						<option value="S1 MANAJEMEN">S1 MANAJEMEN</option>
					</select>
					<input type="year" name="tahunlulus" class="form-control" placeholder="TAHUN LULUS MAHASISWA" required>
				</div>
				<div class="form-group-btn">
					<button class="btn btn-lg btn-primary btn-block" type="submit" name="simpan">SIMPAN</button>
				</div>
			</div>
		</form>
	</div>
</body>