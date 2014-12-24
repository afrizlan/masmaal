<?php
session_start();
include 'DB_driver.php';

$userid = $_POST['username_pegawai'];
$psw = $_POST['password_pegawai'];
$op = $_GET['op'];

if($op=="in"){
    $cek = mysql_query("SELECT * FROM pegawai WHERE USERNAME_PEGAWAI='$userid' AND PASSWORD_PEGAWAI='$psw'");
    if(mysql_num_rows($cek)==1){//jika berhasil akan bernilai 1
        $c = mysql_fetch_array($cek);
        $_SESSION['USERNAME_PEGAWAI'] = $c['USERNAME_PEGAWAI'];
        $_SESSION['HAK_AKSES_PEGAWAI'] = $c['HAK_AKSES_PEGAWAI'];
        if($c['HAK_AKSES_PEGAWAI']=="Admin"){
            header("location:admin/index.php");
        }else if($c['HAK_AKSES_PEGAWAI']=="Member"){
            header("location:member/index.php");
        }
    }else{
         die("Username atau Password Anda Salah <a href=\"javascript:history.back()\">Login kembali</a>");
    }
}else if($op=="out"){
    unset($_SESSION['USERNAME_PEGAWAI']);
    unset($_SESSION['HAK_AKSES_PEGAWAI']);
    header("location:index.php");
}
?>
