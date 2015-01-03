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
						<a href="form_register_pemasukan_bank.php">Input Data Kategori Pemasukan</a>
					</li>
				</ul>
			</div>
			
			<?php 
				include('DB_driver.php');
				$id = $_GET['id'];
				$query = mysql_query("select max(NO_TRANSAKSI) as ID from data_transaksi") or die(mysql_error());
				$data_pemasukan_bank = mysql_fetch_array($query);
				{ 
			?>
			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Input Data Tambah Pemasukan</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="log_save_register_pemasukan_bank.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="NO_TRANSAKSI_BANK">BUKTI TRANSAKSI :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NO_TRANSAKSI" type="text" value="<?php echo $data_pemasukan_bank['ID']+1; }?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="USER_ID">PEGAWAI :</label>
								<div class="controls">
								  <input class="input-large focused" id="USER_ID" name="user_id" type="text" value="<?php echo $_SESSION['USERNAME_PEGAWAI']; ?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="KODE">KODE KATEGORI:</label>
								<div class="controls">
								<input class="input-xlarge focused" id="KODE_KATEGORI" name="KODE_KATEGORI" type="text" value="">
								  <!--<select id="KODE_BANK" name="KODE_BANK" data-rel="chosen">
									<?php
									//mengambil nama-nama propinsi yang ada di database
										$CITY = mysql_query("SELECT DISTINCT NAMA_PEMASUKAN, ID_KAT_PEMASUKAN, KODE_PEMASUKAN FROM kategory_pemasukan ORDER BY NAMA_PEMASUKAN");
										while($p=mysql_fetch_array($CITY)){
										echo "<option value=\"$p[KODE_PEMASUKAN]\">$p[NAMA_PEMASUKAN]</option>\n";
										}
									?>
                                </select>-->
								</div>
							  </div>
							  <div class="control-group">
							<label class="control-label" for="NAMA_KODE">NAMA KODE :</label>
							<div class="controls">
							    <input class="input-xlarge focused" id="NAMA_PEMASUKAN" name="NAMA_PEMASUKAN" type="text" value="">
							</div>
						</div>
							  <div class="control-group">
								<label class="control-label" for="TANGGAL_MASUK">TANGGAL MASUK:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="TANGGAL" name="TANGGAL" type="date" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="BULAN_KAS">BULAN MASUK:</label>
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
								<label class="control-label" for="TAHUN_KAS">TAHUN MASUK:</label>
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
								<label class="control-label" for="MASUK">MASUK :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="MASUK" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="KETERANGAN">KETERANGAN :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="KETERANGAN" type="text" value="">
								</div>
							  </div>
							  <div class="form-actions"  >
								<button type="submit" class="btn btn-primary">Save Data</button>
								<a class="btn btn-danger" href="../admin/form_transaksi.php"><i class="icon icon-white icon-cross "></i> Cancel</a>
							  </div>
							</fieldset>
						  </form>
					
					
				</div><!--/span-->
			
			</div><!--/row-->
			
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
</div>
			
				</div><!--/span-->
    
<?php include('footer.php'); ?>
