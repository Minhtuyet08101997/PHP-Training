<?php
$colors = array( "Red", "Green", "Black", "White"); 
print_r($colors);

$lower_colors = array_map('strtolower', $colors);
print_r($lower_colors);
$upper_colors = array_map('strtoupper', $colors);
print_r($upper_colors);
?>
