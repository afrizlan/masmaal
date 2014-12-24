<?php 
include 'DB_driver.php';

$del=$_GET['id'];
$query1 = mysql_query("DELETE FROM kategory_donatur where KODE_DONATUR = '$del'");			
?>
<script language = "JavaScript">
			document.location='form_kat_donatur.php';
			alert('Data Berhasil Dihapus.');
</script>