<?php include("auth.php"); ?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/icons.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<!--Theme Styles-->
	<link href="assets/css/dark-theme.css" rel="stylesheet" />
	<link href="assets/css/light-theme.css" rel="stylesheet" />
	<link href="assets/css/semi-dark.css" rel="stylesheet" />
	<link href="assets/css/header-colors.css" rel="stylesheet" />
	<title>Home-Dashboard</title>
</head>

<body>
	<!--start wrapper-->
	<div class="wrapper">
		<!--start top header-->
		<?php include("header.php"); ?>
		<!--end top header-->
		<!--start sidebar -->
		<?php include("side_bar.php"); ?>
		<!--end sidebar -->
		<!--start content-->
		<main class="page-content">
			<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">				
				<div class="col">
					<div class="card radius-10 bg-primary">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="">
									<p class="mb-1 text-white">Total Stock</p>
									<h4 class="mb-0 text-white">945</h4> </div>
								<div class="ms-auto fs-2 text-white"> <i class="bi bi-bag-check-fill"></i> </div>
							</div>
							<hr class="my-2 border-top border-light"> <small class="mb-0 text-white"><i class="bi bi-arrow-up"></i> <span>+12.3% from last week</span></small> 
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card radius-10 bg-pink">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="">
									<p class="mb-1 text-white">Total Order</p>
									<h4 class="mb-0 text-white">9145</h4> </div>
								<div class="ms-auto fs-2 text-white"><i class="bi bi-truck"></i></div>
							</div>
							<hr class="my-2 border-top border-light"> <small class="mb-0 text-white"><i class="bi bi-arrow-up"></i> <span>+12.3% from last week</span></small> 
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card radius-10 bg-success">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="">
									<p class="mb-1 text-white">Today Sale</p>
									<h4 class="mb-0 text-white">145</h4> </div>
								<div class="ms-auto fs-2 text-white"><i class="bi bi-currency-dollar"></i></div>
							</div>
							<hr class="my-2 border-top border-light"> <small class="mb-0 text-white"><i class="bi bi-arrow-up"></i> <span>+12.3% from last week</span></small> 
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card radius-10 bg-orange">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="">
									<p class="mb-1 text-white">MiniMarkado</p>
									<h4 class="mb-0 text-white">145</h4> </div>
								<div class="ms-auto fs-2 text-white"><i class="bi bi-wallet"></i></div>
							</div>
							<hr class="my-2 border-top border-light"> <small class="mb-0 text-white"><i class="bi bi-arrow-up"></i> <span>+12.3% from last week</span></small> 
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card radius-10 bg-info">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="">
									<p class="mb-1 text-white">Notifications</p>
									<h4 class="mb-0 text-white">145</h4> </div>
								<div class="ms-auto fs-2 text-white"> <i class="bi bi-bell"></i> </div>
							</div>
							<hr class="my-2 border-top border-light"> <small class="mb-0 text-white"><i class="bi bi-arrow-up"></i> <span>+12.3% from last week</span></small> 
						</div>
					</div>
				</div>
				
				<div class="col">
					<div class="card radius-10 bg-purple">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="">
									<p class="mb-1 text-white">Misc</p>
									<h4 class="mb-0 text-white">645</h4> </div>
								<div class="ms-auto fs-2 text-white"> <i class="bi bi-book"></i> </div>
							</div>
							<hr class="my-2 border-top border-light"> <small class="mb-0 text-white"><i class="bi bi-arrow-up"></i> <span>+16.5% from last week</span></small> 
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--end page main-->
	</div>
	<!--end wrapper-->
	<!-- Bootstrap bundle JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/js/pace.min.js"></script>
	<script src="assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="assets/plugins/chartjs/js/Chart.extension.js"></script>
	<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<!--app-->
	<script src="assets/js/app.js"></script>
	<script src="assets/js/index2.js"></script>
	<script>
		new PerfectScrollbar(".best-product")
	</script>
</body>

</html>