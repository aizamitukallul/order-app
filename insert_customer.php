<?php
	include("auth.php");
	//echo '<pre/>'; print_r($_POST);exit();		
	$CustomerCode = $_POST['CustomerCode'];
	$CustomerName = $_POST['CustomerName'];
	$ContactPerson = $_POST['ContactPerson'];
	$Address = $_POST['Address'];
	$Phone = $_POST['Phone'];
	$Mobile = $_POST['Mobile'];
	$Email = $_POST['Email'];
	$CustomerType = $_POST['CustomerType'];
	$Active = $_POST['Active'];
	$CreateDate = date('Y-m-d H:i:s');
	$EditDate = date('Y-m-d H:i:s');
	$userid = $_SESSION['login_user']; 

	
	$duplicate_service = "SELECT * FROM customer WHERE CustomerCode = '$CustomerCode'";
	$result_duplicate = mysqli_query($link,$duplicate_service);	
	//print_r($_POST);exit();
	
	if(mysqli_num_rows($result_duplicate) >0 ){
		$msg = "<b>Already Given</b>";			
		echo "<script type='text/javascript'>
				alert('$msg');
				window.location = 'index.php';
			</script>";
	}else{
		$sql = "INSERT INTO customer VALUES (NULL, '$CustomerCode', '$CustomerName', '$ContactPerson', '$Address', '$Phone', '$Mobile', '$Email', '$CustomerType', '$Active', '$CreateDate', '$EditDate');";
		//echo '<pre/>'; print_r($sql);exit();
		if(mysqli_query($link, $sql)){
			$msg = "Successfully Inserted!";		
			echo "<script type='text/javascript'>
				alert('$msg');
				window.location = 'view_customer.php';
			</script>";
		}else{
			echo "ERROR: Could not able to execute $sql";
		}
	}
	
?>