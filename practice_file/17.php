<hr>
Switch Statement
<hr>
<?php 
	
	$you_know = "C";

	switch ($you_know) {
		case 'C':
			echo "Great you Know C";
			break;
		case 'JAVA':
			echo "Great you Know JAVA";
			break;
		case 'C#':
			echo "Great you Know C#";
			break;
		case 'python':
			echo "Great you Know python";
			break;
		
		default:
			echo "You Don't Know Programing. Thats Bad";
			break;
	}

?>