<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_transaksi.php">Manajemen Transkasi</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_register_pengeluaran_kas.php">Input Data Kategori Pengeluaran</a>
					</li>
				</ul>
			</div>
			
			<?php 
				include('DB_driver.php');
				$id = $_GET['id'];
				$query = mysql_query("select max(NO_TRANSAKSI) as ID from data_transaksi") or die(mysql_error());
				$data_pengeluaran_kas = mysql_fetch_array($query);
				{ 
			?>
			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Input Data Tambah Pengeluaran</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="log_save_register_pengeluaran_kas.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="NO_TRANSAKSI">BUKTI TRANSAKSI :</label>
								<div class="controls">
								  <input class="input-large focused" name="NO_TRANSAKSI" type="text" value="<?php echo $data_pengeluaran_kas['ID']+1; }?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="USER_ID">PEGAWAI :</label>
								<div class="controls">
								  <input class="input-large focused" id="USER_ID" name="user_id" type="text" value="<?php echo $_SESSION['USERNAME_PEGAWAI']; ?>" readonly="readonly">
								</div>
							  </div>
								<div class="control-group">
								<label class="control-label" for="KODE_PENGELUARAN">KODE KAS:</label>
								<div class="controls">
								 <input class="input-large focused" id="KODE_KATEGORI" name="KODE_KATEGORI" type="text" value="">
									<!--<select id="KODE_PENGELUARAN" name="KODE_PENGELUARAN" data-rel="chosen">
										<?php
										//mengambil nama-nama propinsi yang ada di database
										$CITY = mysql_query("SELECT DISTINCT NAMA_PENGELUARAN, KODE_PENGELUARAN FROM kategory_pengeluaran ORDER BY NAMA_PENGELUARAN");
										while($p=mysql_fetch_array($CITY)){
										echo "<option value=\"$p[KODE_PENGELUARAN]\">$p[NAMA_PENGELUARAN]</option>\n";
										}
									?>
									</select>-->
								</div>
							  </div>
							  <div class="control-group">
							<label class="control-label" for="NAMA_KODE">NAMA KODE :</label>
							<div class="controls">
							    <input class="input-large focused" id="NAMA_PENGELUARAN" name="NAMA_PENGELUARAN" type="text" value="">
							</div>
							</div>
							  <div class="control-group">
								<label class="control-label" for="TANGGAL">TANGGAL KELUAR:</label>
								<div class="controls">
								  <input class="input-large focused" name="TANGGAL" type="date" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="BULAN_KAS">BULAN KELUAR:</label>
								<div class="controls">
								  <select name="BULAN_LAPORAN" size="1" id="BULAN_LAPORAN">
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
								<label class="control-label" for="TAHUN_KAS">TAHUN KELUAR:</label>
								<div class="controls">
								  <select name="TAHUN_LAPORAN" size="1" id="TAHUN_LAPORAN">
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
								<label class="control-label" for="KELUAR">KELUAR :</label>
								<div class="controls">
								  <input class="input-large focused" name="KELUAR" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="KETERANGAN">KETERANGAN :</label>
								<div class="controls">
								  <input class="input-large focused" name="KETERANGAN" type="text" value="">
								</div>
							  </div>
							  <div class="form-actions"  >
								<button type="submit" class="btn btn-primary">Save Data</button>
								<a class="btn btn-danger" href="../admin/form_transaksi.php"><i class="icon icon-white icon-cross "></i> Cancel</a>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-book"></i> Keterangan </h2>
					</div>
					<div class="box-content">
						<div class="span7">
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
