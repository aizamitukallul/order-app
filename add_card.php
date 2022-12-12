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
	<title>Card</title>
	
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
				<div class="breadcrumb-title pe-3">Card</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a> </li>
							<li class="breadcrumb-item active" aria-current="page">Add New</li>
						</ol>
					</nav>
				</div>
			</div>
			<!--end breadcrumb-->
			<div class="row">
				<div class="col-xl-10 mx-auto">					
					<hr/>
					<form action="insert_card.php" method="post" class="form-horizontal" accept-charset="utf-8">	
					<div class="card">
						<div class="card-body">
							<div class="border p-4 rounded">								
								<div class="row mb-3">
									<label for="CustomerCode" class="col-sm-3 col-form-label">Customer Code</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="CustomerCode" name="CustomerCode" placeholder="Customer Code"> 
									</div>
								</div>
								<div class="row mb-3" id="CustomerName">
									
								</div>
								<?php
									$query = "SELECT CardNumber from customerloyalityid order by CardNumber DESC LIMIT 1";
									$result = mysqli_query($link,$query);
									$row = mysqli_fetch_array($result);
									$CardNumber = $row['CardNumber']+1;
								?>
								<div class="row mb-3">
									<label for="CardNumber" class="col-sm-3 col-form-label">Card Number</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="CardNumber" placeholder="Card Number" value="<?php echo $CardNumber; ?>" readonly> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="CustomerName" class="col-sm-3 col-form-label">NIF Number</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="NIF" placeholder="NIF"> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="ContactPerson" class="col-sm-3 col-form-label">Point</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="Point" placeholder="Point"> 
									</div>
								</div>
								<div class="row mb-3">
									<label for="InvoiceNo" class="col-sm-3 col-form-label">InvoiceNo</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="InvoiceNo" placeholder="InvoiceNo"> 
									</div>
								</div>					
								<div class="row mb-3">
									<label for="IsActive" class="col-sm-3 col-form-label">Active</label>
									<div class="col-sm-4">
										<select class="single-select" name="IsActive" required>											
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
	
	<script type="text/javascript">
		jQuery(document).ready(function () {
			jQuery("#CustomerCode").on('change', function () {
				//btnproduct = jQuery(this).val();
				CustomerCode = jQuery('#CustomerCode').val();
				jQuery.ajax
				({
					type: "POST",
					url: "getCustomer.php",
					data: {CustomerCode: CustomerCode},
					cache: false,
					
					success: function (html)
					{			
						jQuery("#CustomerName").html(html);
						
					}
				});
			});		
		});
	</script>
</body>

</html>