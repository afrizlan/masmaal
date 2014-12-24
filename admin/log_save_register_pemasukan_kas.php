<?php
//session_start();
include 'DB_driver.php';

$no_transaksi= $_POST['NO_TRANSAKSI'];
$kode_pemasukan= $_POST['kode_pemasukan'];
$nama_pemasukan= $_POST['nama_pemasukan'];
$tanggal= $_POST['TANGGAL'];
$bulan_laporan= $_POST['BULAN_LAPORAN'];
$tahun_laporan=$_POST['TAHUN_LAPORAN'];
$masuk_laporan= $_POST['MASUK'];
$keterangan= $_POST['KETERANGAN'];
$set= true;

	if($no_transaksi=='' || $kode_pemasukan=='' || $nama_pemasukan=='' || $tanggal=='' || $bulan_laporan=='' || $tahun_laporan=='' || $masuk_laporan=='' || $keterangan=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukkan tidak lengkap');
			document.location='form_register_pemasukan_kas.php';
					  </script>"; 
	}else{
	$query="INSERT INTO data_transaksi(
			FLAG,
			NO_TRANSAKSI,
			KODE_KATEGORI,
			NAMA_PEMASUKAN,
			TANGGAL,
			BULAN_LAPORAN,
			TAHUN_LAPORAN,
			MASUK,
			KETERANGAN) VALUES
			('0',
			'$no_transaksi',
			'$kode_kategori',
			'$nama_pemasukan',
			'$tanggal',
			'$bulan_laporan',
			'$tahun_laporan',
			'$masuk_laporan',
			'$keterangan')";
		
			$result=@mysql_query($query)or die(mysql_error());
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_transaksi.php';
			alert('Data Berhasil Disimpan.');
			</script>
			<?php
			}else{
					echo '<h2>Error!! Can not save data to database!</h2>';
				}
			}
	
?>