<?php 
	include 'DB_driver.php';
	
	$KODE_PEMASUKAN=$_POST['KODE_PEMASUKAN'];
	$NAMA_PEMASUKAN=$_POST['NAMA_PEMASUKAN'];
	
	
	if($KODE_PEMASUKAN=='' || $NAMA_PEMASUKAN=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap');
			document.location='form_register_kat_pemasukan.php';
					  </script>"; 
	}else{
	$query = "UPDATE kategory_pemasukan SET	KODE_PEMASUKAN='$KODE_PEMASUKAN', NAMA_PEMASUKAN='$NAMA_PEMASUKAN' WHERE KODE_PEMASUKAN='$KODE_PEMASUKAN'";
			
			$result= mysql_query($query) or die(mysql_error());}
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_kat_pemasukan.php';
			alert('Data berhasil diubah');
			</script>
			<?php
			}	
		
  ?>
