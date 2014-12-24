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
						<a href="#">Form Edit Kategori Donatur</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span10">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Edit Data Kategori Donatur</h2>
					</div>
					<?php 
					include('DB_driver.php');
					$id = $_GET['id'];
					$query = mysql_query("select * from kategory_donatur where KODE_DONATUR='$id' LIMIT 1") or die(mysql_error());
					$data_tim = mysql_fetch_array($query);
					{ 
					?>
					<div class="box-content">
						<form class="form-horizontal" action="log_edit_kat_donatur.php" method="post">
							<fieldset>
							  
							  <div class="control-group">
								<label class="control-label" for="KODE_DONATUR">KODE DONATUR</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="KODE_DONATUR" type="text" value="<?php echo $data_tim['KODE_DONATUR'];?>" readonly="readonly">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="NAMA_DONATUR">NAMA DONATUR</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NAMA_DONATUR" type="text" value="<?php echo $data_tim['NAMA_DONATUR'];?>" readonly="readonly">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="JUMLAH_DONASI">JUMLAH DONASI</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="JUMLAH_DONASI" type="text" value="<?php echo $data_tim['JUMLAH_DONASI'];?>">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="KETERANGAN">KETERANGAN</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="KETERANGAN" type="text" value="<?php echo $data_tim['KETERANGAN'];?>">
								</div>
							  </div>
							  <div class="form-actions" align="right" >
							  <button type="submit" class="btn btn-primary" name="edit">Simpan Perubahan</button>
							  <a class="btn btn-danger" href="../admin/form_kat_donatur.php"><i class="icon icon-white icon-cross "></i> Batal</a>
							  </div>
							</fieldset>
						  </form>
					<?php
					}
					?>
					</div>
				</div><!--/span-->
</table>
</form>
</div>
</div>
<?php include('footer.php'); ?>
