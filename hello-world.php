
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?<?php echo "Hello World in PHP" ?></title>
</head>
<body>
	<?php

		echo "<h1>Hello World</h1>";
		echo "<h2>Hello World</h2>";
		echo strrev("Reversed String") . "</br>"; //displays a string in reverse order 
		//   . joins two variables/strings/values. </br> is neccisary for line breaks  
		echo strtoupper("uppercase string </br>"); //Capitalizes all letters in a string
		echo strtolower("LOWERCASE STRING is Turned Into all lower CASE LeTters. </br>");

		$hats = 8;
		$name = "Jake";
		echo "$name has $hats hats </br>";

		define("NAME", "James"); //constants can not be changed, unlike $ variables
		echo NAME; //Will display "James"
		
	?>
</body>
</html>