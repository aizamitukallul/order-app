<?php
	include("db.php");
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
		
        $query = "Select * From users Where UserName = '$username' AND Password = '".md5($password)."' AND IsActive = 1";
		$result = mysqli_query($link, $query);
		
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['IsActive'];
      
		$count = mysqli_num_rows($result);
	  
	    if($count == 1) {
			//session_register("myusername");
			$_SESSION['login_user'] = $username;
         
			header("location: index.php");
		}else {
			$error = "Your Login Name or Password is invalid";
		}
	  
    }else{
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/icons.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<title>Zahir Cash & Curry, Login</title>
</head>

<body class="bg-surface">
	<!--start wrapper-->
	<div class="wrapper">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-white rounded-0 border-bottom">
				<div class="container">
					<a class="navbar-brand" href="#"><img src="assets/images/brand-logo-2.png" width="140" alt="" /></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
							<li class="nav-item"> <a class="nav-link" href="#">Home</a> </li>
							<li class="nav-item"> <a class="nav-link" href="javascript:;">About</a> </li>							
							<li class="nav-item"> <a class="nav-link" href="javascript:;">Contact Us</a> </li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!--start content-->
		<main class="authentication-content">
			<div class="container">
				<div class="mt-4">
					<div class="card rounded-0 overflow-hidden shadow-none border mb-5 mb-lg-0">
						<div class="row g-0">
							<div class="col-12 order-1 col-xl-8 d-flex align-items-center justify-content-center border-end"> <img src="assets/images/error/auth-img-7.png" class="img-fluid" alt=""> </div>
							<div class="col-12 col-xl-4 order-xl-2">
								<div class="card-body p-4 p-sm-5">
									<h5 class="card-title">Sign In</h5>									
									<form class="form-body" action="" method="post">
										<div class="row g-3">
											<div class="col-12">
												<label for="username" class="form-label">User Name</label>
												<div class="ms-auto position-relative">
													<div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
													<input type="text" class="form-control radius-30 ps-5" id="username" name="username" placeholder="Email"> </div>
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="ms-auto position-relative">
													<div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
													<input type="password" class="form-control radius-30 ps-5" name="password" id="password" placeholder="Password"> </div>
											</div>											
											<div class="col-6 text-end"> <a href="#">Forgot Password ?</a> </div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary radius-30">Sign In</button>
												</div>
											</div>											
											<div class="col-12 text-center">
												<p class="mb-0">Don't have an account yet? <a href="#">Sign up here</a></p>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--end page main-->
		<footer class="bg-white border-top p-3 text-center fixed-bottom">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap bundle JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/pace.min.js"></script>
</body>
</html>
<?php } ?>