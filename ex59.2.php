<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$color = array('white','green','red');
	foreach ($color as $c)
	 {
		echo "$c,";
	}
	sort($color);
	echo "<ul>";
     foreach ($color as $color){
   echo "<li>$color</li>";
   }
  echo "</ul>";
	?>

</body>
</html>