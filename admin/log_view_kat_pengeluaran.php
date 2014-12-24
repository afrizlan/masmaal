<?php
include"DB_driver.php";

$query = "SELECT * FROM kategory_pengeluaran ORDER BY KODE_PENGELUARAN";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil)) {
    $KODE_PENGELUARAN=$data['KODE_PENGELUARAN'];
	$NAMA_PENGELUARAN=$data['NAMA_PENGELUARAN'];
	;
	echo "
	<tr>
	<td align=right><center>$data[KODE_PENGELUARAN]</center></td>
	<td>$data[NAMA_PENGELUARAN]</td>
	<td align=center>
	<a class='btn btn-primary' href=form_edit_kat_PENGELUARAN.php?id=$data[KODE_PENGELUARAN]><i class='icon-book icon-white'></i>Edit</a>
	<a class='btn btn-danger' href=log_delete_kat_PENGELUARAN.php?id=$data[KODE_PENGELUARAN]><i class='icon-trash icon-white'></i>Delete</a>
	</td>
	</tr>";
}
echo "</table>";

?>