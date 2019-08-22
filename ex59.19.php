<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$color = array ("color"=>array("a"=>"Red","b"=>"Gren","c"=>"White"),"number"=>array(1,2,3,4,5),"holes"=>array("First",5=>"Second","Third"));
	echo $color["color"]["a"]."<br>";
	echo $color["holes"][5]."<br>";
		?>
</body>
</html>