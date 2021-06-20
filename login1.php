<?php 
include 'config.php';
 
$email = $_POST['email'];
$password = md5($_POST['password']);
 
$login = mysqli_query("select * from login where email='$email' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:adminfix/email_php/login.php");
}else{
	header("location:index.php");	
}
 
?>