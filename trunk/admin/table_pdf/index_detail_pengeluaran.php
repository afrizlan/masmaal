<?php
$host ="localhost";
$user="root";
$password="";
$database="sales_act2";
include('fungsi_indotgl.php');
$tgl_awal=$_POST['tgl_awal_detil_bank4'];
$tgl_akhir=$_POST['tgl_akhir_detil_bank4'];

$tgl1=tgl_indo($tgl_awal);
$tgl2=tgl_indo($tgl_akhir);
$kategori3=$_POST['kategori3'];

mysql_connect($host,$user,$password) or die("Koneksi server gagal");
mysql_select_db($database);

//Queri untuk Menampilkan data

//$query4 = mysql_query("Select * from data_transaksi_bank WHERE TANGGAL_LAPORAN between '$tgl_awal' and '$tgl_akhir' AND KODE_BANK='$kategori3'") or die(mysql_error());
//$detail_pemasukan_bank = mysql_fetch_array($query4); 

$query4 = mysql_query("SELECT no_transaksi_kas, kode_kas, tanggal_laporan, data_transaksi_kas.KETERANGAN, masuk_kas, keluar_kas
FROM data_transaksi_kas WHERE data_transaksi_kas.TANGGAL_LAPORAN BETWEEN  '$tgl_awal' and '$tgl_akhir' AND data_transaksi_kas.NAMA_PENGELUARAN ='$kategori3'
UNION 
(SELECT no_transaksi_bank, kode_bank, tanggal_laporan, data_transaksi_bank.KETERANGAN, masuk_bank, keluar_bank
FROM data_transaksi_bank WHERE data_transaksi_bank.TANGGAL_LAPORAN BETWEEN  '$tgl_awal' AND  '$tgl_akhir' AND data_transaksi_bank.NAMA_PENGELUARAN ='$kategori3') ORDER BY TANGGAL_LAPORAN") or die(mysql_error());

$query5 = mysql_query("SELECT IFNULL((totalkeluarkategorikas),0) + IFNULL((totalkeluarkategoribank),0) as totaldetail 
from (SELECT sum(KELUAR_KAS) as totalkeluarkategorikas from data_transaksi_kas  WHERE data_transaksi_kas.TANGGAL_LAPORAN between '$tgl_awal' and '$tgl_akhir' AND NAMA_PENGELUARAN='$kategori3') totalkeluarkategorikas, 
(SELECT sum(KELUAR_BANK) as totalkeluarkategoribank from data_transaksi_bank WHERE data_transaksi_bank.TANGGAL_LAPORAN between '$tgl_awal' and '$tgl_akhir' AND NAMA_PENGELUARAN='$kategori3')totalkeluarkategoribank") or die(mysql_error());
$detail_pengeluaran_bank1 = mysql_fetch_array($query5);

//Variabel untuk iterasi
$i = 0;
//Mengambil nilai dari query database
while($data=mysql_fetch_array($query4))
{
$cell[$i][0] = $data[0];
$cell[$i][1] = $data[1];
$cell[$i][2] = $data[2];
$cell[$i][3] = $data[3];
$cell[$i][4] = $data[4];
$cell[$i][5] = $data[5];
$cell[$i][6] = $data[6];
$cell[$i][7] = $data[7];
$cell[$i][8] = $data[8];
$cell[$i][9] = $data[9];
$i++;
}
require('fpdf.php');

class PDF extends FPDF
{
//Fungsi Untuk Membuat Header
function Header()
{
   //Pilih font Arial bold 15
   $this->SetFont('Arial','B',15);
   //Geser ke kanan
   $this->Cell(80);
   //Judul dalam bingkai
   $this->Cell(30,10,'Title',1,0,'C');
   //Ganti baris
   $this->Ln(0);
}

//Fungsi Untuk Membuat Footer
function Footer()
{
    //Position at 1.5 cm from bottom
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',8);
    //Page number
    //$this->Cell(0,10,'Halaman ke : '.$this->PageNo(),0,0,'C');
}
}
##########################################################################################################################################

$pdf = new PDF('P','cm','A4');
$pdf->Open();
$pdf->AddPage();
$pdf->SetFont("Arial","B",15);
$pdf->Cell(19,1,'LAPORAN REKAPITULASI TRANSAKSI KEUANGAN',0,0,'C');
$pdf->Ln();
$pdf->Cell(19,1,'MASJID AL-IRSYAD SURABAYA',0,0,'C');
$pdf->Ln();
$pdf->SetFont("Arial","B",8);
$pdf->Cell(19,1,'Jl. Sultan Iskandar Muda No. 46 Surabaya. Email : masjidalirsyadsurabaya@gmail.com',0,0,'C');
$pdf->Ln();
$pdf->SetFont("Arial","B",12);
$pdf->Cell(19,1,'Periode :'.$tgl1.' s/d '.$tgl2,0,0,'C');
$pdf->Ln();
$pdf->SetFont("Arial","B",11);
$pdf->Cell(19,1,'LAPORAN REKAPITULASI PENGELUARAN DETIL '.$kategori3,0,0,'L');
$pdf->Ln();
$pdf->SetFont("Arial","B",10);
$pdf->Cell(1.7,1,'Bukti TR','LRTB',0,'C');
$pdf->Cell(2.5,1,'Tanggal','LRTB',0,'C');
$pdf->Cell(2.5,1,'Kode Trans.','LRTB',0,'C');
$pdf->Cell(7,1,'Keterangan','LRTB',0,'C');
$pdf->Cell(2.5,1,'Masuk','LRTB',0,'C');
$pdf->Cell(2.5,1,'Keluar','LRTB',0,'C');
$pdf->Ln();

$pdf->SetFont('Times','',10);
for($j=0;$j<$i;$j++)
{
//menampilkan data dari hasil query database
$pdf->Cell(1.7,1,$j+1,'LBTR',0,'C');
$pdf->Cell(2.5,1,$cell[$j][2],'LBTR',0,'C');
$pdf->Cell(2.5,1,$cell[$j][1],'LBTR',0,'C');
$pdf->Cell(7,1,$cell[$j][3],'LBTR',0,'C');
$pdf->Cell(2.5,1,number_format($cell[$j][4]),'LBTR',0,'C');
$pdf->Cell(2.5,1,number_format($cell[$j][5]),'LBTR',0,'C');
$pdf->Ln();
}

$pdf->SetFont("Arial","B",12);
$pdf->Cell(18.7,1,'Total Keluar : Rp. '.number_format($detail_pengeluaran_bank1[totaldetail]),'LBTR',0,'R');
$pdf->Ln();

$pdf->SetFont("Arial","B",10);
$pdf->Ln();
$pdf->Cell(17,1,'Pengelola Dana Umat',0,0,'R');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(17,1,'....................................',0,0,'R');
//menampilkan output berupa halaman PDF
$pdf->Output();

?>