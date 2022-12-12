<?php
	include("auth.php");
	//echo '<pre/>'; print_r($_POST);exit();
		
	$CardNumber = $_POST['CardNumber'];
	$CustomerCode = $_POST['CustomerCode'];
	$NIF = $_POST['NIF'];
	$Point = $_POST['Point'];
	$EntryDate = date('Y-m-d H:i:s');
	$EditDate = date('Y-m-d H:i:s');
	$InvoiceNo = $_POST['InvoiceNo'];
	$IsActive = $_POST['IsActive'];
	$userid = $_SESSION['login_user']; 
	
	$duplicate_service = "SELECT * FROM customerloyalityid WHERE CardNumber = '$CardNumber'";
	$result_duplicate = mysqli_query($link,$duplicate_service);	
	
	if(mysqli_num_rows($result_duplicate) >0 ){
		$msg = "<b>Already Given</b>";			
		echo "<script type='text/javascript'>
				alert('$msg');
				window.location = 'add_supplier.php';
			</script>";
	}else{
		$sql = "INSERT INTO customerloyalityid VALUES (NULL, '$CardNumber', '$CustomerCode', '$NIF','$Point', '$EntryDate', '$EditDate' '$InvoiceNo', '$IsActive');";
		if(mysqli_query($link, $sql)){
			$msg = "Successfully Inserted!";		
			echo "<script type='text/javascript'>
				alert('$msg');
				window.location = 'view_card.php';
			</script>";
		}else{
			echo "ERROR: Could not able to execute $sql";
		}
	}
	
?>