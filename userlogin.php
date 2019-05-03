<?php
session_start();
include('includes/config.php');
$db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
      
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM register WHERE Emailid = '$email' and Password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      
		
      if($count == 1) {
         
        
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>BloodBank & Donor Management System | Admin Login</title>
	<link rel="stylesheet" href="css/userlogin/font-awesome.min.css">
	<link rel="stylesheet" href="css/userlogin/bootstrap.min.css">
	<link rel="stylesheet" href="css/userlogin/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/userlogin/bootstrap-social.css">
	<link rel="stylesheet" href="css/userlogin/bootstrap-select.css">
	<link rel="stylesheet" href="css/userlogin/fileinput.min.css">
	<link rel="stylesheet" href="css/userlogin/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/userlogin/style.css">
</head>

<body>
	
	<div class="login-page bk-img" style="background-image: url(images/banner.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-4x">Blood+-</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form method="post">

									<label for="" class="text-uppercase text-sm">Your Username </label>
									<input type="text" placeholder="Username" name="email" class="form-control mb">

									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="Password" name="password" class="form-control mb">

								

									<button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>