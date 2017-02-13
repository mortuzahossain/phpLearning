
Operator In PHP
<hr>
01. Arithmetic Operator
02. Assignment Operator
03. Comparison Operator
04. Increment/Decrement Operator
05. Logical operator
06. String operator
07. Array operator
<hr>
	Array operator
<hr>

<?php
	$x = array(
			"a" => "Dhaka",
			"b" => "Joypurhat"
		);
	
	$y = array(
			"c" => "Rajshahi",
			"d" => "Dinajpur"
		);

	// union operator
	var_dump($x + $y);
	// equality operator
	//var_dump($x == $y);
	// identical operator
	//var_dump($x === $y);
	// nonidentical operator
	//var_dump($x !== $y);
	// not equal 
	//we can write it via two way
	// 1. !=
	// 2. <>
	//var_dump($x <> $y);
	//var_dump($x != $y);

?>
