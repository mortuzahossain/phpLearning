<hr>
Filters
<hr>

<!-- <table>
	<tr>
		<td>Filter Name</td>
		<td>Filter ID</td>
	</tr>
	<?php
		foreach (filter_list() as $id => $filter) {
			echo "<tr><td>".$filter."</td><td>".filter_id($filter)."</td></tr>";
		}
	?>
</table> -->

 
<!--  <?php
 	
 	$str = "<h2>This Is A Heading</h2>";
 	$newstr = filter_var($str,FILTER_SANITIZE_STRING);//this will errage the html tag from the string
 	echo $newstr;
 
 ?> -->

<!-- 
<?php

	$int = 50.5;
	if (filter_var($int,FILTER_VALIDATE_INT)) {//this will check your input is int  or not
		echo "This Is int type Data";
	} else {
		echo "This Is Not int Type Data";
	}

?> -->

<!-- 
<?php

	$ip = "127.0.0.1";
	if (filter_var($ip,FILTER_VALIDATE_IP)) {//this will check your input is IP or not
		echo "Input tyoe is IP Address";
	} else {
		echo "Input Type is not IP";
	}

?> -->

<!-- <?php

	$email = "mortuzahossain1997@gamil.com";
	if (filter_var($email,FILTER_VALIDATE_EMAIL)) {//this will check your input is email or not
		echo "This Is Email type Data";
	} else {
		echo "This Is Not Email Type Data";
	}

?> -->

<!-- <?php

	$url = "http://www.mortuzabaust.wordpress.com";
	if (filter_var($url,FILTER_VALIDATE_URL)) {//this will check your input is web address or not
		echo "This Is Web address type Data";
	} else {
		echo "This Is Not Web Address Type Data";
	}

?> -->