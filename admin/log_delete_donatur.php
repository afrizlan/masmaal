<?php 
include 'DB_driver.php';

$del=$_GET['id'];
$query1 = mysql_query("DELETE FROM data_transaksi_donatur where ID_TRANSAKSI = '$del'");			
?>
<script language = "JavaScript">
			document.location='form_transaksi_donatur.php';
			alert('Data Berhasil Dihapus.');
</script>