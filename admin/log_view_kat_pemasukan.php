<?php
include"DB_driver.php";

$query = "SELECT * FROM kategory_pemasukan ORDER BY KODE_PEMASUKAN";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil)) {
	$NAMA_PEMASUKAN=$data['NAMA_PEMASUKAN'];
	$KODE_PEMASUKAN=$data['KODE_PEMASUKAN'];
	;
	echo "
	<tr>
	<td align=right><center>$data[KODE_PEMASUKAN]</center></td>
	<td>$data[NAMA_PEMASUKAN]</td>
	<td align=center>
	<a class='btn btn-primary' href=form_edit_kat_pemasukan.php?id=$data[KODE_PEMASUKAN]><i class='icon-book icon-white'></i>Edit</a></div>
	<a class='btn btn-danger' href=log_delete_kat_pemasukan.php?id=$data[KODE_PEMASUKAN]><i class='icon-trash icon-white'></i>Delete</a>
	</td>
	</tr>";
}
echo "</table>";

?>