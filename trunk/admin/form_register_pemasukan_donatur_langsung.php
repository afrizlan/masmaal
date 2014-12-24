<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_transaksi_donatur.php">Manajemen Transaksi</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_register_pemasukan_donatur_langsung.php">Input Data Donatur</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span10">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Input Data Donatur</h2>
					</div>
			<?php 
				include('DB_driver.php');
				$id = $_GET['id'];
				$query = mysql_query("select max(ID_TRANSAKSI) as ID_DONATUR from data_transaksi_donatur") or die(mysql_error());
				$data_pemasukan_donatur = mysql_fetch_array($query);
				{ 
			?>
					<div class="box-content">
						<form class="form-horizontal" action="log_save_register_pemasukan_donatur_langsung.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="ID_TRANSAKSI">BUKTI TRANSAKSI :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="ID_TRANSAKSI" type="text" value="<?php echo $data_pemasukan_donatur['ID_DONATUR']+1; }?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="TANGGAL_TRANSAKSI">TANGGAL TRANSAKSI :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="TANGGAL_TRANSAKSI" type="date" value="">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="NAMA_DONATUR">NAMA DONATUR :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NAMA_DONATUR" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="JUMLAH_DONASI_L">JUMLAH DONASI :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="JUMLAH_DONASI_L" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="KODE_DONATUR">KODE DONATUR :</label>
								<div class="controls">
								  <select id="KODE_DONATUR" name="KODE_DONATUR" data-rel="chosen">
									<?php
									//mengambil nama-nama propinsi yang ada di database
										$CITY = mysql_query("SELECT DISTINCT NAMA_DONATUR, KODE_DONATUR FROM kategory_donatur "); //WHERE NAMA_PEMASUKAN LIKE '%Donatur%'
										while($p=mysql_fetch_array($CITY)){
										echo "<option value=\"$p[KODE_DONATUR]\">$p[NAMA_DONATUR]</option>\n";
										}
									?>
                                </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="KETERANGAN">KETERANGAN</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="KETERANGAN" type="text" value="">
								</div>
							  </div>
							  <div class="form-actions"  >
								<button type="submit" class="btn btn-primary">Save Data</button>
								<a class="btn btn-danger" href="../admin/form_transaksi_donatur.php"><i class="icon icon-white icon-cross "></i> Cancel</a>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
				</div><!--/span-->

			</div><!--/row-->
    
<?php include('footer.php'); ?>
