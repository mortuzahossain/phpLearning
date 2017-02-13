<hr>
Variable scope 
<hr>

<?php

//if we wants to use outer scope variable in a function  then we have to declare it as global 

	$x = 5;

	function fn1()
	{
		global $x;
		$a = 10;
		echo $a ."<br>";
		echo $x ."<br>";
	}
	function fn2()
	{
		$b = 15;
		echo $b."<br>";
	}


	fn1();
	fn2();


?>