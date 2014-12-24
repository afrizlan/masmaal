<?php
session_start();

include 'session.php';
include 'DB_driver.php';
$u = $_SESSION['USERNAME_PEGAWAI'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>MAS-MAAL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="MAS-MAAL">
        <meta name="author" content="MF">

        <!-- The styles -->
        <link id="themes" href="../css/bootstrap-spacelab.css" rel="stylesheet">
        <style type="text/css">
          body {
                padding-bottom: 40px;
          }
          .sidebar-nav {
                padding: 9px 0;
          }
        </style>
        <script type="text/javascript" src="jquery1.js"></script>
        <script type="text/javascript" src="jquery-1.41.js"></script>
        <script type='text/javascript' src='jquery.autocomplete1.js'></script>

<script type="text/javascript" src="js/jquery.fusioncharts.js"></script>
        <script type="text/javascript">
    $('#TableSiswa').convertToFusionCharts({
        swfPath: "Charts/",
        type: "MSColumn3D",
        data: "#TableSiswa",
        dataFormat: "HTMLTable"
    });
</script>

<script type="text/javascript">
$(document).ready(function() {  
        $("#KODE_PEMASUKAN").autocomplete("log_proses_auto_kategory_pemasukan.php", {
                width: 150
        });
        
        $("#KODE_PEMASUKAN").result(function(event, data, formatted) {
                var kode        = formatted;
                $.ajax({
                        type    : "POST",
                        data    : "kode="+kode,
                        url     : "log_cari_auto_kategory_pemasukan.php",
                        dataType: "json",
                        success: function(data){
                                $("#NAMA_PEMASUKAN").val(data.NAMA_PEMASUKAN);
                                //$("#STREET").val(data.STREET);
                                //$("#HOUSE_NUMBER").val(data.HOUSE_NUMBER);
                        }
                });
        });
        $("#KODE_PEMASUKAN").keyup(function() {
                var kode        = $('#KODE_PEMASUKAN').val();
                $.ajax({
                        type    : "POST",
                        data    : "kode="+kode,
                        url     : "log_cari_auto_kategory_pemasukan.php",
                        dataType: "json",
                        success: function(data){
                                $("#NAMA_PEMASUKAN").val(data.NAMA_PEMASUKAN);
                                //$("#STREET").val(data.STREET);
                                //$("#HOUSE_NUMBER").val(data.HOUSE_NUMBER);
                        }
                });
        });
        
});
</script>

<script type="text/javascript">
                var htmlobjek;
                $(document).ready(function(){
                  //apabila terjadi event onchange terhadap object <select id=propinsi>
                  $("#NAMA_PEMASUKAN").change(function(){
                        var NAMA_PEMASUKAN = $("#NAMA_PEMASUKAN").val();
                        $.ajax({
                                //url: "log_get_city.php",
                                data: "NAMA_PEMASUKAN="+NAMA_PEMASUKAN,
                                cache: false,
                                success: function(msg){
                                        //jika data sukses diambil dari server kita tampilkan
                                        //di <select id=kota>
                                        $("#KODE_PEMASUKAN").html(msg);
                                }
                        });
                  });
                });
        </script>
		
		
<script type="text/javascript">
$(document).ready(function() {  
        $("#KODE_PENGELUARAN").autocomplete("log_proses_auto_kategory_pengeluaran.php", {
                width: 150
        });
        
        $("#KODE_PENGELUARAN").result(function(event, data, formatted) {
                var kode        = formatted;
                $.ajax({
                        type    : "POST",
                        data    : "kode="+kode,
                        url     : "log_cari_auto_kategory_pengeluaran.php",
                        dataType: "json",
                        success: function(data){
                                $("#NAMA_PENGELUARAN").val(data.NAMA_PENGELUARAN);
                                //$("#STREET").val(data.STREET);
                                //$("#HOUSE_NUMBER").val(data.HOUSE_NUMBER);
                        }
                });
        });
        $("#KODE_PENGELUARAN").keyup(function() {
                var kode        = $('#KODE_PENGELUARAN').val();
                $.ajax({
                        type    : "POST",
                        data    : "kode="+kode,
                        url     : "log_cari_auto_kategory_pengeluaran.php",
                        dataType: "json",
                        success: function(data){
                                $("#NAMA_PENGELUARAN").val(data.NAMA_PENGELUARAN);
                                //$("#STREET").val(data.STREET);
                                //$("#HOUSE_NUMBER").val(data.HOUSE_NUMBER);
                        }
                });
        });
        
});
</script>
		
		<script type="text/javascript">
                var htmlobjek;
                $(document).ready(function(){
                  //apabila terjadi event onchange terhadap object <select id=propinsi>
                  $("#NAMA_PENGELUARAN").change(function(){
                        var NAMA_PENGELUARAN = $("#NAMA_PENGELUARAN").val();
                        $.ajax({
                                //url: "log_get_city.php",
                                data: "NAMA_PENGELUARAN="+NAMA_PENGELUARAN,
                                cache: false,
                                success: function(msg){
                                        //jika data sukses diambil dari server kita tampilkan
                                        //di <select id=kota>
                                        $("#KODE_PENGELUARAN").html(msg);
                                }
                        });
                  });
                });
        </script>
		
        <link rel="stylesheet" type="text/css" href="jquery.autocomplete1.css" />
        <link rel="stylesheet" href="../css/main.css" type="text/css" />
        <link href="../css/bootstrap-responsive.css" rel="stylesheet">
        <link href="../css/charisma-app.css" rel="stylesheet">
        <link href="../css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <link href='../css/fullcalendar.css' rel='stylesheet'>
        <link href='../css/fullcalendar.print.css' rel='stylesheet'  media='print'>
        <link href='../css/chosen.css' rel='stylesheet'>
        <link href='../css/uniform.default.css' rel='stylesheet'>
        <link href='../css/colorbox.css' rel='stylesheet'>
        <link href='../css/jquery.cleditor.css' rel='stylesheet'>
        <link href='../css/jquery.noty.css' rel='stylesheet'>
        <link href='../css/noty_theme_default.css' rel='stylesheet'>
        <link href='../css/elfinder.min.css' rel='stylesheet'>
        <link href='../css/elfinder.theme.css' rel='stylesheet'>
        <link href='../css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='../css/opa-icons.css' rel='stylesheet'>
        <link href='../css/uploadify.css' rel='stylesheet'>


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The fav icon -->
        <link rel="shortcut icon" href="img/favicon.png">
                
</head>

<body>
        <?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
        <!-- topbar starts -->
        <div class="navbar">
                <div class="navbar-inner">
                        <div class="container-fluid">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                </a>
                                <a class="brand" href="../admin/index.php"> <img alt="MAS-MAAL LOGO" src="../img/logo20.png" /> <span>MAS-MAAL</span></a>
                                
                                <!-- theme selector starts
                                <div class="btn-group pull-right theme-container" >
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                                <i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
                                                <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" id="themes">
                                                <li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
                                                <li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
                                                <li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
                                                <li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
                                                <li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
                                                <li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
                                                <li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
                                                <li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
                                                <li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
                                        </ul>
                                </div>
                                theme selector ends -->
                                
                                <!-- user dropdown starts -->
                                <div class="btn-group pull-right" >
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                                <i class="icon-user"></i><span class="hidden-phone"><?php print $_SESSION['USERNAME_PEGAWAI']; ?></span>
                                                <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                                <li><a href="logout.php">Logout</a></li>
                                        </ul>
                                </div>
                                <!-- user dropdown ends -->
                                
                                <!-- <div class="top-nav nav-collapse">
                                        <ul class="nav">
                                                <li><a href="#">Visit Site</a></li>
                                                <li>
                                                        <form class="navbar-search pull-left">
                                                                <input placeholder="Search" class="search-query span2" name="query" type="text">
                                                        </form>
                                                </li>
                                        </ul>
                                </div><!--/.nav-collapse -->
                        </div>
                </div>
        </div>
        <!-- topbar ends -->
        <?php } ?>
        <div class="container-fluid">
                <div class="row-fluid">
                <?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
                        <!-- left menu starts -->
                        <div class="span2 main-menu-span">
                                <div class="well nav-collapse sidebar-nav">
                                        <ul class="nav nav-tabs nav-stacked main-menu">
                                                <li class="nav-header hidden-tablet">Main</li>
                                                <li><a class="ajax-link" href="index.php"><i class="icon32 icon-color icon-home"></i><span class="hidden-tablet"> Home</span></a></li>
                                                <li><a class="ajax-link" href="form_kat_pemasukan.php"><i class="icon32 icon-color icon-square-plus"></i><span class="hidden-tablet">Kategori Pemasukan</span></a></li>
                                                <li><a class="ajax-link" href="form_kat_pengeluaran.php"><i class="icon32 icon-color icon-square-minus"></i><span class="hidden-tablet">Kategori Pengeluaran</span></a></li>
												<li><a class="ajax-link" href="form_kat_donatur.php"><i class="icon32 icon-color icon-suitcase"></i><span class="hidden-tablet">Kategori Donatur Tetap</span></a></li>
                                                <li><a class="ajax-link" href="form_transaksi.php"><i class="icon32 icon-color icon-envelope-open"></i><span class="hidden-tablet">Data Transaksi</span></a></li>
                                                <li><a class="ajax-link" href="form_transaksi_donatur.php"><i class="icon32 icon-color icon-envelope-closed"></i><span class="hidden-tablet">Donatur Tetap</span></a></li>
                                                <li><a class="ajax-link" href="grafik.php"><i class="icon32 icon-color icon-image"></i><span class="hidden-tablet"> Graphics</span></a></li>
												<li><a class="ajax-link" href="laporan.php"><i class="icon32 icon-color icon-pdf"></i><span class="hidden-tablet"> Laporan</span></a></li>
                                                <li><a class="ajax-link" href="logout.php"><i class="icon32 icon-color icon-replyall"></i><span class="hidden-tablet"> Exit</span></a></li>
                                        </ul>
                                
                                        <label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Enable for Faster Access</label>
                                
                                </div><!--/.well -->
                        </div><!--/span-->
                        <!-- left menu ends -->
                        
                        <noscript>
                                <div class="alert alert-block span10">
                                        <h4 class="alert-heading">Warning!</h4>
                                        <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                                </div>
                        </noscript>
                        
                        <div id="content" class="span10">
                        <!-- content starts -->
                        <?php } ?>