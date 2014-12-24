<?php
include"DB_driver.php";

$query = "SELECT * FROM kategory_pengeluaran ORDER BY KODE_PENGELUARAN";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil)) {
    $KODE_PENGELUARAN=$data['KODE_PENGELUARAN'];
	$NAMA_PENGELUARAN=$data['NAMA_PENGELUARAN'];
	
	echo "
	<tr>
	<td align=right><center>$data[KODE_PENGELUARAN]</center></td>
	<td>$data[NAMA_PENGELUARAN]</td>
	</tr>";
}
echo "</table>";

?>