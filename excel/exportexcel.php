<!DOCTYPE html>
<html>
<head>
	<title>Data Pengunjung </title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pengunjung.xls");
	?>
 
	<center>
		<h1>data pengunjung museum tanah dan pertanian</h1>
	</center>
 
	<table border="1">
		<tr>
			<th>No</th>
			<th>Kode Reservasi</th>
			<th>Tanggal Berkunjung</th>
			<th>Jenis Pengunjung</th>
			<th>Jam Berkunjung </th>
			<th> nama pengunjung </th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","museum");
 
		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from tabel_reservasikunjungan");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['id_reservasi']; ?></td>
			<td><?php echo $d['tanggal']; ?></td>
			<td><?php echo $d['jenis']; ?></td>
			<td><?php echo $d['waktu']; ?></td>
			<td><?php echo $d['nama']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>