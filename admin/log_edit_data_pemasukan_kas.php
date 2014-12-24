<?php 
	include 'DB_driver.php';
	
	$no_transaksi_kas= $_POST['NO_TRANSAKSI_KAS'];
	$kode_kas= $_POST['kode_pemasukan'];
	$kode_kas2= $_POST['kode_pengeluaran'];
	$nama_pemasukan= $_POST['nama_pemasukan'];
	$nama_pengeluaran= $_POST['nama_pengeluaran'];
	$tanggal_laporan= $_POST['TANGGAL_LAPORAN'];
	$bulan_laporan= $_POST['BULAN_LAPORAN'];
	$tahun_laporan= $_POST['TAHUN_LAPORAN'];
	$masuk_kas= $_POST['MASUK_KAS'];
	$keluar_kas= $_POST['KELUAR_KAS'];
	$keterangan= $_POST['KETERANGAN'];
	
	if($no_transaksi_kas=='' || $tanggal_laporan=='' || $bulan_laporan=='' || $tahun_laporan=='' || $masuk_kas=='' || $keluar_kas=='' || $keterangan=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap silahkan pilih kembali lagi');
			document.location='form_transaksi.php';
					  </script>"; 
	}else{
	$query = "UPDATE data_transaksi_kas SET	NO_TRANSAKSI_KAS='$no_transaksi_kas', KODE_KAS='$kode_kas2', KODE_KAS='$kode_kas', NAMA_PEMASUKAN='$nama_pemasukan',  NAMA_PENGELUARAN='$nama_pengeluaran', TANGGAL_LAPORAN='$tanggal_laporan', BULAN_LAPORAN='$bulan_laporan', TAHUN_LAPORAN='$tahun_laporan', MASUK_KAS='$masuk_kas', KELUAR_KAS='$keluar_kas', KETERANGAN='$keterangan' 
			  WHERE NO_TRANSAKSI_KAS='$no_transaksi_kas'";
			
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
