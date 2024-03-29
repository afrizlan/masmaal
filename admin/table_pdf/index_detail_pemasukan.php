<?php
$host ="localhost";
$user="root";
$password="";
$database="masmaal";
include('fungsi_indotgl.php');
$tgl_awal=$_POST['tgl_awal_detil_kas3'];
$tgl_akhir=$_POST['tgl_akhir_detil_kas3'];

$tgl1=tgl_indo($tgl_awal);
$tgl2=tgl_indo($tgl_akhir);
$kategori2=$_POST['kategori2'];

mysql_connect($host,$user,$password) or die("Koneksi server gagal");
mysql_select_db($database);

//Queri untuk Menampilkan data

//$query4 =mysql_query("Select * from data_transaksi_kas WHERE TANGGAL_LAPORAN between '$tgl_awal' and '$tgl_akhir' AND KODE_KAS='$kategori2'") or die(mysql_error());
//$detail_pemasukan_kas = mysql_fetch_array($query4);

$query4 =mysql_query("SELECT * from data_transaksi WHERE TANGGAL between '$tgl_awal' and '$tgl_akhir' AND NAMA_PEMASUKAN='$kategori2'") or die(mysql_error());

$query5 = mysql_query("SELECT IFNULL(sum(MASUK),0) as totaldetail from data_transaksi WHERE TANGGAL between '$tgl_awal' and '$tgl_akhir' AND NAMA_PEMASUKAN='$kategori2'") or die(mysql_error());
$detail_pemasukan_kas1 = mysql_fetch_array($query5);

//Variabel untuk iterasi
$i = 0;
//Mengambil nilai dari query database
while($data=mysql_fetch_array($query4))
{
$cell2[$i][0] = $data[0];
$cell2[$i][1] = $data[1];
$cell2[$i][2] = $data[2];
$cell2[$i][3] = $data[3];
$cell2[$i][4] = $data[4];
$cell2[$i][5] = $data[5];
$cell2[$i][6] = $data[6];
$cell2[$i][7] = $data[7];
$cell2[$i][8] = $data[8];
$cell2[$i][9] = $data[9];
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
$pdf->Cell(19,1,'MASMAAL (APLIKASI KEUANGAN MASJID)',0,0,'C');
$pdf->Ln();
$pdf->SetFont("Arial","B",8);
$pdf->Cell(19,1,'Komplek Ruko Sentra Taman Gapura G-16 Citraland Surabaya. Email : maitdesignproject@gmail.com',0,0,'C');
$pdf->Ln();
$pdf->SetFont("Arial","B",12);
$pdf->Cell(19,1,'Periode :'.$tgl1.' s/d '.$tgl2,0,0,'C');
$pdf->Ln();
$pdf->SetFont("Arial","B",11);
$pdf->Cell(19,1,'LAPORAN REKAPITULASI PEMASUKAN DETIL '.$kategori2,0,0,'L');
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
$pdf->Cell(1.7,1,$cell2[$j][1],'LBTR',0,'C');
$pdf->Cell(2.5,1,$cell2[$j][6],'LBTR',0,'C');
$pdf->Cell(2.5,1,$cell2[$j][3],'LBTR',0,'C');
$pdf->Cell(7,1,$cell2[$j][9],'LBTR',0,'L');
$pdf->Cell(2.5,1,number_format($cell2[$j][7]),'LBTR',0,'C');
$pdf->Cell(2.5,1,number_format($cell2[$j][8]),'LBTR',0,'C');
$pdf->Ln();
}

$pdf->SetFont("Arial","B",12);
$pdf->Cell(18.7,1,'Total Masuk : Rp. '.number_format($detail_pemasukan_kas1[totaldetail]),'LBTR',0,'R');
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