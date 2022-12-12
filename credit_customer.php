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
	<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
	<link href="assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	
	<link href="assets/plugins/datetimepicker/css/classic.css" rel="stylesheet" />
	<link href="assets/plugins/datetimepicker/css/classic.time.css" rel="stylesheet" />
	<link href="assets/plugins/datetimepicker/css/classic.date.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">


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
	<title>Credit Customer</title>
	
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
				<div class="breadcrumb-title pe-3">Credit</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a> </li>
							<li class="breadcrumb-item active" aria-current="page">Tracking</li>
						</ol>
					</nav>
				</div>
			</div>
			<!--end breadcrumb-->
			<div class="row">
				<div class="col-xl-10 mx-auto">					
					<hr/>
					<form action="insert_credittracking.php" method="post" class="form-horizontal" accept-charset="utf-8">	
					<div class="card">
						<div class="card-body">
							<div class="border p-4 rounded">								
								<div class="row mb-3">
									<label for="InvoiceNumber" class="col-sm-3 col-form-label">InvoiceNumber</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="InvoiceNumber" placeholder="InvoiceNumber"> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="InvoiceDate" class="col-sm-3 col-form-label">Invoice Date</label>
									<div class="col-sm-4">
										<input type="text" class="form-control datepicker" id="InvoiceDate" name="InvoiceDate" placeholder="Invoice Date"> 
									</div>
								</div>								
								<div class="row mb-3">
									<label for="InvoiceAmount" class="col-sm-3 col-form-label">InvoiceAmount</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="InvoiceAmount" name="InvoiceAmount" placeholder="InvoiceAmount"> 
									</div>
								</div>								
								<div class="row mb-3">
									<label for="PaidAmount" class="col-sm-3 col-form-label">PaidAmount</label>
									<div class="col-sm-4">
										<input type="text" onchange="invoicedueamt()" class="form-control" id="PaidAmount" name="PaidAmount" placeholder="PaidAmount"> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="PaidAmountDate" class="col-sm-3 col-form-label">PaidAmount Date</label>
									<div class="col-sm-4">
										<input type="text" class="form-control datepicker" id="PaidAmountDate" name="PaidAmountDate" placeholder="PaidAmount Date"> 
									</div>
								</div>								
								<div class="row mb-3">
									<label for="InvoiceDueAmount" class="col-sm-3 col-form-label">InvoiceDueAmount</label>
									<div class="col-sm-4">
										<input type="text" readonly class="form-control" id="InvoiceDueAmount" name="InvoiceDueAmount" placeholder="InvoiceDueAmount"> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="PreviousDueAmount" class="col-sm-3 col-form-label">PreviousDueAmount</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="PreviousDueAmount" name="PreviousDueAmount" placeholder="PreviousDueAmount"> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="TotalDueAmount" class="col-sm-3 col-form-label">TotalDueAmount</label>
									<div class="col-sm-4">
										<input type="text" onchange="" class="form-control" id="TotalDueAmount" name="TotalDueAmount" placeholder="TotalDueAmount"> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="ReturnItemPrice" class="col-sm-3 col-form-label">ReturnItemPrice</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="ReturnItemPrice" name="ReturnItemPrice" placeholder="ReturnItemPrice"> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="SupplierCode" class="col-sm-3 col-form-label">Is Benformes</label>
									<div class="col-sm-4">
										<select class="single-select" name="IsBenformes" required>											
											<option value="">Select</option>
											<option value="1">Yes</option>
											<option value="0">No</option>	
										</select> 
									</div>
								</div>
								<div class="row">
									<label class="col-sm-3 col-form-label"></label>
									<div class="col-sm-9">
										<button type="submit" class="btn btn-primary px-5">Save</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
			<!--end row-->
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
	<script src="assets/js/pace.min.js"></script>
	<script src="assets/plugins/select2/js/select2.min.js"></script>
	<script src="assets/js/form-select2.js"></script>
	
	<script src="assets/plugins/datetimepicker/js/legacy.js"></script>
	<script src="assets/plugins/datetimepicker/js/picker.js"></script>
	<script src="assets/plugins/datetimepicker/js/picker.time.js"></script>
	<script src="assets/plugins/datetimepicker/js/picker.date.js"></script>
	<script src="assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js"></script>
	<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js"></script>
	 <script src="assets/js/form-date-time-pickes.js"></script>
	<!--app-->
	<script src="assets/js/app.js"></script>
	
	<script>
		function invoicedueamt() {
			var num1 = document.getElementById("InvoiceAmount").value;
			var num2 = document.getElementById("PaidAmount").value;
			var total = num1 - num2;
			document.getElementById('InvoiceDueAmount').value = total;
			var previousdueramt = document.getElementById("PreviousDueAmount").value;
			var totaldueamt = document.getElementById("TotalDueAmount").value;
			var returnitemprice = document.getElementById("ReturnItemPrice").value;
			//document.getElementById("InvoiceDueAmount").innerHTML = total;
		}
	</script>  
	
</body>

</html>