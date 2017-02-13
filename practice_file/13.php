
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
	Logical operator
<hr>

<?php

	$a =10;
	$b =20;

/*
* There are three logical operator
* 1. and 	--> only both value is true then it return true
* 2. or 	--> if both value is false then it return false
* 3. xor 	--> only one value have to be true , if both value is true it return false .
* 
* we can right and --> &&
* we can right or --> ||
* 
*/

	if ($a==10 and $b==20) {
		echo "Right";
	} else {
		echo "Wrong";
	}

	//if ($a==10 or $b==20) {
	//	echo "Right";
	//} else {
	//	echo "Wrong";
	//}

	//if ($a==10 xor $b==20) {
	//	echo "Right";
	//} else {
	//	echo "Wrong";
	//}

	//if ($a==10 && $b==20) {
	//	echo "Right";
	//} else {
	//	echo "Wrong";
	//}

	//if ($a==10 || $b==20) {
	//	echo "Right";
	//} else {
	//	echo "Wrong";
	//}

?>
