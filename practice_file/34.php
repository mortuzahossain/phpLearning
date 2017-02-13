<hr>
File Open Read And Close
<hr>

<?php

	$openfile = fopen("file.txt", "r") or die("File Not Found");
	// echo fread($openfile, filesize("file.txt"));
	// echo fgets($openfile, filesize("file.txt"));
	// echo fgetc($openfile);

	// while (!feof($openfile)) {
	// 	// echo fgets($openfile)."<br>";//per line read
	// 	echo fgetc($openfile)."<br>";//per char read
	// }
	fclose($openfile);

?>