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
	<title>Add New Product</title>
	
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
				<div class="breadcrumb-title pe-3">Product</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a> </li>
							<li class="breadcrumb-item active" aria-current="page">New Product</li>
						</ol>
					</nav>
				</div>
			</div>
			<!--end breadcrumb-->
			<div class="row">
				<div class="col-xl-10 mx-auto">					
					<hr/>
					<form action="insert_product.php" method="post" class="form-horizontal" accept-charset="utf-8">	
					<div class="card">
						<div class="card-body">
							<div class="border p-4 rounded">								
								<div class="row mb-3">
									<label for="ProductCode" class="col-sm-3 col-form-label">Product Code</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="ProductCode" placeholder="ProductCode"> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="ProductName" class="col-sm-3 col-form-label">Product Name</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="ProductName" placeholder="ProductName"> 
									</div>
								</div>								
								<div class="row mb-3">
									<label for="PackSize" class="col-sm-3 col-form-label">Pack Size</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="PackSize" placeholder="Invoice"> 
									</div>
								</div>								
								<div class="row mb-3">
									<label for="ProductCategory" class="col-sm-3 col-form-label">Product Category</label>
									<div class="col-sm-4">
										<select class="single-select" name="ProductCategory" required>											
											<option value="">Select</option>
											<option value="1">Category1</option>
											<option value="2">Category2</option>
											<option value="3">Category3</option>
											<option value="4">Category4</option>
											<option value="5">Category5</option>
											<option value="6">Category6</option>
											<option value="7">Category7</option>
										</select> 
									</div>
								</div>
								
								<div class="row mb-3">
									<label for="UnitPrice" class="col-sm-3 col-form-label">Unit Price</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="UnitPrice" placeholder="UnitPrice"> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="IVA" class="col-sm-3 col-form-label">IVA</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="IVA" placeholder="IVA"> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="MRP" class="col-sm-3 col-form-label">MRP</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="MRP" placeholder="MRP"> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="SupplierCode" class="col-sm-3 col-form-label">Supplier</label>
									<div class="col-sm-4">
										<select class="single-select" name="SupplierCode" required>											
											<option value="">Select</option>
											<?php														
												$query = "Select * From suppliermaster";
												$result = mysqli_query($link,$query);
												while($row = mysqli_fetch_array($result)) {
													echo "<option value='".$row['SupplierCode']."'>".$row['SupplierName']."</option>";
												}
											?>								
										</select> 
									</div>
								</div>
								
								<div class="row mb-3">
									<label for="SupplierInvoice" class="col-sm-3 col-form-label">Manufacture Date</label>
									<div class="col-sm-4">
										<input type="text" class="form-control datepicker" id="ManufactureDate" name="ManufactureDate" placeholder="Manufacture Date"> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="SupplierInvoice" class="col-sm-3 col-form-label">Expire Date</label>
									<div class="col-sm-4">
										<input type="text" class="form-control datepicker" id="ExpireDate" name="ExpireDate" placeholder="Expire Date"> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="BarCode" class="col-sm-3 col-form-label">BarCode</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="BarCode" placeholder="Bar Code"> 
									</div>
								</div>	
								<div class="row mb-3">
									<label for="Active" class="col-sm-3 col-form-label">Active</label>
									<div class="col-sm-4">
										<select class="single-select" name="Active" required>											
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
		$(".add-row").on('click', function(){
			var ProductCode = "<td><input type='text' id='ProductCode' name='ProductCode[]'></td>";
			var UnitPrice = "<td><input type='text' id='UnitPrice' name='UnitPrice[]'></td>";
			var UnitIVA = "<td><input type='text' id='UnitIVA' name='UnitIVA[]'></td>";
			var ReceiveQTY = "<td><input type='text' id='ReceiveQTY' name='ReceiveQTY[]'></td>";
			var Total = "<td><input type='text' id='Total' name='Total[]'></td>";
			var remove_button ="<td><button type='button' class='remove-row'>-</button></td>";

			var markup = "<tr>" + ProductCode + UnitPrice + UnitIVA + ReceiveQTY + Total + remove_button + "</tr>";
			$("table").append(markup);
		  });	
	</script>  
	
</body>

</html>