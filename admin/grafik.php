<?php include('header.php'); ?>


                         <div>
                                <ul class="breadcrumb">
                                        <li>
                                                <a href="index.php">Home</a> <span class="divider">/</span>
                                        </li>
                                        <li>
                                                <a href="grafik.php">Charts</a>
                                        </li>
										
                                </ul>
                        </div>
				<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i>Rekapitulasi Pemasukan Kas dan Bank</h2>
						<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
					<form method="post" action="proses_dashboard.php">
					 <div class="control-group">
								<label class="control-label" for="TAHUN_LAPORAN">Data Pemasukan Kas dan Bank:</label>
								<div class="controls">
								  <select id="TAHUN_LAPORAN" name="TAHUN_LAPORAN" data-rel="chosen">
								  <option>2014</option>
									<option>2015</option>
									<option>2016</option>
									<option>2017</option>
									<option>2018</option>
								</select>
					</div>
					
							  </div>
					<button type="submit" class="btn btn-primary">Print Dashboard</button>
					</form>
					</div>
					</div>
					
					<div class="box span6">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i>Rekapitulasi Pengeluaran Kas dan Bank</h2>
						<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
					<form method="post" action="proses_dashboard3.php">
					 <div class="control-group">
								<label class="control-label" for="TAHUN_LAPORAN">Data Pengeluaran Kas dan Bank:</label>
								<div class="controls">
								  <select id="TAHUN_LAPORAN3" name="TAHUN_LAPORAN3" data-rel="chosen">
								  <option>2014</option>
									<option>2015</option>
									<option>2016</option>
									<option>2017</option>
									<option>2018</option>
								</select>
					</div>
					
							  </div>
					<button type="submit" class="btn btn-primary">Print Dashboard</button>
					</form>
					</div>
					</div>
					</div>
					
					<div class="row-fluid sortable">
					<div class="box span6">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i>Pemasukan Kas dan Bank Berdasarkan Kategory</h2>
						<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
					<form method="post" action="proses_dashboard2.php">
					<div class="control-group">
						<label class="control-label" for="TAHUN_LAPORAN">Data Pemasukan Kas dan Bank:</label>
							<div class="controls">
								<select id="TAHUN_LAPORAN2" name="TAHUN_LAPORAN2" data-rel="chosen">
									<option>2014</option>
									<option>2015</option>
									<option>2016</option>
									<option>2017</option>
									<option>2018</option>
								</select>
							</div>
					<div class="control-group">
						<label class="control-label" for="KATEGORI_PEMASUKAN">Kategori Pemasukan Kas dan Bank</label>
							<div class="controls">
								<select id="KATEGORI_PEMASUKAN" name="KATEGORI PEMASUKAN" data-rel="chosen">
								  <?php
									//mengambil nama-nama propinsi yang ada di database
										$CITY = mysql_query("SELECT DISTINCT * FROM kategory_pemasukan "); //WHERE NAMA_PEMASUKAN LIKE '%Donatur%'
										while($p=mysql_fetch_array($CITY)){
										echo "<option value=\"$p[KODE_PEMASUKAN]\">$p[NAMA_PEMASUKAN]</option>\n";
										}
									?>
								</select>
							</div>
					</div>
					<button type="submit" class="btn btn-primary">Print Dashboard</button>
					</div>
					</form>
					</div>
					</div>
					
					<div class="box span6">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i>Pengeluaran Kas dan Bank Berdasarkan Kategory</h2>
						<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
					<form method="post" action="proses_dashboard4.php">
					 <div class="control-group">
								<label class="control-label" for="TAHUN_LAPORAN">Data Pengeluaran Kas dan Bank:</label>
								<div class="controls">
								  <select id="TAHUN_LAPORAN4" name="TAHUN_LAPORAN4" data-rel="chosen">
								  <option>2014</option>
									<option>2015</option>
									<option>2016</option>
									<option>2017</option>
									<option>2018</option>
								</select>
					</div>
					
							  </div>
							  
							  	  <div class="control-group">
								<label class="control-label" for="KATEGORI_PEMASUKAN">Kategori Pengeluaran Kas dan Bank</label>
								<div class="controls">
								  <select id="KATEGORI_PENGELUARAN" name="KATEGORI PENGELUARAN" data-rel="chosen">
								  <?php
									//mengambil nama-nama propinsi yang ada di database
										$CITY = mysql_query("SELECT DISTINCT NAMA_PENGELUARAN, KODE_PENGELUARAN FROM kategory_pengeluaran "); //WHERE NAMA_PEMASUKAN LIKE '%Donatur%'
										while($p=mysql_fetch_array($CITY)){
										echo "<option value=\"$p[KODE_PENGELUARAN]\">$p[NAMA_PENGELUARAN]</option>\n";
										}
									?>
								</select>
								</div>
					
							  </div>
					<button type="submit" class="btn btn-primary">Print Dashboard</button>
					</div>
					</form>
					</div>
					</div>
					
					<div class="row-fluid sortable">
					<div class="box span6">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i>Rekapitulasi Pemasukan Donatur Tetap</h2>
						<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
					<form method="post" action="proses_dashboard5.php">
					 <div class="control-group">
								<label class="control-label" for="TAHUN_LAPORAN">Data Pemasukan Donatur Tetap:</label>
								<div class="controls">
								  <select id="TAHUN_LAPORAN5" name="TAHUN_LAPORAN5" data-rel="chosen">
								  <option>2014</option>
									<option>2015</option>
									<option>2016</option>
									<option>2017</option>
									<option>2018</option>
								</select>
					</div>
					
							  </div>
					<button type="submit" class="btn btn-primary">Print Dashboard</button>
					</div>
					</form>
					</div>
					</div>
					
<?php include('footer.php'); ?>