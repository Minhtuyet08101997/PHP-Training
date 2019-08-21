<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$min_max=array("abcd","abc","de","hjjj","g","wer");
	$new_arry = array_map('strlen', $min_max);
	echo "The shortest array length is ".min($new_arry);
	echo "<br>The longest array length is ".max($new_arry);

	?>
</body>
</html>