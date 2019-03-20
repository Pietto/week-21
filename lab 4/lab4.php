<!DOCTYPE html>
<html>
<head>
	<title>lab 4</title>
</head>
<body>
	<?php
		$string = 'Yahtzee';
		$boolean = true;
		$integer = 0;

		if($string == 'Yahtzee'){
			if($boolean == true){
				if($integer >15 && $integer <30){
					echo 'Je wilt Yathzee spelen want je hebt tussen de 15 en 30 minuten tijd';
				}else{
					echo 'Je wilt Yathzee spelen want dat vindt je gewoon leuk';
				}
			}elseif($boolean == false){
				if($integer >100){
					echo 'Je wiltg een Yathzee spelen want je wilt meer dan 100x met een dobbelsteen gooien';
				}else{
					echo 'Je wilt geen Yathzee spelen want je wilt minder dan 100 punten halen';
				}
			}
		}elseif($string == 'Monopoly'){
			if($boolean == true){
				if($integer == 1){
					echo 'Je wilt Monopoly spelen want je houd er van om iedereen blut te maken';
				}else{
					echo 'Je wilt Monopoly spelen want je houd er van om iedereen blut te maken';
				}
			}elseif($boolean == false){
				if($integer == 2 || $integer > 120){
					echo 'Je wilt Monopoly niet spelen want je hebt geen zin in een spel van 2 uur';
				}else{
					echo 'Je wilt Monopoly niet spelen want je houd niet van hotels';
				}
			}
		}elseif($string == 'Schaken'){
			if($boolean == true){
				if($integer == 2){
					echo 'Je wilt Schaken want je vindt zwart en wit leuk';
				}else{
					echo 'Je wilt Schaken want je denkt slimmer dan mij te zijn';
				}
			}elseif($boolean == false){
				if($integer == -1){
					echo 'Je wilt echt niet Schaken';
				}else{
					echo 'Je wilt gewoon niet Schaken';
				}
			}
		}




	?>
</body>
</html>