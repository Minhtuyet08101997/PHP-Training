<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đổi màu ký tự đầu tiên </title>
</head>
<body>
	<?php
	$text="Life, is a colorful picture, the smlle is a beautyful color";
	$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);  
		echo $text;
	?>
</body>
</html>