<hr>
File Create And Write
<hr>

<?php

	$createfile = fopen("new.txt", "w");
	$text = "Hello File";
	fwrite($createfile, $text);
	fclose($createfile);

?>