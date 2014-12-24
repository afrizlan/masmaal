<?php
include 'DB_driver.php';

$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = mysql_query("select KODE_PENGELUARAN from kategory_pengeluaran where KODE_PENGELUARAN LIKE '%$q%'");
while($r = mysql_fetch_array($sql)) {
	$KODE_PENGELUARAN = $r['KODE_PENGELUARAN'];
	echo "$KODE_PENGELUARAN\n";
}
?>
