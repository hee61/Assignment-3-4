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
	$age = $_POST['age'];
	$salary = $_POST['salary'];
	$amount_saved = $_POST['companyMatch'];
	$goal = $_POST['goal'];
	
	$match = $amount_saved * .35;
	$total_amount_one_year = $match + $amount_saved;
	$total_years = 0;
	
	$total_amount = 0;
	while ($total_amount < $goal)
	{
		$total_amount += $total_amount_one_year;
		$total_years += 1;
	}
	$age_at_goal = $age + $total_years;
	?>
	
	<h1>Your age at desired goal <?php echo $age_at_goal ?>.</h1>
	
	

	</body>
</html>