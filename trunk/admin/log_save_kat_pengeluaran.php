<?php 
	include 'DB_driver.php';
	$KODE_PENGELUARAN=$_POST['KODE_PENGELUARAN'];
	$NAMA_PENGELUARAN=$_POST['NAMA_PENGELUARAN'];
	
	if($KODE_PENGELUARAN=='' || $NAMA_PENGELUARAN=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap');
			document.location='form_register_pegawai.php';
					  </script>"; 
	}else{
	$query="INSERT INTO kategory_pengeluaran (
			KODE_PENGELUARAN,
			NAMA_PENGELUARAN) 
			VALUE(
			'$KODE_PENGELUARAN',
			'$NAMA_PENGELUARAN')";
			$result=@mysql_query($query)or die(mysql_error());
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_kat_pengeluaran.php';
			alert('Data berhasil disimpan');
			</script>
			<?php
			}else{
					echo '<h2>Error!! Can not save data to database!</h2>';
				}
			}			
		
  ?>
