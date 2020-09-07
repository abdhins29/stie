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
			<th style="text-align: center;">NIM</th>
			<th style="text-align: center;">No. REGISTRASI LULUS</th>
			<th style="text-align: center;">IPK</th>
			<th style="text-align: center;">PREDIKAT KELULUSAN</th>
			<th style="text-align: center;">Pilihan</th>
		</tr>
		<?php 
		if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("select * from tbl_lulus where nmmhs like '%".$cari."%'");				
		}else{			
		$data = mysql_query("select * from tbl_lulus");		
		}$no = 1;
		while($d = mysql_fetch_array($data)){
		?>
		<tr>
		<td style="text-align: center;"><?php echo $no++; ?></td>
		<td style="text-align: center;"><?php echo $d['nmmhs'];?></td>
		<td style="text-align: center;"><?php echo $d['nim'];?></td>
		<td style="text-align: center;"><?php echo $d['noreglus'];?></td>
		<td style="text-align: center;"><?php echo $d['ipk']; ?></td>
		<td style="text-align: center;"><?php echo $d['predikat']; ?></td>
		<td style="text-align: center;">
			<a href="detailmhs.php?nim=<?php echo $d['nim'] ?>" style="text-decoration: underline; color: blue;">Detail</a> | <a href="hapusmhs.php?nim=<?php echo$d['nim'] ?>" style="text-decoration: underline; color: blue;">Hapus</a>
		</td>
	</tr>
<?php		
	}
?>
	</table>
	</form>
</body>