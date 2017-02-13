<hr>
File Upload --- Image
<hr>
<?php
	
	if (isset($_FILES['image'])) {
		$filename = $_FILES['image']['name'];
		$filetmp  = $_FILES['image']['tmp_name'];
		move_uploaded_file($filetmp, "img/".$filename);
		echo "Image Upload Successfully";
	}

?>
<form method="POST" action="" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="submit" value="submit">
</form>

important 