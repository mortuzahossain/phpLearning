<?php
	session_start(); 
?>

<hr>
Session
<hr>

<?php
	$_SESSION['username'] = "Mortuza";
	$_SESSION['password'] = "123";

	echo "Username is : ". $_SESSION['username'] .".<br>";
	// session_unset();//it will produce an error and password will be unset
	echo "Password is : ". $_SESSION['password'] .".<br>";
	session_destroy();//after finishing action we should destroy the session for good programming practice
?>

