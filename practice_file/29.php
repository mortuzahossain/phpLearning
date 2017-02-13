<!-- have to download -->

<hr>
Form Required
<hr>

<?php
	$errname = $errmail = $errweb = $errgender = "";
?>

<?php 
	
	$name = $email = $webside = $message = $gender = "";

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

	if (empty($_POST["name"])) {
		$errname = "Name Field Required";
	} else {
		$name = validation($_POST["name"]);
	}
	if (empty($_POST["email"])) {
		$errmail = "Email Field Required";
	} else {
		$email = validation($_POST["email"]);
	}
	if (empty($_POST["webside"])) {
		$errweb = "Webside Field Required";
	} else {
		$webside = validation($_POST["webside"]);
	}
	if (empty($_POST["gender"])) {
		$errgender = "Gender Field Required";
	} else {
		$gender = validation($_POST["gender"]);
	}
	$message 	= validation($_POST["message"]);
	echo $name."<br>";
	echo $email."<br>";
	echo $webside."<br>";
	echo $message."<br>";
	echo $gender."<br>";

	}

	function validation($value)
	{
		$value = trim($value);
		$value = stripcslashes($value);
		$value = htmlspecialchars($value);
		return $value;
	}

?> 
<form accept="" method="post">
	<table>
		<p style="color:red">* Required Field</p>
		<tr>
			<td>Name </td>
			<td><input type="text" name="name">*<?php echo $errname; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email">*<?php echo $errmail; ?></td>
		</tr>
		<tr>
			<td>Webside</td>
			<td><input type="text" name="webside">*<?php echo $errweb; ?></td>
		</tr>
		<tr>
			<td>Message</td>
			<td><textarea name="message" rows="5" cols="25"></textarea></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" value="Male" name = "gender" checked>Male
				<input type="radio" value="Female" name = "gender">Female *<?php echo $errgender; ?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><button type="send">SEND</button></td>
		</tr>
	</table>
</form>
