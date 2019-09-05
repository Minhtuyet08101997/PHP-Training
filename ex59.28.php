<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$myArray=array("d"=>1, "f"=>2, "b"=>3, "c"=>4, "e"=>2);
	rsort($myArray);
	foreach ($myArray as $key => $x_value) {
		 echo "[".$key."]=> $x_value<br>";
	}
	?>
</body>
</html>