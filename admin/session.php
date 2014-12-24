<?php

//cek apakah user sudah login
if(!isset($_SESSION['USERNAME_PEGAWAI'])){
    die("Anda belum login");//jika belum login jangan lanjut..
}

//cek level user
if($_SESSION['HAK_AKSES_PEGAWAI']!="Admin"){
    die("Anda bukan admin");//jika bukan admin jangan lanjut
}
?>