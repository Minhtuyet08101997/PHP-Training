<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$temperature = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
	$temp_array = explode(',',$temperature);
	$total_temp = 0;
	$temp_array_length = count($temp_array);
	foreach ($temp_array as $tem) {
		$total_temp= $total_temp + $tem;}
		 echo "Total dale number: ".$total_temp;
		 echo "<br>";
	$avg_high_tem = $total_temp/$temp_array_length;
	echo "Average temperature is: ".$avg_high_tem;
	sort($temp_array);
	echo "<br>List of five lowest temperature :";
	for ($i=0; $i < 5; $i++) 
	{ 
		echo $temp_array[$i].",";
	}
	echo "<br>List of five highest temperatures :";
for ($i=($temp_array_length-5); $i<($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
	?>
</body>
</html>