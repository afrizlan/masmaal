<?php 
	include 'DB_driver.php';
	
	$KODE_PENGELUARAN=$_POST['KODE_PENGELUARAN'];
	$NAMA_PENGELUARAN=$_POST['NAMA_PENGELUARAN'];
	
	if($KODE_PENGELUARAN=='' || $NAMA_PENGELUARAN=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap');
			document.location='form_register_kat_pengeluaran.php';
					  </script>"; 
	}else{
	$query = "UPDATE kategory_pengeluaran SET KODE_PENGELUARAN='$KODE_PENGELUARAN', NAMA_PENGELUARAN='$NAMA_PENGELUARAN' WHERE KODE_PENGELUARAN='$KODE_PENGELUARAN'";
			
			$result= mysql_query($query) or die(mysql_error());}
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_kat_pengeluaran.php';
			alert('Data berhasil diubah');
			</script>
			<?php
			}	
		
  ?>
