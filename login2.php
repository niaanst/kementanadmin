<?php 
include '../config.php';
 
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:../login1.php");
}
 
// menampilkan pesan selamat datang
echo "Hai, selamat datang ". $_SESSION['username'];
 
?>
<br/>
<br/>
