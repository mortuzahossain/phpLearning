<hr>
Advance Filtering
<hr>

<?php
	$intnum 	= 600;
	$min 		= 1;
	$max 		= 500;

	if (filter_var($intnum,FILTER_VALIDATE_INT,array("options" => array("min_range" => $min , "max_range" => $max))) === false) {
		echo "It is Not valid";
	} else {
		echo "It is Valid";
	}

?>