<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Test</title>
</head>
<body>
<table border=1>
	<?php
		$contents = file_get_contents("test.txt");
		$resultset = explode(";", $contents);
		foreach($resultset as $name){
			echo "<tr> <th> name: " . $name . "</th> <th> question 1: " . $question1 . "</th> <th> question 2: " . $question2 . "</th> <th> question 3: " . $question3 . "</th> <th> question 4: " . $question4 . "</th> <th> question 5: " . $question5 . "</th> <th> score: " . $score . "</th> </tr>";
			
			echo "<br>";
		}
		
	?>
	</table>
</body>
</html>