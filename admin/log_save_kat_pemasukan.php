<?php 
	include 'DB_driver.php';
	$KODE_PEMASUKAN=$_POST['KODE_PEMASUKAN'];
	$NAMA_PEMASUKAN=$_POST['NAMA_PEMASUKAN'];

	
	if($KODE_PEMASUKAN=='' || $NAMA_PEMASUKAN=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap');
			document.location='form_register_pegawai.php';
					  </script>"; 
	}else{
	$query="INSERT INTO kategory_pemasukan (
			KODE_PEMASUKAN,
			NAMA_PEMASUKAN) 
			VALUE(
			'$KODE_PEMASUKAN',
			'$NAMA_PEMASUKAN')";
			$result=@mysql_query($query)or die(mysql_error());
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_kat_pemasukan.php';
			alert('Data berhasil disimpan');
			</script>
			<?php
			}else{
					echo '<h2>Error!! Can not save data to database!</h2>';
				}
			}			
		
  ?>
