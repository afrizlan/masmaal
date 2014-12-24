<?php include('header.php'); ?>


                         <div>
                                <ul class="breadcrumb">
                                        <li>
                                                <a href="index.php">Home</a> <span class="divider">/</span>
                                        </li>
                                        <li>
                                                <a href="laporan.php">Laporan</a>
                                        </li>
										
                                </ul>
                        </div>
				<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i> LAPORAN KESELURUHAN KAS</h2>
						<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
					<div class="box-content">
					<form method="post" action="table_pdf/index_kas_keseluruhan.php">
					<div>
					
					<label for="tgl_awal1" name="tgl_awal1"> Dari Tanggal </label>
						<input type="date" id="tgl_awal_kas1" name="tgl_awal_kas1">
					<label for="tgl_akhir1" name="tgl_akhir1"> Sampai Tanggal </label>
						<input type="date" id="tgl_akhir_kas1" name="tgl_akhir_kas1">
				</div>
					<br>
					<button type="submit" class="btn btn-primary">Print Laporan</button>
					</form>
					</div>
					</div>
					
					<div class="box span6">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i> LAPORAN KESELURUHAN BANK</h2>
						<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
					<form method="post" action="table_pdf/index_bank_keseluruhan.php">
					<div>
					<label for="tgl_awal2" name="tgl_awal2"> Dari Tanggal </label>
						<input type="date" id="tgl_awal_bank2" name="tgl_awal_bank2">
					<label for="tgl_akhir2" name="tgl_akhir2"> Sampai Tanggal </label>
						<input type="date" id="tgl_akhir_bank2" name="tgl_akhir_bank2">				
					</div>
					<br>
					<button type="submit" class="btn btn-primary">Print Laporan</button>
					</div>
					</form>
					</div>
					
					</div>
					

					<div class="row-fluid sortable">
					<div class="box span6">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i> LAPORAN DETAIL PEMASUKAN KAS DAN BANK</h2>
						<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
					<div class="box-content">
					<form method="post" action="table_pdf/index_detail_pemasukan.php">
					<div>
					<label for="tgl_awal3" name="tgl_awal3"> Dari Tanggal </label>
						<input type="date" id="tgl_awal_detil_kas3" name="tgl_awal_detil_kas3">
					<label for="tgl_akhir3" name="tgl_akhir3"> Sampai Tanggal </label>
						<input type="date" id="tgl_akhir_detil_kas3" name="tgl_akhir_detil_kas3">
						<label for="kategori" name="kategori">Kategori Pemasukan</label>
					<div class="control-group">
								<div class="controls">
								  <select id="kategori2" name="kategori2" data-rel="chosen">
									<?php
									//mengambil nama-nama propinsi yang ada di database
										$CITY = mysql_query("SELECT DISTINCT NAMA_PEMASUKAN, KODE_PEMASUKAN FROM kategory_pemasukan ORDER BY KODE_PEMASUKAN");
										while($p=mysql_fetch_array($CITY)){
										echo "<option value=\"$p[NAMA_PEMASUKAN]\">$p[NAMA_PEMASUKAN]</option>\n";
										}
									?>
								  </select>
								</div>
					</div>
				</div>
					<br>
					<button type="submit" class="btn btn-primary">Print Laporan</button>
					</form>
					</div>
					</div>
					
					<div class="box span6">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i> LAPORAN DETAIL PENGELUARAN KAS DAN BANK</h2>
						<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
					<div class="box-content">
					<form method="post" action="table_pdf/index_detail_pengeluaran.php">
					<div>
					
					<label for="tgl_awal4" name="tgl_awal4"> Dari Tanggal </label>
						<input type="date" id="tgl_awal_detil_bank4" name="tgl_awal_detil_bank4">
					<label for="tgl_akhir4" name="tgl_akhir4"> Sampai Tanggal </label>
						<input type="date" id="tgl_akhir_detil_bank4" name="tgl_akhir_detil_bank4">
						<label for="kategori" name="kategori">Kategori Pengeluaran</label>
					<div class="control-group">
								<div class="controls">
								  <select id="kategori3" name="kategori3" data-rel="chosen">
									<?php
									//mengambil nama-nama propinsi yang ada di database
										$CITY = mysql_query("SELECT DISTINCT NAMA_PENGELUARAN, KODE_PENGELUARAN FROM kategory_pengeluaran ORDER BY KODE_PENGELUARAN");
										while($p=mysql_fetch_array($CITY)){
										echo "<option value=\"$p[NAMA_PENGELUARAN]\">$p[NAMA_PENGELUARAN]</option>\n";
										}
									?>
								  </select>
								</div>
					</div>
				</div>
					<br>
					<button type="submit" class="btn btn-primary">Print Laporan</button>
					</form>
					</div>
					</div>
					</div>
					
				

                
<?php include('footer.php'); ?>