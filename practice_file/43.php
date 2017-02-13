<hr>
PHP explode() & implode() Function
<hr>

<?php

//explode(delimiter, string);
/*	$mystr = "I am Learning PHP";
	// print_r(explode(" ", $mystr));
	$str = explode(" ", $mystr);
	echo $str[0];*/

// implode(glue, pieces);
/*	$mystr = array("I","Am","Learning","PHP");
	echo implode(" ", $mystr);*/

	
	$mystr = array("I","Am","Learning","PHP");
	echo implode("-", $mystr);

?>