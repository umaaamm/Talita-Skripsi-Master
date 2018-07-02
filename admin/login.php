<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Administrator</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<?php
        if(isset($_POST['login']))
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $querylogin=$koneksi->query("select id_admin from admin where username='".$username."' and password='".$password."'");
            $jumlah=mysqli_num_rows($querylogin);
            if ($jumlah > 0)
            {
                $data=$querylogin->fetch_assoc();
                $_SESSION['id_admin']=$data['id_admin'];
                $_SESSION['username']=$data['username'];
                $_SESSION['password']=$data['password'];
                $_SESSION['level']=$data['password'];
                echo '<div class="alert alert-success">Anda berhasil login</div>';
                echo "<meta http-equiv='refresh' content=2;url='./'/>";
            }
            else 
            {
                echo '<div class="alert alert-danger">Username/Password salah</div>';
                echo "<meta http-equiv='refresh' content='2';url=''/>";
            }
        }
        ?>
			<form class="login100-form validate-form" action="" method="post">
				<span class="login100-form-title p-b-37">
					Login Administrator
				</span>
				
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username ">
					<input class="input100" type="text" name="username" placeholder="username " autofocus>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button name="login" type="submit" class="login100-form-btn">
						Login
					</button>
				</div>

			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>