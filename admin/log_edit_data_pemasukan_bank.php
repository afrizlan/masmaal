<?php 
	include 'DB_driver.php';
	
	$no_transaksi_bank= $_POST['NO_TRANSAKSI'];
	$kode_bank= $_POST['KODE_KATEGORI'];
	$nama_pemasukan= $_POST['NAMA_PEMASUKAN'];
	$nama_pengeluaran= $_POST['NAMA_PENGELUARAN'];
	$tanggal_laporan= $_POST['TANGGAL'];
	$bulan_laporan= $_POST['BULAN_LAPORAN'];
	$tahun_laporan= $_POST['TAHUN_LAPORAN'];
	$masuk_bank= $_POST['MASUK'];
	$keluar_bank= $_POST['KELUAR'];
	$keterangan= $_POST['KETERANGAN'];
	
	if($no_transaksi_bank=='' || $tanggal_laporan=='' ||  $bulan_laporan=='' || $tahun_laporan=='' || $masuk_bank=='' || $keluar_bank=='' || $keterangan=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap');
			document.location='form_transaksi.php';
					  </script>"; 
	}else{
	$query = "UPDATE data_transaksi SET	NO_TRANSAKSI='$no_transaksi_bank', KODE_KATEGORI='$kode_bank', NAMA_PEMASUKAN='$nama_pemasukan',  NAMA_PENGELUARAN='$nama_pengeluaran', TANGGAL='$tanggal_laporan', BULAN_LAPORAN='$bulan_laporan', TAHUN_LAPORAN='$tahun_laporan', MASUK='$masuk_bank', KELUAR='$keluar_bank', KETERANGAN='$keterangan' 
			  WHERE NO_TRANSAKSI='$no_transaksi_bank'";
			
			$result= mysql_query($query) or die(mysql_error());}
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_transaksi.php';
			alert('Data berhasil diubah');
			</script>
			<?php
			}	
		
  ?>
