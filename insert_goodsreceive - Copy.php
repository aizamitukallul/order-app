<?php
	include("auth.php");
	echo '<pre/>';print_r($_POST);exit(); 
	//Parent table	
	$SupplierCode = $_POST['SupplierCode'];
	$SupplierInvoice = $_POST['SupplierInvoice'];
	$ReceiveDate = $_POST['ReceiveDate'];
	$ReceiveTime = date('Y-m-d H:i:s');
	$ReceiveNote = $_POST['ReceiveNote'];
	$EntryDate = date('Y-m-d H:i:s');
	$EditDate = date('Y-m-d H:i:s');
	$userid = $_SESSION['login_user']; 	
	$ProductCode = $_POST['ProductCode'][$i];
	$UnitPrice = $_POST['UnitPrice'][$i];
	$UnitIVA = $_POST['UnitIVA'][$i];
	$ReceiveQTY = $_POST['ReceiveQTY'][$i];
	
	$duplicate_service = "SELECT * FROM goodsreceivemaster WHERE SupplierInvoice = '$SupplierInvoice'";
	$result_duplicate = mysqli_query($link,$duplicate_service);	
	//echo '<pre/>';print_r($_POST);exit(); 
	
	if(mysqli_num_rows($result_duplicate) >0 ){
		$msg = "<b>Already Given</b>";			
		echo "<script type='text/javascript'>
				alert('$msg');
				window.location = 'goods_receive.php';
			</script>";
	}else{
		$sql1 = "INSERT INTO goodsreceivemaster VALUES (NULL, '$SupplierCode', '$SupplierInvoice', '$ReceiveDate', '$ReceiveTime','$ReceiveNote', '$EntryDate', '$EditDate');";
		if(mysqli_query($link, $sql1)){			
			echo $lastID = mysqli_insert_id($link);			
			$rowCount = count($ProductCode);
			$GoodsReceiveID = $lastID;			
			//echo '<pre/>';print_r($_POST);exit(); 
			for ($i = 0; $i < $rowCount; $i++) {		
				$sql2 = "INSERT INTO goodsreceivedetail VALUES (NULL, '$GoodsReceiveID', '$ProductCode', '$UnitPrice', '$UnitIVA', '$ReceiveQTY', '$EntryDate', '$EditDate');";
				//echo '<pre/>';print_r($_POST);exit(); 
				$query = mysqli_query($link, $sql2);
			}
			$msg = "Successfully Inserted!";
			echo "<script type='text/javascript'>
				alert('$msg');
				window.location = 'goods_receive.php';
			</script>";
		}else{
			echo "ERROR: Could not able to execute $sql";
		}
	}
	
?>