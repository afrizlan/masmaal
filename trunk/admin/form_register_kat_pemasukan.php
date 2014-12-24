<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_kat_pemasukan.php">Manajemen Kategori Pemasukan</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_register_kat_pemasukan.php">Input Data Kategori Pemasukan</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span10">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Input Data Kategori Pemasukan</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="log_save_kat_pemasukan.php" method="post">
							<fieldset>
							 <div class="control-group">
								<label class="control-label" for="KODE_PEMASUKAN">KODE PEMASUKAN :</label>
								<div class="controls">
								  <input class="input-large focused" name="KODE_PEMASUKAN" type="text" value="">
								</div>
							  </div> 
							 <div class="control-group">
								<label class="control-label" for="NAMA_PEMASUKAN">NAMA PEMASUKAN :</label>
								<div class="controls">
								  <input class="input-large focused" name="NAMA_PEMASUKAN" type="text" value="">
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save Data</button>
								<a class="btn btn-danger" href="../admin/form_kat_pemasukan.php"><i class="icon icon-white icon-cross "></i> Cancel</a>
							  </div>
							</fieldset>
						  </form>
					</div>
				</div><!--/span-->
			</div><!--/row-->
							
<?php include('footer.php'); ?>