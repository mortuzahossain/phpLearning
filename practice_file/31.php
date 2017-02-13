<hr>
	Date And Time
<hr>

<?php
	echo date("d-m-Y")."<br>";
	echo "Default Time : ".date("h:i:sa")."<br>";
	echo date_default_timezone_get()."<br>";
	date_default_timezone_set('Asia/Dhaka');
	echo "Bangladeshi Time : ".date("h:i:sa");
?>