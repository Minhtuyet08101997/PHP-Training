<?php
$fruits = array("d"=>"lemon", "a"=>"orange","b"=>"banana","c"=>"apple");
print_r($fruits);
array_walk($fruits, create_function('&$val', '$val = trim($val);')); 
print_r($fruits);
echo "<br>";


?>