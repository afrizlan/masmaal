<?php
// menggunakan class phpExcelReader
include "excel_reader2.php";

// koneksi ke mysql
include 'DB_driver.php';

// membaca file excel yang diupload
$data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);

// membaca jumlah baris dari data excel
$baris = $data->rowcount($sheet_index=0);

// nilai awal counter untuk jumlah data yang sukses dan yang gagal diimport
$sukses = 0;
$gagal = 0;

// import data excel mulai baris ke-2 (karena baris pertama adalah nama kolom)
for ($i=2; $i<=$baris; $i++)
{
		$SALES_ID = $data->val($i, 1);
		$NO_KTP_PEGAWAI = $data->val($i, 2);
		$NAMA_PEGAWAI	= $data->val($i, 3);
		$USERNAME_PEGAWAI = $data->val($i, 4);
		$PASSWORD_PEGAWAI	= $data->val($i, 5);
		$TEMPAT_lAHIR	= $data->val($i, 6);
		$TANGGAL_LAHIR= $data->val($i, 7);
		$HAK_AKSES_PEGAWAI= $data->val($i, 8);
		$STATUS_PEGAWAI  = $data->val($i, 9);
		$STATUS_POSISI= $data->val($i, 10);
		$ALAMAT_PEGAWAI = $data->val($i, 11);
		$NO_TELP_PEGAWAI = $data->val($i, 12);
		$HANDPHONE_PEGAWAI = $data->val($i, 13);

  // setelah data dibaca, sisipkan ke dalam tabel mhs
  $query = "INSERT INTO pegawai VALUES (
				'$SALES_ID', 
				'$NO_KTP_PEGAWAI', 
				'$NAMA_PEGAWAI',	
				'$USERNAME_PEGAWAI', 
				'$PASSWORD_PEGAWAI',
				'$TEMPAT_lAHIR',	
				'$TANGGAL_LAHIR',
				'$HAK_AKSES_PEGAWAI',
				'$STATUS_PEGAWAI',
				'$STATUS_POSISI',
				'$ALAMAT_PEGAWAI', 
				'$NO_TELP_PEGAWAI', 
				'$HANDPHONE_PEGAWAI' 
			)";
  $hasil = mysql_query($query);

  // jika proses insert data sukses, maka counter $sukses bertambah
  // jika gagal, maka counter $gagal yang bertambah
  if ($hasil) $sukses++;
  else $gagal++;
}
?>
			<script language = "JavaScript">
			document.location='form_pegawai.php';
			alert(
			'<?php 
			echo "Proses import data pegawai selesai";
			echo "Jumlah data yang sukses diimport : ".$sukses."";
			echo "Jumlah data yang gagal diimport : ".$gagal."";?>');
			</script>
			<?php
// tampilan status sukses dan gagal
 
 

?>