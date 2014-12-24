<?php
session_start();
/*
session_is_registered() sebaiknya tidak digunakan (Deprecated Function)
if( session_is_registered( 'ID' ) || session_is_registered( 'PASS' ) )
*/
if( isset($_SESSION['ID']) || isset($_SESSION['PASS']) )
{
 //session_unregister( 'ID' ); Deprecated Function
 //session_unregister( 'PASS' ); Deprecated Function
 //unset( $ID, $PASS );

 // kembalikan variabel session ke kondisi null (kosong)
 $_SESSION = array();

 // terakhir, hancurkan session
 session_destroy();
 header("location:http://localhost:82/SISACT");
}
else
{
 echo 'Anda belum <a href="http://localhost:82/SISACT/home/login.php">login</a>';
}
?>