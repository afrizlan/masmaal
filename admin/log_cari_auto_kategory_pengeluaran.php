<?php
include 'DB_driver.php';

$kode	= $_POST[kode];

$sql 	= mysql_query("select * from kategory_pengeluaran where KODE_PENGELUARAN='$kode'");
$row	= mysql_num_rows($sql);
if($row>0){
	$r = mysql_fetch_array($sql);
	$data['NAMA_PENGELUARAN'] = $r[NAMA_PENGELUARAN];
	echo json_encode($data);
}else{
	$data['NAMA_PENGELUARAN'] = '';
	echo json_encode($data);
}
?>
