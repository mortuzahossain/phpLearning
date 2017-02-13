<hr>
Strip Whitespace
<hr>

<?php

	if (isset($_POST['text'])) {
		global $txt;
		$txt = $_POST['text'];
/*		echo trim($txt);
//it will prevent you taking white space
*/
echo trim($txt,".");
//besides we can use ltrim() or ltrim() to erase them 
	}

?>

<form action="" method="post">
	<input type="text" name = "text">
	<input type="submit" value="Submit">
</form>

