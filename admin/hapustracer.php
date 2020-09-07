<?php
if(! $_GET['nmmhs']=="")
{
include"../config/koneksi.php";
$sqlHapus = "delete from tbl_tracer where nmmhs='".$_GET['nmmhs']."'";
$queryHapus = mysql_query($sqlHapus);
if($queryHapus)
{
echo "<script type='text/javascript'>
      alert('Data Berhasil DiHapus!');
      document.location='lihatdatatracer.php';
      </script>";
}
else
{
echo "<script type='text/javascript'>
      alert('Data Gagal DiHapus!');
      document.location='lihatdatatracer.php';
      </script>";
}
}
?>