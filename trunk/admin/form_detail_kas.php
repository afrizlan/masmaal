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
					$query = mysql_query("select * from data_transaksi_kas where NO_TRANSAKSI_KAS='$id' LIMIT 1") or die(mysql_error());
					$data_pemasukan_kas = mysql_fetch_array($query);
					{ 
					?>
					<div class="box-content">
					<form class="form-horizontal" action="form_transaksi.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="NO_TRANSAKSI_KAS">NO. TRANSAKSI</label>
								<div class="controls">
								  <input class="input-large focused" name="NO_TRANSAKSI_KAS" type="text" value="<?php echo $data_pemasukan_kas['NO_TRANSAKSI_KAS'];?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="KODE_KAS">KODE KAS</label>
								<div class="controls">
								  <input class="input-large focused" name="KODE_KAS" type="text" value="<?php echo $data_pemasukan_kas['KODE_KAS'];?>" readonly="readonly" >
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="TANGGAL_KAS">TANGGAL TRANSAKSI</label>
								<div class="controls">
								  <input class="input-large focused" id="TANGGAL_LAPORAN" name="TANGGAL_LAPORAN" type="date" value="<?php echo $data_pemasukan_kas['TANGGAL_LAPORAN'];?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="MASUK_KAS">MASUK</label>
								<div class="controls">
								  <input class="input-large focused" id="MASUK_KAS" name="MASUK_KAS" type="text" value="<?php echo number_format($data_pemasukan_kas['MASUK_KAS']);?>" readonly="readonly">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="KELUAR_KAS">KELUAR</label>
								<div class="controls">
								  <input class="input-large focused" id="KELUAR_KAS" name="KELUAR_KAS" type="text" value="<?php echo number_format($data_pemasukan_kas['KELUAR_KAS']);?>" readonly="readonly">
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
								<label class="control-label" for="activity_status">1101 = Kas</label>
								<label class="control-label" for="activity_status">1102 = Bank</label>
								<label class="control-label" for="activity_status">4000 = Saldo Awal</label>
								<label class="control-label" for="activity_status">4200 = Infaq Dari Donatur Tetap</label>
								<label class="control-label" for="activity_status">4300 = Sumbangan Dari Donatur Tidak Tetap</label>
								<label class="control-label" for="activity_status">4400 = Infaq Untuk Program</label>
								<label class="control-label" for="activity_status">4500 = Pendapatan Lain-lain</label>
							</label>
						</div>
						<div class="span6">
							<label class="control-label" for="activity_status"><h4>Kode Kas Pengeluaran:</h4>
								<label class="control-label" for="activity_status">1101 = Kas</label>
								<label class="control-label" for="activity_status">1102 = Bank</label>
								<label class="control-label" for="activity_status">5101 = Gaji Karyawan</label>
								<label class="control-label" for="activity_status">5102 = Insentif</label>
								<label class="control-label" for="activity_status">5103 = Keperluan Kantor</label>
								<label class="control-label" for="activity_status">5104 = Transportasi</label>
								<label class="control-label" for="activity_status">5105 = Renovasi</label>
								<label class="control-label" for="activity_status">5106 = Dakwah</label>
								<label class="control-label" for="activity_status">5107 = Akomodasi</label>
								<label class="control-label" for="activity_status">5108 = Konsumsi</label>
								<label class="control-label" for="activity_status">5109 = Listrik Dan Telepon</label>
								<label class="control-label" for="activity_status">5110 = Biaya Administrasi Bank</label>
								<label class="control-label" for="activity_status">5111 = Biaya Lain-lain</label>
							</label>		
</div>
</div>
				</div><!--/span-->
<?php include('footer.php'); ?>
