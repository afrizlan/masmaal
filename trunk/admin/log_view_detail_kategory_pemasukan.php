<?php
include"DB_driver.php";

$query = "SELECT * FROM kategory_pemasukan ORDER BY KODE_PEMASUKAN";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil)) {
    $KODE_PEMASUKAN=$data['KODE_PEMASUKAN'];
	$NAMA_PEMASUKAN=$data['NAMA_PEMASUKAN'];
	
	echo "
	<tr>
	<td align=right><center>$data[KODE_PEMASUKAN]</center></td>
	<td>$data[NAMA_PEMASUKAN]</td>
	</tr>";
}
echo "</table>";

?>