<?php 
	include 'DB_driver.php';
	
	$KODE_DONATUR=$_POST['KODE_DONATUR'];
	$NAMA_DONATUR=$_POST['NAMA_DONATUR'];
	$JUMLAH_DONASI=$_POST['JUMLAH_DONASI'];
	$KETERANGAN=$_POST['KETERANGAN'];
	
	if($KODE_DONATUR=='' || $NAMA_DONATUR=='' || $JUMLAH_DONASI=='' || $KETERANGAN=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap');
			document.location='form_register_kat_donatur.php';
					  </script>"; 
	}else{
	$query = "UPDATE kategory_donatur SET KODE_DONATUR='$KODE_DONATUR', NAMA_DONATUR='$NAMA_DONATUR', JUMLAH_DONASI='$JUMLAH_DONASI', KETERANGAN='$KETERANGAN' 
			  WHERE KODE_DONATUR='$KODE_DONATUR'";
			
			$result= mysql_query($query) or die(mysql_error());}
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_kat_donatur.php';
			alert('Data berhasil diubah');
			</script>
			<?php
			}	
		
  ?>
