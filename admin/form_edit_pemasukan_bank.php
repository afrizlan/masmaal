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
						<h2><i class="icon-edit"></i> Edit Data Pemasukan dan Pengeluaran Bank</h2>
					</div>
					<?php 
					include('DB_driver.php');
					$id = $_GET['id'];
					$query = mysql_query("select * from data_transaksi_bank where NO_TRANSAKSI_BANK='$id' LIMIT 1") or die(mysql_error());
					$data_pemasukan_bank = mysql_fetch_array($query);
					{ 
					?>
					<div class="box-content">
						<form class="form-horizontal" action="log_edit_data_pemasukan_bank.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="NO_TRANSAKSI_BANK">NO. TRANSAKSI</label>
								<div class="controls">
								  <input class="input-large focused" name="NO_TRANSAKSI_BANK" type="text" value="<?php echo $data_pemasukan_bank['NO_TRANSAKSI_BANK'];?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="KODE_BANK">KODE PEMASUKAN :</label>
								<div class="controls">
								  <input class="input-medium focused" id="KODE_PEMASUKAN" name="kode_pemasukan" type="text" value="" >
								  </div>
								  </div>
								   <div class="control-group">
								  <label class="control-label" for="KODE_BANK">KODE PENGELUARAN :</label>
								  <div class="controls">
								  <input class="input-medium focused" id="KODE_PENGELUARAN" name="kode_pengeluaran" type="text" value="" >
								</div>
							  </div>
							  <div class="control-group">
							<label class="control-label" for="NAMA_KODE">NAMA KODE PEMASUKAN:</label>
							<div class="controls">
							    <input class="input-large focused" id="NAMA_PEMASUKAN" name="nama_pemasukan" type="text" value="<?php echo $data_pemasukan_bank['NAMA_PEMASUKAN'];?>">
							</div>
						</div>
						 <div class="control-group">
							<label class="control-label" for="NAMA_KODE">NAMA KODE PENGELUARAN:</label>
							<div class="controls">
							    <input class="input-large focused" id="NAMA_PENGELUARAN" name="nama_pengeluaran" type="text" value="<?php echo $data_pemasukan_bank['NAMA_PENGELUARAN'];?>">
							</div>
						</div>
							  <div class="control-group">
								<label class="control-label" for="TANGGAL_BANK">TANGGAL TRANSAKSI</label>
								<div class="controls">
								  <input class="input-large focused" id="TANGGAL_LAPORAN" name="TANGGAL_LAPORAN" type="date" value="<?php echo $data_pemasukan_bank['TANGGAL_LAPORAN'];?>">
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
								<label class="control-label" for="MASUK_BANK">MASUK</label>
								<div class="controls">
								  <input class="input-large focused" id="MASUK_BANK" name="MASUK_BANK" type="text" value="<?php echo $data_pemasukan_bank['MASUK_BANK'];?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="KELUAR_BANK">KELUAR</label>
								<div class="controls">
								  <input class="input-large focused" id="KELUAR_BANK" name="KELUAR_BANK" type="text" value="<?php echo $data_pemasukan_bank['KELUAR_BANK'];?>">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="KETERANGAN">KETERANGAN</label>
								<div class="controls">
								  <input class="input-large focused" name="KETERANGAN" type="text" value="<?php echo $data_pemasukan_bank['KETERANGAN'];?>">
								</div>
							  </div>
							  <div class="form-actions" align="right" >
							  <button type="submit" class="btn btn-primary" name="edit">Simpan Perubahan</button>
							  <a class="btn btn-danger" href="../admin/form_transaksi.php"><i class="icon icon-white icon-cross "></i> Batal</a>
							  </div>
							</fieldset>
						  </form>
					<?php
					}
					?>
					</div>
					</div>
					
					
					<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-book"></i> Keterangan </h2>
					</div>
					<div class="box-content">
						<div class="span7">
						  <label class="control-label" for="activity_status"><h4>Kode Kas Pemasukan:</h4>
								<label class="control-label" for="activity_status">4000 = Saldo Awal</label>
								<label class="control-label" for="activity_status">4200 = Infaq Dari Donatur Tetap</label>
								<label class="control-label" for="activity_status">4300 = Sumbangan Dari Donatur Tidak Tetap</label>
								<label class="control-label" for="activity_status">4400 = Infaq Untuk Program</label>
								<label class="control-label" for="activity_status">4500 = Pendapatan Lain-lain</label>
							</label>
						</div>
						<div class="span5">
							<label class="control-label" for="activity_status"><h4>Kode Kas Pengeluaran:</h4>
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
