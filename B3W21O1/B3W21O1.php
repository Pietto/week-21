<!DOCTYPE html>
<html>
<head>
	<title>B3W21O1</title>
	<link rel="stylesheet" type="text/css" href="B3W21O1.css">
</head>
<body>
	<?php
		date_default_timezone_set('America/Chicago');
		$time = date("H:i");

		if($time>=6 && $time<=12){
		    $image = "morning";
		    echo "<div class='container' id='morning'><h1>good morning!<br> the time is $time</h1></div>";
		}elseif($time>=18 && $time<=24){
		    $image = "evening";
		    echo "<div class='container' id='evening'><h1>good evening!<br> the time is $time</h1></div>";
		}elseif($time>=12 && $time<=18){
		    $image = "afternoon";
		    echo "<div class='container' id='afternoon'><h1>good afternoon!<br> the time is $time</h1></div>";
		}elseif($time>=0 && $time<=6){
		    $image = "night";
		    echo "<div class='container' id='night'><h1>good night!<br> the time is $time</h1></div>";
		}
	?>
</body>
</html>