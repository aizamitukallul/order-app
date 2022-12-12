<?php
	include('db.php');
	$ProductCode = $_POST['ProductCode'];			
	$query = "SELECT * FROM productnew WHERE ProductDetail = '$ProductCode'";
	$result = mysqli_query($link,$query);
	$row = mysqli_fetch_array($result);
	//echo "<input type='text' value='".$row['CustomerName']."'>";
?>
<input type="text" name="Unit[]" id="Unit" value="<?php echo $row['Unit']; ?>" style="width: 100%;" readonly>