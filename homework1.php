<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Homework</title>
	<meta name="author" content="Gia Thurton">
	<meta name="description" content="This is homework 1 part A. It is a 5 question quiz that will be automatically scored and record the results of all quiz takers">
	<style> 
	body {background-color: #DAF7A6;} 
	h1 {color: #334E04}
	</style>
	
</head>
<body class="body">

	<h1> Homework 1- Gia Thurton </h1>
	<h3> Geography Quiz </h3>
	
	<form method="GET" action="quizscore.php">
	<p> Hello, Please input your name, take the quiz, and press submit </p>
		<label for="name">Name: </label>
		<input id="name" name="fname" type="text">
		<p>
		<label class="label"> 1) What is the capital of Montana? </label>
		<ul class="check-list">
		<li><input type="checkbox" name="checkbox" value="Billings">Billings</li>
		<li><input type="checkbox" name="checkbox" value="Helena">Helena</li>
		<li><input type="checkbox" name="checkbox" value="Missoula">Missoula</li>
		<li><input type="checkbox" name="checkbox" value="Great Falls">Great Falls</li>
		</ul>
		</p>
		
		<p>
		<label class="label"> 2) Which is NOT a borough of New York City? </label> <br>
		<input type="radio" id="option1" name="radio" value="Brooklyn"> Brooklyn <br>
		<input type="radio" id="option1" name="radio" value="Manhattan"> Manhattan <br>
		<input type="radio" id="option1" name="radio" value="Queens"> Queens <br>
		<input type="radio" id="option1" name="radio" value="Long Island"> Long Island
		</p>
		
		<p><label for="dropdown"> 3) What is the biggest island in Hawaii?</label><br>
		<select id="dropdown" name="dropdown">
			<option value="drop" name="drop">Oahu</option>
			<option value="drop" name="drop">Maui </option>
			<option value="drop" name="drop">Big Island</option>
		</select>
	</p>
	
	<p>
		<label class="label"> 4) What is the largest state in the US? </label>
		<ul class="check-list">
		<li><input type="checkbox" name="checkbox2" value="Texas">Texas</li>
		<li><input type="checkbox" name="checkbox2" value="Florida">Florida</li>
		<li><input type="checkbox" name="checkbox2" value="Alaska">Alaska</li>
		<li><input type="checkbox" name="checkbox2" value="California">California</li>
		</ul>
		</p>
		
		<p>
		<label class="label"> 5) Which continent is the country Suriname on? </label> <br>
		<input type="radio" id="option1" name="radio2" value="South America"> South America <br>
		<input type="radio" id="option1" name="radio2" value="Asia"> Asia <br>
		<input type="radio" id="option1" name="radio2" value="Europe"> Europe <br>
		<input type="radio" id="option1" name="radio2" value="Africa"> Africa
		</p>
		
		<input type="submit" value="Submit" class="button">
		</p>
		
		
		</form>
</body>