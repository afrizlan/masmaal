<?php
//session_start();
include 'DB_driver.php';

$no_transaksi= $_POST['ID_TRANSAKSI'];
$user_id= $_POST['USER_ID'];
$nama_donatur= $_POST['NAMA_DONATUR'];
$tanggal_transaksi= $_POST['TANGGAL_TRANSAKSI'];
list($tahun, $bulan, $tanggalsaja) = explode("-", $tanggal_transaksi);
$bulan_laporan = $bulan;
$tahun_laporan = $tahun;
$jumlah_donasi_tl= $_POST['JUMLAH_DONASI_TL'];
$kode_donatur= $_POST['KODE_DONATUR'];
$keterangan= $_POST['KETERANGAN'];
$set= true;

	if($no_transaksi=='' || $nama_donatur=='' || $tanggal_transaksi=='' || $jumlah_donasi_tl=='' || $kode_donatur=='' || $keterangan=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukkan tidak lengkap');
			document.location='form_register_pemasukan_donatur_tidak_langsung.php';
					  </script>"; 
	}else{
	$query="INSERT INTO data_transaksi_donatur(
			ID_TRANSAKSI,
			USER_ID,
			TANGGAL_TRANSAKSI,
			BULAN_LAPORAN,
			TAHUN_LAPORAN,
			NAMA_DONATUR,
			JUMLAH_DONASI_L,
			JUMLAH_DONASI_TL,
			KODE_DONATUR,
			KETERANGAN) VALUES
			('$no_transaksi',
			'$user_id',
			'$tanggal_transaksi',
			'$bulan_laporan',
			'$tahun_laporan',			
			'$nama_donatur',
			'$jumlah_donasi_l',
			'$jumlah_donasi_tl',
			'$kode_donatur',
			'$keterangan')";
		
			$result=@mysql_query($query)or die(mysql_error());
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_transaksi_donatur.php';
			alert('Data Berhasil Disimpan.');
			</script>
			<?php
			}else{
					echo '<h2>Error!! Can not save data to database!</h2>';
				}
			}
	
?>