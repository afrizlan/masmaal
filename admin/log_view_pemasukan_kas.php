<?php
include"DB_driver.php";

$query = "SELECT * FROM data_transaksi WHERE FLAG = '0' ORDER BY NO_TRANSAKSI";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil)) {
    $NO_TRANSAKSI=$data['NO_TRANSAKSI'];
	$KODE_PEMASUKAN=$data['KODE_KATEGORI'];
	$USER_ID=$data['USER_ID'];
	$TANGGAL=$data['TANGGAL'];
	$MASUK_KAS=$data['MASUK'];
	$KELUAR_KAS=$data['KELUAR'];
	$KETERANGAN=$data['KETERANGAN'];
	echo "
	<tr>
	<td align=right><center>$data[NO_TRANSAKSI]</center></td>
	<td><center>$data[KODE_KATEGORI] </center></td>
	<td><center>$data[USER_ID] </center></td>
	<td><center>$data[TANGGAL]</center></td>
	<td><center>";echo number_format($data[MASUK]); echo "</center></td>
	<td><center>";echo number_format($data[KELUAR]); echo "</center></td>";
	
	echo "
	<td><center>$data[KETERANGAN]</center></td>
	<td align=center>
		<div class='btn-group' >
			<a class='btn btn-primary' href=form_detail_kas.php?id=$data[NO_TRANSAKSI]><i class='icon-book icon-white'></i>Detail</a>
			<a class='btn btn-primary dropdown-toggle' data-toggle='dropdown'><span class='caret'></span></a>
				<ul class='dropdown-menu'></center>
					<li>
					<a href=form_edit_pemasukan_kas.php?id=$data[NO_TRANSAKSI]><i class='icon-book'></i>Edit</a>
					</li>
					<li>
						<a href=log_delete_pemasukan_kas.php?id=$data[NO_TRANSAKSI]><i class='icon-trash'></i> Delete</a>
					</li>
				</ul>
		</div>
	</td>
	</tr>";
}
echo "</table>";
?>