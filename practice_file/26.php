
<hr>
$_REQUEST AND $_POST
<hr>

<!-- 
<form action="" method="get">
	Username : <input type="text" name="username" placeholder="Enter User Name" required="1">
	<input type="submit" name="SEND">
</form> -->

<!-- if we use same page to do the work then there are no need for acrion -->

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	Username : <input type="text" name="username" placeholder="Enter User Name" required="1">
	<input type="submit" name="SEND">
</form>

<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST['username']; // use of request and post are same 
		//$username = $_REQUEST['username']; // nothing will be change


		echo "$username";

	}

?>