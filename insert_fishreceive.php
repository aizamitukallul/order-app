<?php
	include("auth.php");
	//echo '<pre/>'; print_r($_POST);exit();
	$SupplierCode = $_POST['SupplierCode'];
	$SupplierInvoice = $_POST['SupplierInvoice'];
	$ReceiveDate = $_POST['ReceiveDate'];
	$ReceiveTime = date('Y-m-d H:i:s');
	$ReceiveNote = $_POST['ReceiveNote'];	
	$EntryDate = date('Y-m-d H:i:s');
	$EditDate = date('Y-m-d H:i:s');
	$userid = $_SESSION['login_user']; 
	
	$ProductCode = $_POST['ProductCode'];
	$UnitPrice = $_POST['UnitPrice'];
	$UnitIVA = $_POST['UnitIVA'];
	$ReceiveQTY = $_POST['ReceiveQTY'];	
	$ExpDate = $_POST['ExpDate'];
	//Track stock table
	$ProductCode1 = $_POST['ProductCode'];
	$ReceiveQTY1 = $_POST['ReceiveQTY'];	
	
	$duplicate_service = "SELECT * FROM goodsreceivemaster WHERE SupplierInvoice = '$SupplierInvoice'";
	$result_duplicate = mysqli_query($link,$duplicate_service);	
	
	$sql1 = "INSERT INTO goodsreceivemaster VALUES (NULL, '$SupplierCode', '$SupplierInvoice', '$ReceiveDate', '$ReceiveTime','$ReceiveNote', '$EntryDate', '$EditDate');";
	
	if(mysqli_num_rows($result_duplicate) >0 ){
		$msg = "<b>Already Given</b>";			
		echo "<script type='text/javascript'>
				alert('$msg');
				window.location = 'goods_receive.php';
			</script>";
	}else{
		mysqli_query($link, $sql1);
		$lastID = mysqli_insert_id($link);
		$GoodsReceiveID = $lastID;	
		$rowCount = count($ProductCode); 
		for ($i = 0; $i < $rowCount; $i++) {
			$sql2 = "INSERT INTO goodsreceivedetail VALUES (NULL, '$GoodsReceiveID', '$ProductCode[$i]', '$UnitPrice[$i]', '$UnitIVA[$i]', '$ReceiveQTY[$i]', '$EntryDate', '$EditDate','$ExpDate[$i]');";
			$query = mysqli_query($link, $sql2);
		}
		//echo '<pre/>'; print_r($_POST);exit();
		//Insert data into stock table
		for ($j = 0; $j < $rowCount; $j++) {
			$sql3 = "INSERT INTO `stock` (`StockID`, `StockReceiveDateTime`, `ProductCode`, `GoodReceiveQTY`, `OrderInvoiceDateTime`, `OrderInvoiceQTY`, `OpeningBalance`, `CurrentBalance`, `StockNotes`) VALUES (NULL, '$ReceiveDate', '$ProductCode1[$j]', '$ReceiveQTY1[$j]', NULL, NULL, '0', '0', 'Fish_Receive');";
			$query1 = mysqli_query($link, $sql3);
		}
		$msg = "Successfully Inserted!";			
		echo "<script type='text/javascript'>
			alert('$msg');
			window.location = 'fish_receive.php';
		</script>";
	}
	
?>