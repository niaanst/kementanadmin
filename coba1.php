<!DOCTYPE html>
<html>
	<head>
		<title> Demo </title>
		<style type="text/css">
    th{
        text-align: center;
        vertical-align: middle;
    }
</style>
	</head>
	<body>


<script>
 var x = document.getElementById("accepted");
  var y = document.getElementById("newlist");
  var z = document.getElementById("rejected");
function sh1() {
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";
}

function sh2() {
    y.style.display = "block";
    x.style.display = "none";
    z.style.display = "none";
}
function sh3() {
    y.style.display = "none";
    x.style.display = "none";
    z.style.display = "block";
}
</script>
<h2>Data Pengunjung</h2>
<div style="margin-top: 20px;margin-bottom: 40px;">
<button type="button" class="btn btn-primary" onclick="sh1()">Diterima</button>
<button type="button" class="btn btn-danger" onclick="sh3()">Ditolak</button>
<button type="button" class="btn btn-warning" onclick="sh2()">Permohonan</button>
</div>

<div id="accepted" style="display: none;">
<?php
$no = 0;
$query = "SELECT * FROM kunjungan WHERE stat=1";
$result = mysqli_query($koneksi, $query);

if(mysqli_num_rows($result) == 0){
    $show = "none";
    echo 'Data tidak di temukan';
}
else{
    $show = "block";
}
?>

<div style="display: <?php echo $show?>;">
<h3 style="margin-bottom: 10px">Daftar Permohonan Diterima</h3>
<table class = "table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tanggal</th>
            <th>Jam Kunjungan</th>
            <th>File Pengajuan</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($pecah = $result->fetch_assoc()){$no=$no+1; ?>
        <tr>
            <td><?php echo $no?></td>
            <td><?php echo $pecah['nama']; ?></td>
            <td><?php echo $pecah['email']; ?></td>
            <td><?php echo $pecah['tanggal']; ?></td>
            <td><?php echo $pecah['jam_kunjungan']; ?></td>
            <td> <a role="button" class="btn btn-primary" href="javascript:displaylightbox('..\cozy\foto_surat\kunjungan_<?php echo $pecah['nama']; ?>.pdf',{})" target="_self">Lihat data</button></td>
            <!-- <td align="center"><a class="img-rounded" rel="group" href="ktp.jpg"><img src="ktp.jpg" alt="" style="width: 100px;height: 150px" class="img-rounded" /></a></td> -->
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>
</div>


<!-- DATA DITOLAK -->
<div id="rejected" style="display: none;">
<?php
$no = 0;
$query = "SELECT * FROM kunjungan WHERE stat=0";
$result = mysqli_query($koneksi, $query);

if(mysqli_num_rows($result) == 0){
    $show = "none";
    echo 'Data tidak di temukan';
}
else{
    $show = "block";
}
?>

<div style="display: <?php echo $show?>;">
<h3 style="margin-bottom: 10px">Daftar Permohonan Diterima</h3>
<table class = "table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tanggal</th>
            <th>Jam Kunjungan</th>
            <th>File Pengajuan</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($pecah = $result->fetch_assoc()){$no=$no+1; ?>
        <tr>
            <td><?php echo $no?></td>
            <td><?php echo $pecah['nama']; ?></td>
            <td><?php echo $pecah['email']; ?></td>
            <td><?php echo $pecah['tanggal']; ?></td>
            <td><?php echo $pecah['jam_kunjungan']; ?></td>
            <td> <a role="button" class="btn btn-primary" href="javascript:displaylightbox('..\cozy\foto_surat\kunjungan_<?php echo $pecah['nama']; ?>.pdf',{})" target="_self">Lihat data</button></td>
            <!-- <td align="center"><a class="img-rounded" rel="group" href="ktp.jpg"><img src="ktp.jpg" alt="" style="width: 100px;height: 150px" class="img-rounded" /></a></td> -->
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>
</div>

<!-- DATA WISHLIST -->

<div id="newlist">
<?php
$no = 0;
$query = "SELECT * FROM kunjungan WHERE stat=2";
$result = mysqli_query($koneksi, $query);

if(mysqli_num_rows($result) == 0){
    $show = "none";
    echo 'Data tidak di temukan';
}
else{
    $show = "block";
}
?>

<div style="display: <?php echo $show?>;">
    <h3 style="margin-bottom: 10px">Daftar Permohonan</h3>
<table class = "table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tanggal</th>
            <th>Jam Kunjungan</th>
            <th>File Pengajuan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $ambil=$koneksi->query("SELECT * FROM kunjungan WHERE stat=2");$no=0; ?>
        <?php while ($pecah = $ambil->fetch_assoc()){$no+=1; ?>

        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $pecah['nama']; ?></td>
            <td><?php echo $pecah['email']; ?></td>
            <td><?php echo $pecah['tanggal']; ?></td>
            <td><?php echo $pecah['jam_kunjungan']; ?></td>
            <td align="center">
                <a role="button" class="btn btn-primary" href="javascript:displaylightbox('..\cozy\foto_surat\kunjungan_<?php echo $pecah['nama']; ?>.pdf',{})" target="_self">Lihat data</button>
            </td>
            <td align="center">
            <a role="button" class="btn btn-danger" href="function.php?id=<?php echo $pecah['id'];?>&order=0&type=kunjungan">Tolak</a>
            <a role="button" class="btn btn-success" href="function.php?id=<?php echo $pecah['id'];?>&order=1&type=kunjungan">Setuju</button>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>
<script>
 var x = document.getElementById("accepted");
  var y = document.getElementById("newlist");
  var z = document.getElementById("rejected");
function sh1() {
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";
}

function sh2() {
    y.style.display = "block";
    x.style.display = "none";
    z.style.display = "none";
}
function sh3() {
    y.style.display = "none";
    x.style.display = "none";
    z.style.display = "block";
}
</script>
</body>
</html>


