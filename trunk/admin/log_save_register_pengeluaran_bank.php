<?php
//session_start();
include 'DB_driver.php';

$no_transaksi= $_POST['NO_TRANSAKSI'];
$user_id= $_POST['user_id'];
$kode_pengeluaran= $_POST['KODE_PENGELUARAN'];
$nama_pengeluaran= $_POST['NAMA_PENGELUARAN'];
$tanggal= $_POST['TANGGAL'];
$bulan_laporan= $_POST['BULAN_LAPORAN'];
$tahun_laporan= $_POST['TAHUN_LAPORAN'];
$keluar= $_POST['KELUAR'];
$keterangan= $_POST['KETERANGAN'];
$set= true;

	if($no_transaksi=='' || $kode_pengeluaran=='' || $nama_pengeluaran=='' || $tanggal=='' || $bulan_laporan=='' || $tahun_laporan=='' || $keluar=='' || $keterangan=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukkan tidak lengkap');
			document.location='form_register_pengeluaran_bank.php';
					  </script>"; 
	}else{
	$query="INSERT INTO data_transaksi(
			FLAG,
			NO_TRANSAKSI,
			USER_ID,
			KODE_KATEGORI,
			NAMA_PENGELUARAN,
			TANGGAL,
			BULAN_LAPORAN,
			TAHUN_LAPORAN,
			KELUAR,
			KETERANGAN) VALUES
			('1',
			'$no_transaksi',
			'$user_id',
			'$kode_pengeluaran',
			'$nama_pengeluaran',
			'$tanggal',
			'$bulan_laporan',
			'$tahun_laporan',					
			'$keluar', 
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