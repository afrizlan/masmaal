<?php 
include 'DB_driver.php';

$del=$_GET['id'];
$query1 = mysql_query("DELETE FROM kategory_pemasukan where KODE_PEMASUKAN = '$del'");			
?>
<script language = "JavaScript">
			document.location='form_kat_pemasukan.php';
			alert('Data Berhasil Dihapus.');
</script>