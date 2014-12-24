<?php 
include 'DB_driver.php';

$del=$_GET['id'];
$query1 = mysql_query("DELETE FROM data_transaksi where NO_TRANSAKSI= '$del'");
?>
<script language = "JavaScript">
			document.location='form_transaksi.php';
			alert('Data Berhasil Dihapus.');
</script>