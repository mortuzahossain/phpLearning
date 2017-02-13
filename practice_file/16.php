<hr>
Conditional Statement
<hr>

<?php
/*
* There are four kind of conditional statement
* 1. if
* 2. if    else
* 3. if    elseif
* 4. if    elseif     else
*/

	$age = 10;
	if ($age >= 18) {
		echo "You have permission to give vote to elect precedent";
	} elseif ($age >=13 and $age <18) {
		echo "You Are only teenager";
	} else {
		echo "You Are a child";
	}

?>