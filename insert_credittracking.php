<?php
	include("auth.php");
	//echo '<pre/>'; print_r($_POST);exit();		
	$InvoiceNumber = $_POST['InvoiceNumber'];
	$InvoiceDate = $_POST['InvoiceDate'];	
	$InvoiceAmount = $_POST['InvoiceAmount'];
	$PaidAmount = $_POST['PaidAmount'];
	$PaidAmountDate = $_POST['PaidAmountDate'];
	$InvoiceDueAmount = $_POST['InvoiceDueAmount'];
	$PreviousDueAmount = $_POST['PreviousDueAmount'];
	$TotalDueAmount = $_POST['TotalDueAmount'];
	$ReturnItemPrice = $_POST['ReturnItemPrice'];
	$IsBenformes = $_POST['IsBenformes'];
	$CreateDate = date('Y-m-d H:i:s');
	$EditDate = date('Y-m-d H:i:s');
	$userid = $_SESSION['login_user']; 

	
	$duplicate_service = "SELECT * FROM credittrackling WHERE InvoiceNumber = '$InvoiceNumber'";
	$result_duplicate = mysqli_query($link,$duplicate_service);	
	//print_r($_POST);exit();
	
	if(mysqli_num_rows($result_duplicate) >0 ){
		$msg = "<b>Already Given</b>";			
		echo "<script type='text/javascript'>
				alert('$msg');
				window.location = 'index.php';
			</script>";
	}else{
		$sql = "INSERT INTO credittrackling VALUES (NULL, '$InvoiceNumber', '$InvoiceDate', '$InvoiceAmount', '$PaidAmount', '$PaidAmountDate', '$InvoiceDueAmount', '$PreviousDueAmount', '$TotalDueAmount', '$ReturnItemPrice', '$IsBenformes', '$CreateDate', '$EditDate');";
		//echo '<pre/>'; print_r($sql);exit();
		if(mysqli_query($link, $sql)){
			$msg = "Successfully Inserted!";		
			echo "<script type='text/javascript'>
				alert('$msg');
				window.location = 'credit_customer.php';
			</script>";
		}else{
			echo "ERROR: Could not able to execute $sql";
		}
	}
	
?>