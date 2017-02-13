<hr>
Form validation
<hr>

<form accept="" method="post">
	<table>
		<tr>
			<td>Name </td>
			<td><input type="text" name="name" required="1"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" required="1"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" required="1"></td>
		</tr>
		<tr>
			<td>Message</td>
			<td><textarea name="message" rows="5" cols="25"></textarea></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" value="Male" name = "gender" checked>Male
				<input type="radio" value="Female" name = "gender">Female
			</td>
		</tr>
		<tr>
			<td><button type="send">SEND</button></td>
		</tr>
	</table>
</form>

<?php 

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

	$name  		= validation($_POST["name"]);
	$email 		= validation($_POST["email"]);
	$password 	= validation($_POST["password"]);
	$message 	= validation($_POST["message"]);
	$gender 	= $_POST["gender"];

	echo $name."<br>";
	echo $email."<br>";
	echo $password."<br>";
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

