<?php 
	include 'DB_driver.php';
	
	$ID_TRANSAKSI=$_POST['ID_TRANSAKSI'];
	$TANGGAL_TRANSAKSI=$_POST['TANGGAL_TRANSAKSI'];
	$NAMA_DONATUR=$_POST['NAMA_DONATUR'];
	$JUMLAH_DONASI_L=$_POST['JUMLAH_DONASI_L'];
	$JUMLAH_DONASI_TL=$_POST['JUMLAH_DONASI_TL'];
	$KODE_DONATUR=$_POST['KODE_DONATUR'];
	$KETERANGAN=$_POST['KETERANGAN'];
	
	if($ID_TRANSAKSI=='' || $TANGGAL_TRANSAKSI=='' || $NAMA_DONATUR=='' || $JUMLAH_DONASI_L=='' || $JUMLAH_DONASI_TL==''|| $KODE_DONATUR=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap');
			document.location='form_edit_donatur.php';
					  </script>"; 
	}else{
	$query = "UPDATE data_transaksi_donatur SET	ID_TRANSAKSI='$ID_TRANSAKSI', TANGGAL_TRANSAKSI='$TANGGAL_TRANSAKSI', NAMA_DONATUR='$NAMA_DONATUR', JUMLAH_DONASI_L='$JUMLAH_DONASI_L', JUMLAH_DONASI_TL='$JUMLAH_DONASI_TL', KODE_DONATUR='$KODE_DONATUR', KETERANGAN='$KETERANGAN' 
			  WHERE ID_TRANSAKSI='$ID_TRANSAKSI'";
			
			$result= mysql_query($query) or die(mysql_error());}
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_transaksi_donatur.php';
			alert('Data berhasil diubah');
			</script>
			<?php
			}
  ?>
