<?php include("auth.php"); ?>
<!DOCTYPE html>
<html>
<body>

<form action="/action_page.php" method="get">
  <label for="browser">Select Product:</label>
  <input list="browsers" name="browser" id="browser">
  		
  <datalist id="browsers">
    
	<?php														
		$query = "SELECT ProductCode, ProductDetail FROM productnew;";
		$result = mysqli_query($link,$query);
		while($row = mysqli_fetch_array($result)) {
			echo "<option data-value='".$row['ProductCode']."' value='".$row['ProductDetail']."'>";
		}
	?>	
	
  </datalist>
  
</form>

</body>
</html>
