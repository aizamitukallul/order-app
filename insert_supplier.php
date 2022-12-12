<?php
	include("auth.php");
	//print_r($_POST);exit();
		
	$SupplierCode = $_POST['SupplierCode'];
	$SupplierName = $_POST['SupplierName'];
	$SupplierAddress = $_POST['SupplierAddress'];
	$ContactNumber = $_POST['ContactNumber'];
	$SpecialNotes = $_POST['SpecialNotes'];	
	$EntryDate = date('Y-m-d H:i:s');
	$EditDate = date('Y-m-d H:i:s');
	$userid = $_SESSION['login_user']; 

	
	$duplicate_service = "SELECT * FROM suppliermaster 
							WHERE SupplierCode = '$SupplierCode'";
	$result_duplicate = mysqli_query($link,$duplicate_service);	
	
	if(mysqli_num_rows($result_duplicate) >0 ){
		$msg = "<b>Already Given</b>";			
		echo "<script type='text/javascript'>
				alert('$msg');
				window.location = 'add_supplier.php';
			</script>";
	}else{
		$sql = "INSERT INTO `suppliermaster` (`SupplierID`, `SupplierCode`, `SupplierName`, `SupplierAddress`, `ContactNumber`, `SpecialNotes`,`EntryDate`, `EditDate`) VALUES (NULL, '$SupplierCode', '$SupplierName', '$SupplierAddress', '$ContactNumber', '$SpecialNotes', '$EntryDate', '$EditDate');";
		if(mysqli_query($link, $sql)){
			$msg = "Successfully Inserted!";		
			echo "<script type='text/javascript'>
				alert('$msg');
				window.location = 'view_supplier.php';
			</script>";
		}else{
			echo "ERROR: Could not able to execute $sql";
		}
	}
	
?>