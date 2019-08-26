<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php
$sorted_array = array(
	'a' => 'aaaaa',
	'b' => 'bbbbb',
	'c' => 'ccccc',
	'd' => 'ddddd',
	'e' => 'eeeee',
	'f' => 'fffff',
	'g' => 'ggggg',
);

$shuffled_array = array();

$keys = array_keys($sorted_array);
shuffle($keys);

foreach ($keys as $key)
{
	$shuffled_array[$key] = $sorted_array[$key];
}

print_r($shuffled_array);
?>
</body>
</html>