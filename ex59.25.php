<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	
function entity_sort($my_array) {
    $total = count($my_array);
    for ($i=0;$i<$total;$i++) {
        if ($my_array[$i]{0} == '&') {
            $my_array[$i] = $my_array[$i]{1}.$my_array[$i];
        } else {
            $my_array[$i] = $my_array[$i]{0}.$my_array[$i];
        }
    }
    sort($my_array);
        for ($i=0;$i<$total;$i++) {
        $my_array[$i] = substr($my_array[$i],1);
    }
        return $my_array;
    }
$arr = array(" ","&", "<");
print_r(entity_sort($arr));
?>
</body>
</html>