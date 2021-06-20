<?php

$host = 'localhost';
$username = 'root';
$password='';
$dbname        = "museum";

$conn    = mysqli_connect ($host, $username, $password, $dbname);
if (!$conn){
    die ("Connection Failed: ". mysqli_connect_error());
    }

// Koneksi library FPDF
require('fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('l','mm','A5');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('Arial','B',16);
// Membuat string
$pdf->Cell(190,7,'Daftar Pengunjung museum',0,1,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(190,7,'Jl. Ir. H. Juanda No.98, RT.01/RW.01, Gudang, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16123.',0,1,'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'Kode',1,0);
$pdf->Cell(50,6,'Tanggal',1,0);
$pdf->Cell(35,6,'Jenis',1,0);
$pdf->Cell(30,6,'waktu',1,0);
$pdf->Cell(30,6,'nama ',1,0);
$pdf->Cell(40,6,'identitas',1,1);
 
$pdf->SetFont('Arial','',10);
$query = mysqli_query($conn, "SELECT * FROM tabel_reservasikunjungan");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(10,6,$row['id_reservasi'],1,0);
    $pdf->Cell(50,6,$row['tanggal'],1,0);
    $pdf->Cell(35,6,$row['jenis'],1,0);
    $pdf->Cell(30,6,$row['waktu'],1,0);
	$pdf->Cell(30,6,$row['nama'],1,0);
	$pdf->Cell(40,6,$row['nomoridentitas'],1,1);
    
    
}

$pdf->Output();
?>