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
	<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
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
									<li class="breadcrumb-item active" aria-current="page">Inventory</li>
								</ol>
							</nav>
						</div>						
					</div>
					
					
					<!--end breadcrumb-->
					<div class="card">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<h5 class="mb-0">Stock Details</h5>								
							</div>
							<div class="table-responsive">
								<table id="example2" class="table table-striped table-bordered">
									<thead class="table-secondary">
										<tr>
											<th>SL</th>
											<th>SupplierCode</th>
											<th>SupplierInvoice</th>
											<th>ReceiveDate</th>
											<th>ProductCode</th>
											<th>UnitPrice</th>
											<th>IVA</th>
											<th>QTY</th>
											<th>Total</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php 					
											$sl = 1;
											$userid = $_SESSION['login_user']; 	
											$query_del = "DELETE FROM goodsreceivedetail WHERE ProductCode=''";
											$result_del = mysqli_query($link,$query_del);
											
											/*Calculate total inserted product quantity
											echo $sql_totalqty = "SELECT SUM(ReceiveQTY) AS totalreceive FROM goodsreceivedetail WHERE ProductCode ='$ProductCode';";
											$query_insertqty = mysqli_query($link, $sql_totalqty);
											$row = mysqli_fetch_array($query_insertqty);
											echo $totalqty = $row['totalreceive'];
											echo '<pre/>';print_r($totalqty);exit();
											//Insert values into stock table
											$sql3 = "INSERT INTO stock value ('$ReceiveDate','$ProductCode[$i]','$ReceiveQTY[$i]',NULL,NULL,'0','$totalqty','Good Receive');";
											$query_insert = mysqli_query($link, $sql3);*/
			
											$query = "SELECT T1.*, T2.* FROM goodsreceivemaster T1 INNER JOIN goodsreceivedetail T2 ON T1.GoodsReceiveID = T2.GoodsReceiveID";
											$result = mysqli_query($link,$query);
											while($row = mysqli_fetch_array($result)) {
										?>
										<tr>
											<td><?php echo $sl++; ?></td>
											<td><?php echo $row['SupplierCode']; ?></td>	
											<td><?php echo $row['SupplierInvoice']; ?></td>	
											<td><?php echo $row['ReceiveDate']; ?></td>																			
											<td><?php echo $row['ProductCode']; ?></td>
											<td><?php echo $row['UnitPrice']; ?></td>
											<td><?php echo $row['UnitIVA']; ?></td>
											<td><?php echo $row['ReceiveQTY']; ?></td>
											<td><?php echo number_format(($row['ReceiveQTY']*$row['UnitPrice']),2); ?></td>
											<td>
												<div class="table-actions d-flex align-items-center gap-3 fs-6"> 
													<a href="stock_report_detail.php?code=<?php echo $row['GoodsReceiveID']; ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views">
														<i class="bi bi-eye-fill"></i>
													</a> 
													<a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
														<i class="bi bi-pencil-fill"></i>
													</a> 
													<a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
														<i class="bi bi-trash-fill"></i>
													</a> 
												</div>
											</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
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
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script src="assets/js/table-datatable.js"></script>
	<!--app-->
	<script src="assets/js/app.js"></script>
</body>

</html>