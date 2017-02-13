<hr>
Cookies
<hr>
<?php setcookie("visited","",time() - 3600); ?><!-- for unset cookie -->
<?php

	if (!isset($_COOKIE['visited'])) {
		setcookie("visited", "1",time()+86400,"/") or die("Could not set cookie");
		echo "This is your first visit in our webside";
	} else {
		echo "You Are Our Old Visitor";
	}

?>