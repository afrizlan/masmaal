<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_kat_donatur.php">Manajemen Kategori Donatur</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_register_kat_donatur.php">Input Data Kategori Donatur</a>
					</li>
				</ul>
			</div>
			
			<?php 
				include('DB_driver.php');
				$id = $_GET['id'];
				$query = mysql_query("select MAX(KODE_DONATUR) as ID_KATEGORI from kategory_donatur") or die(mysql_error());
				$data_donatur_kategori = mysql_fetch_array($query);
				{ 
			?>
			<div class="row-fluid sortable">
				<div class="box span10">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Input Data Kategori Donatur</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="log_save_kat_donatur.php" method="post">
							<fieldset>
							  
							  <div class="control-group">
								<label class="control-label" for="KODE_DONATUR">KODE DONATUR :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="KODE_DONATUR" type="text" value="<?php echo $data_donatur_kategori['ID_KATEGORI']+1; }?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="NAMA_DONATUR">NAMA DONATUR :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NAMA_DONATUR" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="JUMLAH_DONASI">JUMLAH DONASI :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="JUMLAH_DONASI" type="text" value="">
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
								<a class="btn btn-danger" href="../admin/form_kat_donatur.php"><i class="icon icon-white icon-cross "></i> Cancel</a>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
				</div><!--/span-->

			</div><!--/row-->
    
<?php include('footer.php'); ?>
