<?php
//session_start();
include 'DB_driver.php';

$no_transaksi= $_POST['NO_TRANSAKSI'];
$user_id= $_POST['user_id'];
$kode_pemasukan= $_POST['KODE_KATEGORI'];
$nama_pemasukan= $_POST['NAMA_PEMASUKAN'];
$tanggal= $_POST['TANGGAL'];
list($tahun, $bulan, $tanggalsaja) = explode("-", $tanggal);
$bulan_laporan = $bulan;
$tahun_laporan = $tahun;
//$tahun_laporan=$_POST['TAHUN_LAPORAN'];
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
			USER_ID,
			KODE_KATEGORI,
			NAMA_PEMASUKAN,
			TANGGAL,
			BULAN_LAPORAN,
			TAHUN_LAPORAN,
			MASUK,
			KETERANGAN) VALUES
			('0',
			'$no_transaksi',
			'$user_id',
			'$kode_pemasukan',
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