<?php 
require_once 'calc.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
</head>
<body>
<div class = "container-fluid">

	<form action="calc.php" method="POST">
		
		<div class="row" style="margin-top: 1em;">
			<div class="col-1">
				
					<select name="currency_from" size="1" >
					    <option selected value="BTC">BTC</option>
					    <option value="ETH">ETH</option>
					    <option value="USD">USD</option>
					 </select>
			
			</div>
			<div class="col-1">
				
					<select name="currency_to" size="1" >
					    <option selected value="BTC">BTC</option>
					    <option value="ETH">ETH</option>
					    <option value="USD">USD</option>
					</select>
			
			</div>
		</div>	 

		<div class="row">
			<div class="col-1">
					<input type="text" name="count_from">
			</div>
			<div class="col-1">
					<input type="submit" name="submit">
			</div>
		</div>
	
	</form>

<?= $result?>
<br>
<? print_r($GLOBALS);?>
<br>
<?= html?>



</div>
</body>
</html>