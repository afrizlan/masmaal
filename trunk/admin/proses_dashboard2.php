<?php include('header.php'); ?>


			<div>
	<ul class="breadcrumb">
		<li>
			<a href="index.php">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="grafik.php">Charts</a> <span class="divider">/</span>
		</li>
		<li>
            <a href="#">by Date</a>
        </li>
	</ul>
</div>
		<div class="box">
 <div class="box-header well">
                                                <h2><i ></i></h2>
                                                <div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
	</div>
	<?php
	include('DB_driver.php');
	include("class/FusionCharts_Gen.php");
	$tahun_laporan=$_POST['TAHUN_LAPORAN2'];
	$kode_kas=$_POST['KATEGORI_PEMASUKAN'];
	$query="select NAMA_PEMASUKAN from kategory_pemasukan WHERE KODE_PEMASUKAN='$kode_kas'";
	$result=mysql_query($query);
	?>
	<h2><center>Periode Dashboard Tahun : <?php echo"$tahun_laporan"?> Kategory : <?php echo mysql_result($result,0) ;?></h2>
	
                                    </div> 
<div class="box">
<div class="row-fluid sortable">
                                
                                <div class="box">
                                        <div class="box-header well">
                                                <h2><i class="icon-list-alt"></i>Grafik Pemasukan Per Tahun</h2>
                                                <div class="box-icon">
                                                </div>
                                        </div>
                                        <div class="box-content">
<html>
  <head>
    <title>Grafik Keuangan Per Tahun</title>
    <script language='javascript' src='js/FusionCharts.js'></script>
  </head>
  <body>

  <?php
  # Include FusionCharts PHP Class
  # Create object for Column 3D chart
  $FC1 = new FusionCharts("Column3D","1000","350");

  # Setting Relative Path of chart swf file.
  $FC1->setSwfPath("Charts/");

  # Store chart attributes in a variable
  $strParam1="caption=Grafik Pemasukan Kas Per Kategory ; xAxisName=Periode Bulan ;yAxisName=Jumlah Uang;decimalPrecision=0; formatNumberScale=9";

  # Set chart attributes
  $FC1->setChartParams($strParam1);
  include('DB_driver.php');
  $bulan= mysql_query(" SELECT ID_TIME, BULAN FROM dim_time ") or die(mysql_error());
  //$tracking = mysql_query("SELECT Nama_Karyawan FROM master_karyawan WHERE Kode_Nama_Cabang='SRJ' AND Category_Tracking='sales'");
	while ($r_kat = mysql_fetch_array($bulan)){
	$id_kat = $r_kat['ID_TIME'];
	$kat = $r_kat['BULAN'];
	$counter1 = 0;
			 //$total = mysql_num_rows(mysql_query("SELECT IdKat,TglTerjual FROM penjualan_buku WHERE IdKat='$kat' AND LEFT(TglTerjual,4)='2012' AND  MID(TglTerjual,6,2)='02'"));
			 //$total = mysql_query("SELECT MASUK_KAS FROM data_transaksi_kas WHERE BULAN_LAPORAN='$id_kat'");
			 $total_q = mysql_query("SELECT SUM(MASUK_KAS) AS MASUK_KAS FROM data_transaksi_kas WHERE BULAN_LAPORAN='$id_kat' AND TAHUN_LAPORAN='$tahun_laporan' AND KODE_KAS='$kode_kas'" );
			 $counter1++;
    		

	//$persentase = ($total!=0 || $review !=0)?($review / $total) *100:0;
	//$total = mysql_num_rows($total);
	$total=0;
	while($test=mysql_fetch_array($total_q)){$total = $test['MASUK_KAS'];}

  # add chart values and category names
  $FC1->addChartData("$total","name=$kat");
 
}
    # Render Chart
    $FC1->renderChart();
  ?>

  </body>
</html>
<html>
  <head>
    <title>Grafik Keuangan Per Tahun</title>
    <script language='javascript' src='js/FusionCharts.js'></script>
  </head>
  <body>

  <?php
  # Include FusionCharts PHP Class
  # Create object for Column 3D chart
  $FC = new FusionCharts("Column3D","1000","350");

  # Setting Relative Path of chart swf file.
  $FC->setSwfPath("Charts/");

  # Store chart attributes in a variable
  $strParam="caption=Grafik Pemasukan Bank Per Kategory ; xAxisName=Periode Bulan ;yAxisName=Jumlah Uang;decimalPrecision=0; formatNumberScale=9";

  # Set chart attributes
  $FC->setChartParams($strParam);
  include('DB_driver.php');
  $bulan1= mysql_query(" SELECT ID_TIME, BULAN FROM dim_time ") or die(mysql_error());
  //$tracking = mysql_query("SELECT Nama_Karyawan FROM master_karyawan WHERE Kode_Nama_Cabang='SRJ' AND Category_Tracking='sales'");
	while ($r_kat = mysql_fetch_array($bulan1)){
	$id_kat = $r_kat['ID_TIME'];
	$kat = $r_kat['BULAN'];
	$counter1 = 0;
			 //$total = mysql_num_rows(mysql_query("SELECT IdKat,TglTerjual FROM penjualan_buku WHERE IdKat='$kat' AND LEFT(TglTerjual,4)='2012' AND  MID(TglTerjual,6,2)='02'"));
			 //$total = mysql_query("SELECT MASUK_KAS FROM data_transaksi_kas WHERE BULAN_LAPORAN='$id_kat'");
			 $total_q = mysql_query("SELECT SUM(MASUK_BANK) AS MASUK_BANK FROM data_transaksi_bank WHERE BULAN_LAPORAN='$id_kat' AND TAHUN_LAPORAN='$tahun_laporan' AND KODE_BANK='$kode_kas'" );
			 $counter1++;
    		

	//$persentase = ($total!=0 || $review !=0)?($review / $total) *100:0;
	//$total = mysql_num_rows($total);
	$total=0;
	while($test=mysql_fetch_array($total_q)){$total = $test['MASUK_BANK'];}

  # add chart values and category names
  $FC->addChartData("$total","name=$kat");
 
}
    # Render Chart
    $FC->renderChart();
  ?>

  </body>
</html>

</div>

<?php include('footer.php'); ?>