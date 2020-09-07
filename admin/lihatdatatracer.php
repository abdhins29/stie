<?php
include "akses.php";
include "../config/koneksi.php";
include "../admin/header.php";
?>
<body style="background-image: url(../config/bg-u.jpg);">
	<form class="container">
		<div class="form-group">
			<div class="input-group">
				<input type="text" class="form-control" name="cari" placeholder="CARI BERDASARKAN NAMA MAHASISWA YANG LULUS">
				<div class="input-group-btn">
				<button class="btn btn-success" type="submit">Cari</button>
				</div>
			</div>
		</div>
				<?php 
				if(isset($_GET['cari'])){
					$cari = $_GET['cari'];
					echo "<b>Hasil pencarian : ".$cari."</b>";
				}
				?>
	<table class="table table-bordered" style="background-color: lime; border: 2px solid black;">
		<tr>
			<th style="text-align: center;">No.</th>
			<th style="text-align: center;">NAMA</th>
			<th style="text-align: center;">KODE PERGURUAN TINGGI</th>
			<th style="text-align: center;">NAMA PERGURUAN TINGGI</th>
			<th style="text-align: center;">TAHUN LULUS</th>
			<th style="text-align: center;">Pilihan</th>
		</tr>
		<?php 
		if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("select * from tbl_tracer where nmmhs like '%".$cari."%'");				
		}else{			
		$data = mysql_query("select * from tbl_tracer");		
		}$no = 1;
		while($d = mysql_fetch_array($data)){
		?>
		<tr>
		<td style="text-align: center;"><?php echo $no++; ?></td>
		<td style="text-align: center;"><?php echo $d['nmmhs'];?></td>
		<td style="text-align: center;"><?php echo $d['kodept'];?></td>
		<td style="text-align: center;"><?php echo $d['namapt'];?></td>
		<td style="text-align: center;"><?php echo $d['tahunlulus']; ?></td>
		<td style="text-align: center;">
			<a href="detailtracer.php?nmmhs=<?php echo $d['nmmhs'] ?>" style="text-decoration: underline; color: blue;">Detail</a> | <a href="hapustracer.php?nmmhs=<?php echo$d['nmmhs'] ?>" style="text-decoration: underline; color: blue;">Hapus</a>
		</td>
	</tr>
<?php		
	}
?>
	</table>
	</form>
</body>