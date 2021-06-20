<!DOCTYPE html>
<html>
<head>
    <title>Tutorial PHP Datatables Dengan PHP Dan MySQL</title>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>
 
<table id="tabel-data">
    <thead>
        <tr>
            <th>id</th>
            <th>tanggal</th>
            <th>jenis</th>
            <th>waktu</th>
			<th>nama pengunjung/instansi </th>
							<th>nomor identitas</th>
							<th>kota</th>
							<th>negara</th>
							<th>kebangsaan</th>
							<th>nomortelepon</th>
							<th>email</th>
							<th> </th>
        </tr>
    </thead>
    <tbody>
    <?php
        include 'koneksi.php';
        $museum = mysqli_query($koneksi,"select * from tabel_reservasikunjungan");
        while($row = mysqli_fetch_array($museum))
        {
            echo "<tr>
            <td>".$row['id_reservasi']."</td>
            <td>".$row['tanggal']."</td>
            <td>".$row['jenis']."</td>
            <td>".$row['waktu']."</td>
			 <td>".$row['nama']."</td>
			  <td>".$row['nomoridentitas']."</td>
			   <td>".$row['kota']."</td>
			    <td>".$row['negara']."</td>
				 <td>".$row['kebangsaan']."</td>
				  <td>".$row['nomortelepon']."</td>
				   <td>".$row['email']."</td>
        </tr>";
        }
    ?>
    </tbody>
 
    <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
 
</table>
</body>
</html>