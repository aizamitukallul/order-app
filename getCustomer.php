<?php
	include('db.php');
	$CustomerCode = $_POST['CustomerCode'];			
	$query = "SELECT * FROM customer WHERE CustomerCode = '$CustomerCode'";
	$result = mysqli_query($link,$query);
	$row = mysqli_fetch_array($result);
	//echo "<input type='text' value='".$row['CustomerName']."'>";
?>
<label for="CustomerName" class="col-sm-3 col-form-label">Customer Name</label>
<div class="col-sm-4">
	<input type="text" class="form-control" name="CustomerName" value="<?php echo $row['CustomerName']; ?>" disabled>
</div>