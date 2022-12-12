<?php include("auth.php"); ?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
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
	<title>Stock Report</title>
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
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
						<div class="breadcrumb-title pe-3">Current</div>
						<div class="ps-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a> </li>
									<li class="breadcrumb-item active" aria-current="page">Stock</li>
								</ol>
							</nav>
						</div>						
					</div>
					<!--end breadcrumb-->
					<div class="card">
						<?php
							$userid = $_SESSION['login_user']; 												
							$query1 = "SELECT *				
									FROM suppliermaster";
							$result1 = mysqli_query($link,$query1);
							$row1 = mysqli_fetch_array($result1);
						?>
						<div class="card-header py-3">
							<div class="row g-3 align-items-center">
								<div class="col-12 col-lg-4 col-md-6 me-auto">
									<h5 class="mb-1"><?php echo date('Y-m-d H:i:s'); ?></h5>
									<p class="mb-0">Order ID : #8965327</p>
								</div>
								
								<div class="col-12 col-lg-1 col-6 col-md-3">									
									<button type="button" class="btn btn-secondary">
										<i class="bi bi-printer-fill"></i>
									</button>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="row row-cols-1 row-cols-xl-2 row-cols-xxl-3">
								<div class="col">
									<div class="card border shadow-none radius-10">
										<div class="card-body">
											<div class="d-flex align-items-center gap-3">
												
												<div class="info">
													<h6 class="mb-2">Supplier</h6>
													<p class="mb-1"><?php echo $row1['SupplierCode']; ?></p>
													<p class="mb-1">jhon@_78@example.com</p>
													<p class="mb-1">+920-9910XXXXXX</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end row-->							
							<div class="table-responsive mt-3">
								<table class="table align-middle">
									<thead class="table-secondary">
										<tr>
											<th>SL</th>											
											<th>ProductCode</th>
											<th>UnitPrice</th>											
											<th>QTY</th>
											<th>IVA</th>
											<th>Exp.date</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											$GoodsReceiveID = $_GET['code'];
											$sl = 1;
											$totalsum=0;
											$totalqty =0;
											$userid = $_SESSION['login_user']; 												
											$query = "SELECT T1.GoodsReceiveID,T1.ProductCode,T1.UnitPrice,T1.UnitIVA,T1.ExpDate,
														T1.ReceiveQTY,(T1.UnitPrice*T1.ReceiveQTY) AS totalprice 
													  FROM goodsreceivedetail T1
													  WHERE T1.GoodsReceiveID = '$GoodsReceiveID';";
											$result = mysqli_query($link,$query);
											while($row = mysqli_fetch_array($result)) { 
										?>
										<tr>
											<td><?php echo $sl++; ?></td>																													
											<td><?php echo $row['ProductCode']; ?></td>
											<td><?php echo $row['UnitPrice']; ?></td>											
											<td><?php echo $row['ReceiveQTY']; $totalqty += $row['ReceiveQTY']; ?></td>
											<td><?php echo $row['UnitIVA']; ?></td>
											<td><?php echo substr($row['ExpDate'],0,10); ?></td>
											<td><?php echo number_format($row['totalprice'],2); $totalsum += $row['totalprice']; ?></td>
											<!--<td>
												<div class="table-actions d-flex align-items-center gap-3 fs-6"> 													
													<a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Print">
														<i class="fadeIn animated bx bx-printer"></i>
													</a> 
												</div>
											</td>-->
										</tr>										
										<?php } ?>
										<tr>
											<td colspan="3">Total</td>
											<td><b><?php echo $totalqty; ?></b></td>
											<td></td>
											<td></td>
											<td><b><?php echo number_format($totalsum,2); ?><b/></td>
										</tr>
									</tbody>
								</table>								
							</div>
						</div>
						<button onclick="history.back()">Go Back</button>
					</div>					
				</main>
				<!--end page main-->
				<!--Start Back To Top Button--><a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
				<!--End Back To Top Button-->
	</div>
	<!--end wrapper-->
	<!-- Bootstrap bundle JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/js/pace.min.js"></script>
	<!--app-->
	<script src="assets/js/app.js"></script>
</body>

<script>
	
</script>


</html>