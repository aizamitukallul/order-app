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
	
	<title>Receive Fish</title>
	
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
				<div class="breadcrumb-title pe-3">Invoice</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a> </li>
							<li class="breadcrumb-item active" aria-current="page">Fish Receive</li>
						</ol>
					</nav>
				</div>
			</div>
			<!--end breadcrumb-->
			<div class="row">
				<div class="col-xl-10 mx-auto">					
					<hr/>
					<form action="insert_fishreceive.php" method="post" accept-charset="utf-8">	
					<div class="card">
						<div class="card-body">
							<div class="border p-4 rounded">
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
								<?php
									$query = "SELECT SupplierInvoice from goodsreceivemaster order by GoodsReceiveID DESC LIMIT 1;";
									$result = mysqli_query($link,$query);
									$row = mysqli_fetch_array($result);
									$SupplierInvoice = $row['SupplierInvoice']+1;
								?>
								<div class="row mb-3">
									<label for="SupplierInvoice" class="col-sm-3 col-form-label">Invoice</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="SupplierInvoice" value="<?php echo $SupplierInvoice; ?>" readonly> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="SupplierInvoice" class="col-sm-3 col-form-label">Receive Date</label>
									<div class="col-sm-4">
										<input type="text" class="form-control datepicker" id="ReceiveDate" name="ReceiveDate" placeholder="Receive Date"> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="SupplierInvoice" class="col-sm-3 col-form-label">Receive Time</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="ReceiveTime" value="<?php echo date('Y-m-d H:i:s'); ?>"> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="ReceiveNote" class="col-sm-3 col-form-label">Notes</label>
									<div class="col-sm-9">
										<textarea class="form-control" name="ReceiveNote" rows="3" placeholder="Notes"></textarea>
									</div>
								</div>
								<div class="row">
									<label class="col-sm-3 col-form-label"></label>
									<div class="col-sm-9">
										<style>
											table {
												table-layout: fixed;
												word-wrap: break-word;
											}
										</style>
										<!--<table class="table table-bordered">-->
										<table class="table table-bordered">>
											<tr>
												<th>Fish Code</th>
												<th>Price</th>												
												<th>QTY</th>
												<th>IVA</th>
												<th>Exp.Date</th>
											</tr>
											<tr>
												<td><input list="browsers" id="ProductCode" name="ProductCode[]" style="width: 90%" required></td>
												<td><input type="text" id="UnitPrice" name="UnitPrice[]" style="width: 90%" value="0.0" readonly></td>												
												<td><input type="text" id="ReceiveQTY" name="ReceiveQTY[]" style="width: 90%" ></td>
												<td><input type="text" id="UnitIVA" name="UnitIVA[]" style="width: 90%" value="0.0" readonly></td>
												<td><input type="text" id="ExpDate" name="ExpDate[]" style="width: 90%"></td>
											</tr>
											<datalist id="browsers">
											<?php														
												$query = "SELECT * FROM productnew WHERE ProductCOde LIKE '%ZMP202202%';";
												$result = mysqli_query($link,$query);
												while($row = mysqli_fetch_array($result)) {
													echo "<option data-value='".$row['ProductCode']."' value='".$row['ProductDetail']."'>";
												}
											?>	
											</datalist>
										</table><br/>
										<a href="javascript:void(0)" id="add-row"><i class="fa fa-plus-circle"></i> Add More</a>
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
		$("#add-row").on('click', function(){
			var ProductCode = "<td><input list='browsers' id='ProductCode' name='ProductCode[]' style='width: 90%;'></td>";
			var UnitPrice = "<td><input type='text' id='UnitPrice' name='UnitPrice[]' value='0.0' style='width: 90%;' readonly></td>";			
			var ReceiveQTY = "<td><input type='text' id='ReceiveQTY' name='ReceiveQTY[]' style='width: 90%;'></td>";
			var UnitIVA = "<td><input type='text' id='UnitIVA' name='UnitIVA[]' value='0.0' style='width: 90%;' readonly></td>";
			var ExpDate = "<td><input type='text' id='ExpDate' name='ExpDate[]' style='width: 90%;'></td>";
			var markup = "<tr>" + ProductCode + UnitPrice + ReceiveQTY + UnitIVA + ExpDate +"</tr>";
			$("table").append(markup);
		  });	
	</script> 
	
</body>

</html>