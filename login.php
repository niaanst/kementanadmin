<?php
    session_start();
    $koneksi = new mysqli("localhost","root","","museum");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
	
				<div class="panel-heading">Admin Museum Tanah Dan Pertanian</div
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <center><h3>STAFF LOGIN</h3></center>
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Username" name="user"/>
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Password" name="pass"/>
                                        </div>
                                     <center>
                                        <button class="btn btn-primary" name="login">Login</button>
                                        </center>
                                    <!-- Not register ? <a href="registeration.html" >click here </a>  -->
                                    </form>

                                    <?php
                                        if (isset($_POST['login']))
                                        {
                                            $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]' 
                                            AND password ='$_POST[pass]'");
                                            $cocok = $ambil->num_rows;
                                            if ($cocok==1)
                                            {
                                                $_SESSION['admin']=$ambil->fetch_assoc();
                                                echo "<div class = 'alert alert-info'>Login Berhasil</div>";
                                                echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                                                    $uname = $_POST['user'];
                                                    $_SESSION['user']=$uname;
                                            }
                                            else
                                            {
                                                echo "<div class = 'alert alert-danger'>Login Gagal</div>";
                                                // echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                                            }
                                        }
                                    ?>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>
</div>
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
