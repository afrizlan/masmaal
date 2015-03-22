<?php include('header.php'); ?>

		
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_transaksi.php">Manajemen Transaksi</a>
					</li>
				</ul>
			</div>
					
			<div class="row-fluid sortable">
				<div class="box span5">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Detail Data Pemasukan Kas</h2>
					</div>
					<?php 
					include('DB_driver.php');
					$id = $_GET['id'];
					$query = mysql_query("select * from data_transaksi where NO_TRANSAKSI='$id' LIMIT 1") or die(mysql_error());
					$data_pemasukan_kas = mysql_fetch_array($query);
					{ 
					?>
					<div class="box-content">
					<form class="form-horizontal" action="form_transaksi.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="NO_TRANSAKSI_KAS">NO. TRANSAKSI</label>
								<div class="controls">
								  <input class="input-large focused" name="NO_TRANSAKSI_KAS" type="text" value="<?php echo $data_pemasukan_kas['NO_TRANSAKSI'];?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="KODE_KAS">KODE KAS</label>
								<div class="controls">
								  <input class="input-large focused" name="KODE_KAS" type="text" value="<?php echo $data_pemasukan_kas['KODE_KATEGORI'];?>" readonly="readonly" >
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="TANGGAL_KAS">TANGGAL TRANSAKSI</label>
								<div class="controls">
								  <input class="input-large focused" id="TANGGAL_LAPORAN" name="TANGGAL_LAPORAN" type="date" value="<?php echo $data_pemasukan_kas['TANGGAL'];?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="MASUK_KAS">MASUK</label>
								<div class="controls">
								  <input class="input-large focused" id="MASUK_KAS" name="MASUK_KAS" type="text" value="<?php echo number_format($data_pemasukan_kas['MASUK']);?>" readonly="readonly">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="KELUAR_KAS">KELUAR</label>
								<div class="controls">
								  <input class="input-large focused" id="KELUAR_KAS" name="KELUAR_KAS" type="text" value="<?php echo number_format($data_pemasukan_kas['KELUAR']);?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="KETERANGAN">KETERANGAN</label>
								<div class="controls">
								  <input class="input-large focused" name="KETERANGAN" type="text" value="<?php echo $data_pemasukan_kas['KETERANGAN'];?>" readonly="readonly">
								</div>
							  </div>
							  <div class="form-actions" align="right" >
							  <a class="btn btn-danger" href="../admin/form_transaksi.php"><i class="icon icon-white icon-cross "></i> Kembali</a>
							  </div>
							</fieldset>
							</form>
					<?php
					}
					?>
					</div>
				</div><!--/span-->
				
				<div class="box span7">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-book"></i> Keterangan </h2>
					</div>
					<div class="box-content">
						<div class="span6">
						  <label class="control-label" for="activity_status"><h4>Kode Kas Pemasukan:</h4>
								<?php 
								include('DB_driver.php');
								$query2 = mysql_query("select * from kategory_pemasukan") or die(mysql_error());
									While($daftarkode = mysql_fetch_array($query2))
									{
										$KODE_PEMASUKAN=$daftarkode['KODE_PEMASUKAN'];
										$NAMA_PEMASUKAN=$daftarkode['NAMA_PEMASUKAN'];					
								?>
								<label class="control-label" for="activity_status"><?php echo "$daftarkode[KODE_PEMASUKAN]";?> = <?php echo "$daftarkode[NAMA_PEMASUKAN]";}?></label>
							</label>
						</div>
						<div class="span6">
							<label class="control-label" for="activity_status"><h4>Kode Kas Pengeluaran:</h4>
								<?php 
								include('DB_driver.php');
								$query2 = mysql_query("select * from kategory_pengeluaran") or die(mysql_error());
									While($daftarkode = mysql_fetch_array($query2))
									{
										$KODE_PENGELUARAN=$daftarkode['KODE_PENGELUARAN'];
										$NAMA_PENGELUARAN=$daftarkode['NAMA_PENGELUARAN'];					
								?>
								<label class="control-label" for="activity_status"><?php echo "$daftarkode[KODE_PENGELUARAN]";?> = <?php echo "$daftarkode[NAMA_PENGELUARAN]";}?></label>
							</label>		
</div>
</div>
				</div><!--/span-->
<?php include('footer.php'); ?>
