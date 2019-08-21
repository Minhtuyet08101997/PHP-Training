<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	echo "a) Ascending order sort by value <br>";
	$a = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
     asort($a);
     foreach ($a as $x => $x_value) {
    echo  "Age of " . $x . " is: " . $x_value; 
    echo "</br>";
        }
    echo "b) Ascending order sort by Key<br>";
    $b = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
    ksort($b);
    foreach ($b as $key => $value) {
    	echo "key = $value<br>";
    }
    echo "c) Descending order sorting by value <br>";
      $c = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
    arsort($c);
    foreach ($c as $c => $c_value) {
    	echo "key=".$c.", value = $c_value<br>";
    }
    echo "d) Descending order sorting by key <br>";
      $d = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
    krsort($d);
    foreach ($d as $key => $d_value) {
    	echo "key = $d_value";
    echo "<br>"; }
    ?>
</body>
</html>