<?php 
include 'aksi_koneksi_bt.php';
 $a = $_GET["kodepengunjung"];
$query = "delete from bukutamu where kodepengunjung='$a'";
mysqli_query($con,$query);
header("location:charts.php");
?>