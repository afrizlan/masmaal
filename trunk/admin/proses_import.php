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
		$ACCOUNT_ID = $data->val($i, 1);
		$USER_ID = $data->val($i, 2);
		$FULL_NAME	= $data->val($i, 3);
		$STREET = $data->val($i, 4);
		$EXTENSION_ADDRESS	= $data->val($i, 5);
		$HOUSE_NUMBER	= $data->val($i, 6);
		$CITY= $data->val($i, 7);
		$ID_POWER_SUPPLY= $data->val($i, 8);
		$PHONE  = $data->val($i, 9);
		


  // setelah data dibaca, sisipkan ke dalam tabel mhs
  $query = "INSERT INTO master_pelanggan VALUES (
			'$ACCOUNT_ID', 
			'$USER_ID',
			'$FULL_NAME',	
			'$STREET', 
			'$EXTENSION_ADDRESS',
			'$HOUSE_NUMBER',
			'$CITY',			
			'$ID_POWER_SUPPLY',	
			'$PHONE'
			)";
  $hasil = mysql_query($query);

  // jika proses insert data sukses, maka counter $sukses bertambah
  // jika gagal, maka counter $gagal yang bertambah
  if ($hasil) $sukses++;
  else $gagal++;
}
?>
			<script language = "JavaScript">
			document.location='form_customer.php';
			alert(
			'<?php 
			echo "<h3>Proses import data selesai.</h3>";
			echo "<p>Jumlah data yang sukses diimport : ".$sukses."<br>";
			echo "Jumlah data yang gagal diimport : ".$gagal."</p>";?>');
			</script>
			<?php
// tampilan status sukses dan gagal
 
 

?>