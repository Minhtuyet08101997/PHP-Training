<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
$fruit = array ('Banana'=>'yellow','Mango'=>'green','Strawberry'=>'bright red','bright red'=>'purple',
	'oranges'=>'oranges','grapefruit'=>'cyan');
	print_r(array_keys($fruit));
	$max_key = max( array_keys( $fruit)); 
   echo "Largest key in an array is ".$max_key."\n";
	?>
</body>
</html> 