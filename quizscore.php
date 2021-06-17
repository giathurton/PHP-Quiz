<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Homework</title>
</head>
<body>
<?php
	echo "Congrats, " . $_GET['fname'] . " you completed the quiz!";
	$score=0;
	$question1= $_POST['checkbox'];
	$question2= $_POST['radio'];
	$question3= $_POST['drop'];
	$question4= $_POST['checkbox2'];
	$question5= $_POST['radio2'];
	
	
	/*if($question1='Billings'){
	score=score+1;
	}
	
	if($question2='Long Island'){
	score=score+1;
	}
	
	if($question3='Big Island'){
	score=score+1;
	}
	
	if($question4='Alaska'){
	score=score+1;
	}
	
	if($question5='South America'){
	score++;
	}
	*/
	
	echo"<br>You scored " . $score . " out of 5";
	
	echo"<br>Your answers: <br>";
	echo"Capital of Montana: " . $_GET['checkbox'];
	echo"<br>NOT a borough of NYC: " . $_GET['radio'];
	echo"<br>Biggest island in Hawaii: " . $_GET['drop'];
	echo"<br>Largest state in the US: " . $_GET['checkbox2'];
	echo"<br>Continent the country Suriname is on: " . $_GET['radio2'];
	
?>
</body>
</html>