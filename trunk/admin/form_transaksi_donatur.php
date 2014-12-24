<?php include('header.php'); ?>

		
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_transaksi_donatur.php">Manajemen Transaksi</a>
					</li>
				</ul>
			</div>
			
			<?php 
			include('DB_driver.php');
				$query1 = mysql_query("Select sum(JUMLAH_DONASI_L)+sum(JUMLAH_DONASI_TL) as saldototal from data_transaksi_donatur") or die(mysql_error());
				$data_pemasukan_donatur = mysql_fetch_array($query1);
				{ 
			?>
			<label class="control-label" for="appendedPrependedInput"><h4>Saldo Total:</h4></label>
				<div class="input-prepend input-append">
					<span class="add-on">Rp</span><input id="saldo_kas" size="12" type="text" value="<?php echo number_format($data_pemasukan_donatur["saldototal"]); }?>" readonly><span class="add-on">.00</span>
					</div>
			<?php 
			include('DB_driver.php');
				$query2 = mysql_query("Select sum(JUMLAH_DONASI_L) as total1 from data_transaksi_donatur") or die(mysql_error());
				$data_pemasukan_donatur2 = mysql_fetch_array($query2);
				{ 
			?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-plus"></i> Daftar Transaksi Donatur Langsung</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
					<div class="box-content">
				    <div class="span12">
					<div class="span6"><a class="btn btn-success" href="../admin/form_register_pemasukan_donatur_langsung.php"><i class="icon icon-white icon-add"></i> Tambah Pemasukan</a>
					</div>
					<div class="span6">
					<div class="control-group">
								<label class="control-label" for="appendedPrependedInput"><h4>Saldo Kas:</h4></label>
								<div class="controls">
								  <div class="input-prepend input-append">
									<span class="add-on">Rp</span><input id="saldo_kas" size="12" type="text" value="<?php echo number_format($data_pemasukan_donatur2["total1"]); } ?>" readonly=readonly><span class="add-on">.00</span>
								  </div>
								</div>
					</div>
					</div>
					</div>
					
					<div class="box-content">
					<div class="box span12">
					<div class="box-content">
					<form method=POST action=log_view_pemasukan_donatur_langsung.php>
						<table class="table table-striped table-bordered bootstrap-datatable datatable" border="1" cellpadding="3">
						  <thead>
							  <tr>
									<td rowspan="1" valign="middle"><b><center>BUKTI TRANSAKSI</center></b></td>
									<td rowspan="1" valign="middle"><b><center>TANGGAL TRANSAKSI</center></b></td>
									<td rowspan="1" valign="middle"><b><center>NAMA DONATUR</center></b></td>
									<td rowspan="1" valign="middle"><b><center>JUMLAH DONASI</center></b></td>
									<td rowspan="1" valign="middle"><b><center>KODE DONATUR</center></b></td>
									<td rowspan="1" valign="middle"><b><center>KETERANGAN</center></b></td>	
									<td rowspan="1" valign="middle"><b><center>ACTION</center></b></td>	
								</td>
									</tr>
						  </thead> 


<?php
include"log_view_pemasukan_donatur_langsung.php";
?>
</table>
</form>            	</div>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			</div>
			
			<?php 
			include('DB_driver.php');
				$query3 = mysql_query("Select sum(JUMLAH_DONASI_TL) as total2 from data_transaksi_donatur") or die(mysql_error());
				$data_pemasukan_donatur3 = mysql_fetch_array($query3);
				{ 
			?>
				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-plus"></i> Daftar Transaksi Donatur Tidak Langsung</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
					
					<div class="box-content">
					<div class="span6"><a class="btn btn-success" href="../admin/form_register_pemasukan_donatur_tidak_langsung.php"><i class="icon icon-white icon-add"></i> Tambah Pemasukan</a>
					</div>
					<div class="span6">
					<div class="control-group">
								<label class="control-label" for="appendedPrependedInput"><h4>Saldo Bank:</h4></label>
								<div class="controls">
								  <div class="input-prepend input-append">
									<span class="add-on">Rp</span><input id="saldo_bank" size="12" type="text" value="<?php echo number_format($data_pemasukan_donatur3["total2"]) ; } ?>" readonly=readonly><span class="add-on">.00</span>
								  </div>
								</div>
					</div>
					</div>
					
					<div class="box-content">
					<div class="box span12">
					<div class="box-content">
					<form method=POST action=log_view_pemasukan_donatur_tidak_langsung.php>
						<table class="table table-striped table-bordered bootstrap-datatable datatable" border="1" cellpadding="5">
						  <thead>
							 <tr>
									<td rowspan="1" valign="middle"><b><center>BUKTI TRANSAKSI</center></b></td>
									<td rowspan="1" valign="middle"><b><center>TANGGAL TRANSAKSI</center></b></td>
									<td rowspan="1" valign="middle"><b><center>NAMA DONATUR</center></b></td>
									<td rowspan="1" valign="middle"><b><center>JUMLAH DONASI</center></b></td>
									<td rowspan="1" valign="middle"><b><center>KODE DONATUR</center></b></td>
									<td rowspan="1" valign="middle"><b><center>KETERANGAN</center></b></td>	
									<td rowspan="1" valign="middle"><b><center>ACTION</center></b></td>	
							</tr>
						  </thead> 

<?php
include"log_view_pemasukan_donatur_tidak_langsung.php";
?>
</table>
</form>            	</div>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			</div>
		
<?php include('footer.php'); ?>
