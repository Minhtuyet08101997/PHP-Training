<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$x=array(1,2,3,4,5);
	var_dump($x);
	unset($x[3]);
	$x= array_values($x);
	echo '';
var_dump($x)
	?>
</body>
</html>