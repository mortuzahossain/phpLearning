<hr>
Change Case
<hr>

<?php
	if (isset($_POST['text'])) {
		$txt = $_POST['text'];
		// echo $txt;
		// echo mb_strtoupper($txt);//uppercase all your input
		// echo strtolower($txt);//change it lower case
		//echo ucfirst($txt);//first letter of the line will be upper case
		echo ucwords($txt);

	}
?>

<form action="" method="post">
	<input type="text" name="text">
	<input type="submit" value="Submit">
</form>