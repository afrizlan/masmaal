<?php
include 'DB_driver.php';

$kode	= $_POST[kode];

$sql 	= mysql_query("select * from kategory_pemasukan where KODE_PEMASUKAN='$kode'");
$row	= mysql_num_rows($sql);
if($row>0){
	$r = mysql_fetch_array($sql);
	$data['NAMA_PEMASUKAN'] = $r[NAMA_PEMASUKAN];
	echo json_encode($data);
}else{
	$data['NAMA_PEMASUKAN'] = '';
	echo json_encode($data);
}
?>
