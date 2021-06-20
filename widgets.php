<?php 
    $koneksi = new mysqli("localhost","root","","museum");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KEMENTAN</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>KEMENTAN</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Nia Irwanti Nasution </div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="active"><a href="widgets.php"><em class="fa fa-calendar">&nbsp;</em>Reservasi Kunjungan</a></li>
			<li><a href="charts.php"><em class="fa fa-bar-chart">&nbsp;</em>Buku Tamu</a></li>
			<li ><a href="elements.php"><em class="fa fa-toggle-off">&nbsp;</em>Reservasi Hotel</a></li>
			<li><a href="login.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">reservasi kunjungan</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Reservasi kunjungan </h1>
			</div>
		</div><!--/.row-->
			
			
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<p> data Reservasi kunjungan </p>
					<thead>
						<tr>
							<tr>
							<th>Kode Reservasi</th>
							<th>Tanggal</th>
							<th>jenis pengunjung</th>
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
						</tr>
						</tr>
					</thead>
					<tbody>
						<?php 
							$sql = $koneksi->query("select * from tabel_reservasikunjungan");
							while($data=$sql->fetch_assoc()) {


						?>

						<tr>
					
							<td><?php echo $data['id_reservasi']; ?></td>
							<td><?php echo $data['tanggal']; ?></td>
							<td><?php echo $data['jenis']; ?></td>
							<td><?php echo $data['waktu']; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['nomoridentitas']; ?></td>
							<td><?php echo $data['kota']; ?></td>
							<td><?php echo $data['negara']; ?></td>
							<td><?php echo $data['kebangsaan']; ?></td>
							<td><?php echo $data['nomortelepon']; ?></td>
							<td><?php echo $data['email']; ?></td>
						<td>
								<a href= formemail.php  class="btn btn-info" >Terima</a>
								<a href= formemail.php class="btn btn-danger" >Tolak </a>

							</td>
						</tr>

						<?php } ?>
						
					</tbody>
				<a href=fpdf/coba.php  class = "btn btn-info"> cetak PDF </a>
				<a href=excel/index.php  class = "btn btn-danger">cetak Excel</a>
				</div>
			</div>
		</div>
    </div>
</div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
		
				</div><!-- /.panel-->
			</div><!-- /.col-->
			
		</div><!-- /.row -->
	</div><!--/.main-->
	
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
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