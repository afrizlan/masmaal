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
						<a href="#">Form Edit Kategori Pemasukan</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span10">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Edit Data Kategori Pemasukan</h2>
					</div>
					<?php 
					include('DB_driver.php');
					$id = $_GET['id'];
					$query = mysql_query("select * from kategory_pemasukan where KODE_PEMASUKAN='$id' LIMIT 1") or die(mysql_error());
					$data_tim = mysql_fetch_array($query);
					{ 
					?>
					<div class="box-content">
						<form class="form-horizontal" action="log_edit_kat_pemasukan.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="KODE PEMASUKAN">KODE PEMASUKAN</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="KODE_PEMASUKAN" type="text" value="<?php echo $data_tim['KODE_PEMASUKAN'];?>" readonly="readonly">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="NAMA PEMASUKAN">NAMA PEMASUKAN</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NAMA_PEMASUKAN" type="text" value="<?php echo $data_tim['NAMA_PEMASUKAN'];?>">
								</div>
							  </div>
							  <div class="form-actions" align="right" >
							  <button type="submit" class="btn btn-primary" name="edit">Simpan Perubahan</button>
							  <a class="btn btn-danger" href="../admin/form_kat_pemasukan.php"><i class="icon icon-white icon-cross "></i> Batal</a>
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
