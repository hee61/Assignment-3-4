                         <!doctype html>
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<meta http-equiv="expires" content="0" />
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="">
</head>
	<body>
	

	<?php 
	echo 'we have made it this far';
	$bmi_button = $_POST['bmiButton'];
	$feet = $_POST['feet'];
	$inches = $_POST['inches'];
	$weight_lbs = $_POST['Weight'];
	
	$total_inches = $inches + ($feet * 12);
	
	$weight_kg = $weight_lbs * .45;
	$meters = $total_inches * .025;
	$meters_squared = pow($meters, 2);
	$bmi = $weight_kg/$meters_squared;
	echo $bmi;
	?>
	
	

	</body>
</html>