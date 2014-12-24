<?php
include 'DB_driver.php';

$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = mysql_query("select KODE_PEMASUKAN from kategory_pemasukan where KODE_PEMASUKAN LIKE '%$q%'");
while($r = mysql_fetch_array($sql)) {
	$KODE_PEMASUKAN = $r['KODE_PEMASUKAN'];
	echo "$KODE_PEMASUKAN\n";
}
?>
