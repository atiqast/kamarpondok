<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-info">
<div class="cards col-12">
	<div class="cards bg-light col-lg-3 shadow">
	<form method="post" action="" class="col-12">
		<legend>LOGIN</legend>
		<div class="form-group">
			<label for="user">Username</label> 
				<input type="text" name="username" class="form-control" autofocus="" placeholder="Username" id="user">
		</div>
		<div class="form-group">
			<label for="pass">Password</label> 
				<input type="password" name="password" class="form-control" placeholder="Password" id="pass">
				<?php
				if($_SERVER['REQUEST_METHOD']=='POST'){
					//variabel untuk menyimpan kiriman dari form
					$u = $_POST['username'];
					$p = $_POST['password'];
					
					if($u=='' || $p==''){
						echo "<strong class='text-warning'>Form belum lengkap!!</strong>";
					}else{
						include "config/koneksi.php";
						$sqlLogin = mysqli_query($konek, "SELECT * FROM admin WHERE username='$u' AND password='$p'");
						$jml = mysqli_num_rows($sqlLogin);
						$d=mysqli_fetch_array($sqlLogin);
						if($jml > 0){
							session_start();
							$_SESSION['login']	= true;
							$_SESSION['id']		= $d['admin_id'];
							
							header('location:index.php');
						}else{
							echo '<strong class="text-danger">Username Password anda Salah...!!!</strong>';
						}
					}
				}
				?>

	</div>
	<div class="form-group">
		<input type="submit" value="Login" class="btn btn-block btn-info">
	</div>
</form>
</div>
</div>
</div>
  </div>


<footer class="text-center">
        <strong>Santri</strong>Developer| Design by Team
<h6><em><small>&copy; Copyright</small></em> 2019</h6>
</footer>
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/offcanvas.js"></script>
</body>
</body>
</html>