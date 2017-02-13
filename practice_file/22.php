<hr>
Array
<hr>

<?php 
	
	// $x = array(5,3,6,9,8);
	// $count = count($x);

	// for ($i=0; $i < $count; $i++) { 
	// 	echo "$x[$i]<br>";
	// }

	// Associative array

	// $age = array(
	// 	"Karim" => "25",
	// 	"Rahim" => "20",
	// 	"Ratul" => "22",
	// 	"Mortuza" => "19",
	// 	"Mahmud" => "45"
	// );

	// foreach ($age as $key => $value) {
	// 	echo "Name : " .$key. ", Age :" .$value;
	// 	echo "<br>";
	// }

	// Multi Dimensional Array

	$x = array(
		array("Apple","150000","500"),
		array("Asus","45000","200"),
		array("HP","55000","300")
	);

	// echo $x[0][0] ."<br>";//it will print Apple
	// echo $x[1][0] ."<br>";//it will print Asus
	// echo $x[2][0] ."<br>";//it will print HP


	// for ($i=0; $i < count($x); $i++) { 
	// 	echo "Row Number $i";
	// 	echo "<ul>";
	// 	for ($j=0; $j < count($x[$i]); $j++) { 
	// 		echo "<li>".$x[$i][$j] ."</li>";
	// 	}
	// 	echo "</ul>";
	// }

?>