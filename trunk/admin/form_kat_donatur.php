<?php include('header.php'); ?>

		
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_kat_donatur.php">Manajemen Kategori Donatur</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-plus"></i> Daftar Kategori Donatur Tetap</h2>
					</div>
					<div class="row-fluid">
					<div class="box-content">
					<div class="span4"><a class="btn btn-success" href="../admin/form_register_kat_donatur.php"><i class="icon icon-white icon-add"></i> Tambah Kategori Donatur Tetap</a></div>
					<div align="right">
					<form method="post" enctype="multipart/form-data" action="proses_import_pegawai.php">
					
					
					</form>
					</div>
					<div class="row-fluid sortable">
					<div class="box span12">
					<div class="box-content">
					<form method="POST" action="log_view_kat_donatur.php">
						<table class="table table-striped table-bordered bootstrap-datatable datatable" border="1" cellpadding="3">
						  <thead>
							  <tr>
									<td rowspan="1" valign="middle"><b><center>Nomor Kategori</center></b></td>
									<td rowspan="1" valign="middle"><b><center>Nama Donatur</center></b></td>
									<td rowspan="1" valign="middle"><b><center>Jumlah Donasi</center></b></td>
									<td rowspan="1" valign="middle"><b><center>Kode Donatur</center></b></td>
									<td rowspan="1" valign="middle"><b><center>Keterangan</center></b></td>
									<td rowspan="1" valign="middle"><b><center>Pengelolaan Kategori</center></b></td>		
								</td>
									</tr>
						  </thead> 


<?php
include"log_view_kat_donatur.php";
?>
</table>
</form>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			</div>		
			</div>
			</div>
		
<?php include('footer.php'); ?>
