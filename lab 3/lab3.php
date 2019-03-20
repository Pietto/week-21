<!DOCTYPE html>
<html>
<head>
	<title>lab 3</title>
</head>
<body>
	<?php
		$number1 = mt_rand(1, 100);
		$number2 = mt_rand(1, 100);
		echo "<h1>Opdracht 3a</h1><br>";
		echo $number1." + ". $number2. " = ". $formattedNum = number_format(($number1 + $number2), 2). "<br>";
		echo $number1." - ". $number2. " = ". $formattedNum = number_format(($number1 - $number2), 2). "<br>";
		echo $number1." * ". $number2. " = ". $formattedNum = number_format(($number1 * $number2), 2). "<br>";
		echo $number1." / ". $number2. " = ". $formattedNum = number_format(($number1 / $number2), 2). "<br>";

		echo "<h1>Opdracht 3b </h1><br>";
		for ($i = 1; $i <= 10; $i++) {
		    echo "6". " * ". $i. " = ". (6 * $i). "<br>";
		}
		echo "<br><h1>For loop met een functie</h1><br><br>";
		tafelvan(6);
		function tafelvan($tafel) {
		    for ($i = 1; $i <= 10; $i++) {
		        echo "$tafel". " * ". $i. " = ". (6 * $i). "<br>";
		    }
		}
		echo "<br><h1>For loop met for each</h1><br><br>";
		$tafelarray = ["3", "5", "8", "12"];
		foreach ($tafelarray as $value) {
		    for ($i = 1; $i <= 10; $i++) {
		        echo "$value". " * ". $i. " = ". ($value * $i). "<br>";
		    }
		    echo '<br>';
		}
	?>
</body>
</html>