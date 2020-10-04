<?php
session_start();
if (isset ($_SESSION['idPeserta'])) {
include ("../includes/koneksi.php");

$update ="UPDATE peserta SET
		idPeserta ='$_POST[idPeserta]',
		namaPeserta ='$_POST[namaPeserta]',
		nimPeserta = '$_POST[nimPeserta]',
		hpPeserta ='$_POST[hpPeserta]',
		emailPeserta ='$_POST[emailPeserta]',
		jenisPeserta = '$_POST[jenisPeserta]' WHERE idPeserta='$_POST[idPeserta]'";
		mysql_query ($update);
		echo "<center>Data berhasil di update </center>";
		echo "<center> <a href=daftartiket.php>Back Tampil Data </a></center>";
header('location:peserta.php');
?>