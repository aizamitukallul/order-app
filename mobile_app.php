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
	<title>Mobile App</title>
	
</head>

<body>
	<!--start wrapper-->
	<div class="wrapper">
		<!--start top header-->
		<?php include("header_app.php"); ?>
		<!--end top header-->
		<!--start sidebar -->
		<?php //include("side_bar.php"); ?>
		<!--end sidebar -->
		<!--start content-->
		<main class="page-content">
			<!--breadcrumb-->
			<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
				<div class="breadcrumb-title pe-3">Order</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a> </li>
							<li class="breadcrumb-item active" aria-current="page">নতুন অর্ডার যোগ করুন</li>
						</ol>
					</nav>
				</div>
			</div>
			<!--end breadcrumb-->
			<div class="row">
				<div class="col-xl-10 mx-auto">					
					<hr/>
					<form action="insert_customerorder.php" method="post" accept-charset="utf-8">	
					<div class="card">
						<div class="card-body">
							<div class="border p-4 rounded">
								<div class="row">
									<label class="col-sm-3 col-form-label"></label>
									<div class="col-sm-12">
										<style>
											table {
												table-layout: fixed;
												word-wrap: break-word;
											}
										</style>
										<table class="table table-bordered">
											<tr>
												<th style="width: 80%">পণ্য</th>
												<th>ইউনিট</th>
												<th>কার্টুন</th>
											</tr>
											<tr>
												<td><input list="browsers" id="ProductCode" name="ProductCode[]" style="width: 100%"></td>	
												<td id="UnitID"><input type="text" name="Unit[]" id="Unit" style="width: 100%;" readonly></td>
												<td><input type="text" name="BoxQTY[]" style="width: 100%;"></td>
											</tr>
											<datalist id="browsers">
											<?php														
												$query = "SELECT ProductCode, ProductDetail FROM productnew;";
												$result = mysqli_query($link,$query);
												while($row = mysqli_fetch_array($result)) {
													echo "<option data-value='".$row['ProductCode']."' value='".$row['ProductDetail']."'>";
												}
											?>	
											</datalist>
										</table>
										<a href="javascript:void(0)" id="add-row">
											<i class="fa fa-plus-circle"></i>আরো পণ্য যোগ করার জন্য এখানে ক্লিক করুন
										</a><br/>
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
	$("#add-row").on('click', function(){
		var ProductCode = "<td><input list='browsers' id='ProductCode' name='ProductCode[]' style='width: 100%;'></td>";			
		var Unit = "<td><input type='text' id='Unit' name='Unit[]' style='width: 100%;' readonly></td>";
		var BoxQTY = "<td><input type='text' id='BoxQTY' name='BoxQTY[]' style='width: 100%;'></td>";
		var markup = "<tr>" + ProductCode + Unit + BoxQTY + "</tr>";
		$("table").append(markup);
	  });	
	</script>  

	<script type="text/javascript">
	/*
	jQuery(document).ready(function () {
		jQuery("#ProductCode").on('change', function () {
			//btnproduct = jQuery(this).val();
			ProductCode = jQuery('#ProductCode').val();
			jQuery.ajax
			({
				type: "POST",
				url: "getUnit.php",
				data: {ProductCode: ProductCode},
				cache: false,
				
				success: function (html)
				{			
					jQuery("#UnitID").html(html);
					
				}
			});
		});
	});
	*/
	</script>
	

</body>

</html>