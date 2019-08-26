<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$color = array('Banana'=>'yellow','Mango'=>'green','Strawberry'=>'bright red','bright red'=>'purple',
	'oranges'=>'oranges','grapefruit'=>'cyan');
	sort($color, SORT_FLAG_CASE );
	foreach ($color as $key => $x_value) {
		echo "Color[".$key."] = ".$x_value."";
		echo "<br>";
	}

	?>
</body>
</html>