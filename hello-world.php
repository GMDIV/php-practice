
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
		echo NAME . "</br>"; //Will display "James"
		
		$number = 1;
		$number++;  
		echo $number ."</br>"; //2
		$number--;
		$number--;
		$number--;
		echo $number ."</br>"; //-1

		$shapes = array(); //array example 1
		$shapes[0] = "square";
		$shapes[1] = "circle";
		$shapes[2] = "triangle";

		echo $shapes[1]."</br>"; //circle;

		$shapes2 = ["square", "circle", "triangle"]; //array example 2

		echo $shapes2[2]."</br>"; //triangle
		echo count($shapes2)."</br>"; //Gives the number of items in the array (3)

		$lastShape = array_pop($shapes2); //removes the last item in an array and returns the value. In this case that value is being stored within $lastShape. 
		echo $lastShape."</br>"; //triangle
		echo count($shapes2)."</br>";// 2
		echo $lastShape."</br>";// triangle. Calling lastShape doesn't run array_pop again. It just gives the value that was originally returned and assigned to it.
		echo count($shapes2)."</br>"; // 2

		$numbers = [1, 3, 88, 22, 29];
		echo max($numbers)."</br>"; // 88
		echo min($numbers)."</br>"; // 1

		function myFunction() {
			echo "echoing a string from a function"."</br>";

		}
		myFunction(); //run the function, runing the echo

		function multiply($a, $b){
			echo $a * $b;
		}
		multiply(12, 3); //36
	?>
</body>
</html>