<?php
	include("auth.php");
	//echo '<pre/>'; print_r($_POST);exit();
	//Parent table	
	$InvoiceNo = $_POST['InvoiceNo'];
	$CustomerCode = $_POST['CustomerCode'];	
	$InvoiceDate = $_POST['InvoiceDate'];
	$InvoiceDiscount = $_POST['InvoiceDiscount'];
	$Notes = $_POST['Notes'];
	$EntryDate = date('Y-m-d H:i:s');
	$EditDate = date('Y-m-d H:i:s');
	$userid = $_SESSION['login_user']; 
	
	//Child table	
	$ProductCode = $_POST['ProductCode'];
	$UnitPrice = $_POST['UnitPrice'];
	$UnitIVA = $_POST['UnitIVA'];
	$SalesQTY = $_POST['SalesQTY'];
	
	//Track stock table
	$ProductCode1 = $_POST['ProductCode'];
	$SalesQTY1 = $_POST['SalesQTY'];
	
	$duplicate_service = "SELECT * FROM orderinvoicemaster WHERE InvoiceNo = '$InvoiceNo'";
	$result_duplicate = mysqli_query($link,$duplicate_service);	
	//echo '<pre/>'; print_r($_POST);exit();
	
	if(mysqli_num_rows($result_duplicate) >0 ){
		$msg = "<b>Already Given</b>";			
		echo "<script type='text/javascript'>
				alert('$msg');
				window.location = 'index.php';
			</script>";
	}else{
		$sql1 = "INSERT INTO orderinvoicemaster VALUES (NULL, '$InvoiceNo', '$CustomerCode', '$InvoiceDate', '$InvoiceDiscount','$Notes');";
		if(mysqli_query($link, $sql1)){			
			$lastID = mysqli_insert_id($link);
			$rowCount = count($_POST['ProductCode']);
			$InvoiceID = $lastID;
			$EntryDate = date('Y-m-d H:i:s');
			$EditDate = date('Y-m-d H:i:s');
			for ($i = 0; $i < $rowCount; $i++) {						
				$sql = "INSERT INTO orderinvoicedetails VALUES (NULL, '$InvoiceID', '$ProductCode[$i]', '$UnitPrice[$i]', '$UnitIVA[$i]', '$SalesQTY[$i]', '$EntryDate', '$EditDate');";
				$query = mysqli_query($link, $sql);
			}
			
			//Insert data into stock table
			for ($j = 0; $j < $rowCount; $j++) {
				$sql3 = "INSERT INTO stock VALUES (NULL, NULL, '$ProductCode1[$j]', NULL, '$InvoiceDate', '$SalesQTY1[$j]', '0', '0', 'Customer_Invoice');";
				$query1 = mysqli_query($link, $sql3);
			}
			
			$msg = "Successfully Inserted!";
			echo "<script type='text/javascript'>
				alert('$msg');
				window.location = 'fish_order.php';
			</script>";
		}else{
			echo "ERROR: Could not able to execute $sql";
		}
	}
	
?>