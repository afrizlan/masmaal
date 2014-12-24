<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_kat_pengeluaran.php">Manajemen Kategori Pengeluaran</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Form Edit Kategori Pengeluaran</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span10">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Edit Data Kategori Pengeluaran</h2>
					</div>
					<?php 
					include('DB_driver.php');
					$id = $_GET['id'];
					$query = mysql_query("select * from kategory_pengeluaran where KODE_PENGELUARAN='$id' LIMIT 1") or die(mysql_error());
					$data_tim = mysql_fetch_array($query);
					{ 
					?>
					<div class="box-content">
						<form class="form-horizontal" action="log_edit_kat_pengeluaran.php" method="post">
							<fieldset>
							<div class="control-group">
								<label class="control-label" for="KODE PENGELUARAN">KODE PENGELUARAN</label>
								<div class="controls">
								  <input class="input-large focused" name="KODE_PENGELUARAN" type="text" value="<?php echo $data_tim['KODE_PENGELUARAN'];?>" readonly="readonly">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="NAMA PENGELUARAN">NAMA PENGELUARAN</label>
								<div class="controls">
								  <input class="input-large focused" name="NAMA_PENGELUARAN" type="text" value="<?php echo $data_tim['NAMA_PENGELUARAN'];?>">
								</div>
							  </div>
							  <div class="form-actions" align="right" >
							  <button type="submit" class="btn btn-primary" name="edit">Simpan Perubahan</button>
							  <a class="btn btn-danger" href="../admin/form_kat_pengeluaran.php"><i class="icon icon-white icon-cross "></i> Batal</a>
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
