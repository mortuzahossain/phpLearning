<hr>
Error exception handling
<hr>

<?php

	function numCheck($num)
	{
		if ($num != 5) {
			throw new Exception("Number Is not Five");
		}
		return true;
	}
	try{
		numCheck(2);
		echo "Yes You Give the Write Number";
	}
	catch(Exception $e){
		echo "Error: ". $e->getMessage();
	}

?>