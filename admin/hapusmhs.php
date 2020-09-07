<?php
if(! $_GET['nim']=="")
{
include"../config/koneksi.php";
$sqlHapus = "delete from tbl_lulus where nim='".$_GET['nim']."'";
$queryHapus = mysql_query($sqlHapus);
if($queryHapus)
{
echo "<script type='text/javascript'>
      alert('Data Berhasil DiHapus!');
      document.location='lihatdatamhs.php';
      </script>";
}
else
{
echo "<script type='text/javascript'>
      alert('Data Gagal DiHapus!');
      document.location='lihatdatamhs.php';
      </script>";
}
}
?>