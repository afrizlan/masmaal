<?php include('header.php'); ?>

		
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_tim.php">Manajemen Transaksi</a>
					</li>
				</ul>
			</div>
					
			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Edit Data Pemasukan dan Pengeluaran Kas</h2>
					</div>
					<?php 
					include('DB_driver.php');
					$id = $_GET['id'];
					$query = mysql_query("select * from data_transaksi where NO_TRANSAKSI ='$id' LIMIT 1") or die(mysql_error());
					$data_pemasukan_kas = mysql_fetch_array($query);
					{ 
					?>
					<div class="box-content">
						<form class="form-horizontal" action="log_edit_data_pemasukan_kas.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="NO_TRANSAKSI_KAS">NO. TRANSAKSI</label>
								<div class="controls">
								  <input class="input-large focused" name="NO_TRANSAKSI" type="text" value="<?php echo $data_pemasukan_kas['NO_TRANSAKSI'];?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="KODE_BANK">KODE PEMASUKAN :</label>
								<div class="controls">
								  <input class="input-medium focused" id="KODE_KATEGORI" name="KODE_KATEGORI" type="text" value="<?php echo $data_pemasukan_kas['KODE_KATEGORI'];?>" >
								  </div>
								  </div>
								<div class="control-group">
							<label class="control-label" for="NAMA_KODE">NAMA KODE PEMASUKAN:</label>
							<div class="controls">
							    <input class="input-large focused" id="NAMA_PEMASUKAN" name="NAMA_PEMASUKAN" type="text" value="<?php echo $data_pemasukan_kas['NAMA_PEMASUKAN'];?>">
							</div>
						</div>
						 <div class="control-group">
							<label class="control-label" for="NAMA_KODE">NAMA KODE PENGELUARAN:</label>
							<div class="controls">
							    <input class="input-large focused" id="NAMA_PENGELUARAN" name="NAMA_PENGELUARAN" type="text" value="<?php echo $data_pemasukan_kas['NAMA_PENGELUARAN'];?>">
							</div>
						</div>
							  <div class="control-group">
								<label class="control-label" for="TANGGAL_KAS">TANGGAL TRANSAKSI</label>
								<div class="controls">
								  <input class="input-large focused" id="TANGGAL_LAPORAN" name="TANGGAL" type="date" value="<?php echo $data_pemasukan_kas['TANGGAL'];?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="TANGGAL_KAS">BULAN TRANSAKSI</label>
								<div class="controls">
								  <select name="BULAN_LAPORAN" size="1" id="BULAN_LAPORAN" value="<?php ?>">
									<?php
								 $bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
								 for ($i=1;$i<=12;$i++)
								 {
								   echo "<option value=".$i.">".$bulan[$i]."</option>";
								 }
							  ?>
								  </select>
								  </div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="TAHUN_LAPORAN">TAHUN TRANSAKSI</label>
								<div class="controls">
								  <select name="TAHUN_LAPORAN" size="1" id="TAHUN_LAPORAN" value="<?php echo $data_pemasukan_kas['TAHUN_LAPORAN'];?>">
									<?php
								 for ($i=2014;$i<=2150;$i++)
								 {
								   echo "<option value=".$i.">".$i."</option>";
								 }
							  ?> 
								  </select>
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="MASUK_KAS">MASUK</label>
								<div class="controls">
								  <input class="input-large focused" id="MASUK_KAS" name="MASUK" type="text" value="<?php echo $data_pemasukan_kas['MASUK'];?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="KELUAR_KAS">KELUAR</label>
								<div class="controls">
								  <input class="input-large focused" id="KELUAR_KAS" name="KELUAR" type="text" value="<?php echo $data_pemasukan_kas['KELUAR'];?>">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="KETERANGAN">KETERANGAN</label>
								<div class="controls">
								  <input class="input-large focused" name="KETERANGAN" type="text" value="<?php echo $data_pemasukan_kas['KETERANGAN'];?>">
								</div>
							  </div>
							  <div class="form-actions" align="center" >
							  <button type="submit" class="btn btn-primary" name="edit">Simpan Perubahan</button>
							  <a class="btn btn-danger" href="../admin/form_transaksi.php"><i class="icon icon-white icon-cross "></i> Batal</a>
							  </div>
							</fieldset>
						  </form>
					<?php
					}
					?>
					</div>
				</div><!--/span-->
				
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-book"></i> Keterangan </h2>
					</div>
					<div class="box-content">
						<div class="span7">
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
						<div class="span5">
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

							
</div>				</div><!--/span-->
<?php include('footer.php'); ?>