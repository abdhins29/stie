<?php 
$server = "localhost";
$user = "root";
$pass = "";
$db = "db_stie";

$koneksi = mysql_connect($server,$user,$pass) or die("KONEKSI GAGAL!");
$koneksi_db = mysql_select_db($db) or die("DATABASE TIDAK DITEMUKAN!")
?>