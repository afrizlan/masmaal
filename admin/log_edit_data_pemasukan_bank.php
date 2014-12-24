<?php 
	include 'DB_driver.php';
	
	$no_transaksi_bank= $_POST['NO_TRANSAKSI_BANK'];
	$kode_bank= $_POST['kode_pemasukan'];
	$kode_bank2= $_POST['kode_pengeluaran'];
	$nama_pemasukan= $_POST['nama_pemasukan'];
	$nama_pengeluaran= $_POST['nama_pengeluaran'];
	$tanggal_laporan= $_POST['TANGGAL_LAPORAN'];
	$bulan_laporan= $_POST['BULAN_LAPORAN'];
	$tahun_laporan= $_POST['TAHUN_LAPORAN'];
	$masuk_bank= $_POST['MASUK_BANK'];
	$keluar_bank= $_POST['KELUAR_BANK'];
	$keterangan= $_POST['KETERANGAN'];
	
	if($no_transaksi_bank=='' || $tanggal_laporan=='' ||  $bulan_laporan=='' || $tahun_laporan=='' || $masuk_bank=='' || $keluar_bank=='' || $keterangan=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap');
			document.location='form_transaksi.php';
					  </script>"; 
	}else{
	$query = "UPDATE data_transaksi_bank SET	NO_TRANSAKSI_BANK='$no_transaksi_bank', KODE_BANK='$kode_bank', KODE_BANK='$kode_bank2', NAMA_PEMASUKAN='$nama_pemasukan',  NAMA_PENGELUARAN='$nama_pengeluaran', TANGGAL_LAPORAN='$tanggal_laporan', BULAN_LAPORAN='$bulan_laporan', TAHUN_LAPORAN='$tahun_laporan', MASUK_BANK='$masuk_bank', KELUAR_BANK='$keluar_bank', KETERANGAN='$keterangan' 
			  WHERE NO_TRANSAKSI_BANK='$no_transaksi_bank'";
			
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
