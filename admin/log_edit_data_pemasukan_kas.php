<?php 
	include 'DB_driver.php';
	
	$no_transaksi_kas= $_POST['NO_TRANSAKSI'];
	$kode_kas= $_POST['KODE_KATEGORI'];
	$nama_pemasukan= $_POST['NAMA_PEMASUKAN'];
	$nama_pengeluaran= $_POST['NAMA_PENGELUARAN'];
	$tanggal_laporan= $_POST['TANGGAL'];
	$bulan_laporan= $_POST['BULAN_LAPORAN'];
	$tahun_laporan= $_POST['TAHUN_LAPORAN'];
	$masuk_kas= $_POST['MASUK'];
	$keluar_kas= $_POST['KELUAR'];
	$keterangan= $_POST['KETERANGAN'];
	
	if($no_transaksi_kas=='' || $tanggal_laporan=='' || $bulan_laporan=='' || $tahun_laporan=='' || $masuk_kas=='' || $keluar_kas=='' || $keterangan=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap silahkan pilih kembali lagi');
			document.location='form_transaksi.php';
					  </script>"; 
	}else{
	$query = "UPDATE data_transaksi SET	NO_TRANSAKSI='$no_transaksi_kas', KODE_KATEGORI='$kode_kas', NAMA_PEMASUKAN='$nama_pemasukan',  NAMA_PENGELUARAN='$nama_pengeluaran', TANGGAL='$tanggal_laporan', BULAN_LAPORAN='$bulan_laporan', TAHUN_LAPORAN='$tahun_laporan', MASUK='$masuk_kas', KELUAR='$keluar_kas', KETERANGAN='$keterangan' 
			  WHERE NO_TRANSAKSI='$no_transaksi_kas'";
			
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
