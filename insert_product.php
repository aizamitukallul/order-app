<?php
	include("auth.php");
	//echo '<pre/>'; print_r($_POST);exit();
		
	$ProductCode = $_POST['ProductCode'];
	$ProductName = $_POST['ProductName'];	
	$PackSize = $_POST['PackSize'];
	//$ReferenceCode = $_POST['ReferenceCode'];
	$ProductCategory = $_POST['ProductCategory'];
	$UnitPrice = $_POST['UnitPrice'];
	$IVA = $_POST['IVA'];
	$MRP = $_POST['MRP'];
	$SupplierCode = $_POST['SupplierCode'];
	$Active = $_POST['Active'];
	$ManufactureDate = $_POST['ManufactureDate'];
	$ExpireDate = $_POST['ExpireDate'];
	$BarCode = $_POST['BarCode'];
	
	$EntryDate = date('Y-m-d H:i:s');
	$EditDate = date('Y-m-d H:i:s');
	$userid = $_SESSION['login_user']; 

	
	$duplicate_service = "SELECT * FROM product 
							WHERE ProductCode = '$ProductCode'";
	$result_duplicate = mysqli_query($link,$duplicate_service);	
	
	if(mysqli_num_rows($result_duplicate) >0 ){
		$msg = "<b>Already Given</b>";			
		echo "<script type='text/javascript'>
				alert('$msg');
				window.location = 'add_supplier.php';
			</script>";
	}else{
		$sql = "INSERT INTO `product` (`ProductID`, `ProductCode`, `ProductName`, `PackSize`, `ProductCategory`, `UnitPrice`, `IVA`, `MRP`, `SupplierCode`, `Active`, `ManufactureDate`, `ExpireDate`, `EntryDate`, `EditDate`) VALUES (NULL, '$ProductCode', '$ProductName', '$PackSize', '$ProductCategory', '$UnitPrice', '$IVA', '$MRP', '$SupplierCode', '$Active', '$ManufactureDate', '$ExpireDate', '$EntryDate', '$EditDate');";
		if(mysqli_query($link, $sql)){
			$msg = "Successfully Inserted!";		
			echo "<script type='text/javascript'>
				alert('$msg');
				window.location = 'view_product.php';
			</script>";
		}else{
			echo "ERROR: Could not able to execute $sql";
		}
	}
	
?>