<?php
	require_once 'config.php';
	require_once 'db_sales_act.php';
	$db = new db_sales_act($host,$user,$pass,$dbnm);
	$db->_connect();
	
session_start();

	/* Ambil variabel */
	$username = htmlentities($_REQUEST['USERNAME_PEGAWAI'],ENT_QUOTES);
	$passw = $_REQUEST['PASSWORD_PEGAWAI'];
	$id = null;
	
	/* Validasi */
	$error = 0;
	

if( empty( $username ) || empty( $passw ) ) {
	//echo 'Tidak boleh ada kolom yang kosong.<br>';
	$error++;
}
else {
	$sql = 'select * from pegawai where USERNAME_PEGAWAI="'.$username.'"';
	$query = mysql_query( $sql );
	$row = mysql_fetch_row( $query );
	
	if( empty( $row[1] ) ){
		//echo 'User tidak dikenal.<br>';
		$error++;
	}
	
	else {
		if( $row['12'] != $passw ) {
		//echo 'Password salah.<br>';
		$error++;
		}
		else {
		/*Daftarkan ke server sbg variabel global*/
		/* session_register() Sebaiknya tdk digunakan (Deprecated Function)
		session_register( 'ID', 'PASS' );
		*/
		$sql = 'select * from pegawai where USERNAME_PEGAWAI="'.$username.'"';
		$query = mysql_query( $sql );
		$data = mysql_fetch_object ( $query );
		$id = $data -> SALES_ID;
		$tipe = $data -> HAK_AKSES_PEGAWAI;
		$_SESSION['ID'] = $id;
		$_SESSION['TIPE'] = $tipe;
		
		}
	}
}

if( $error == 0 ) {
	/* Redirect jika tidak ada error */
	if ($_SESSION['TIPE']==1){
	header( 'Location:../../admin/index.php' );
	}
	else {
	header( 'Location:../../member/index.php' );
	}
	exit();
}
else {
	header("location:http://localhost:82/SISACT/index.php?try_again");
	exit();
}
?>