<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$a=range(11, 20);
	shuffle($a);
	//echo $a[0];
	foreach ($a as $b) {
		echo $b."<br>";

	}
	?>
</body>
</html>