<?php
$arr1 = array(

	'geeks', // [0]
	'for', // [1]
	'geeks' // [2]

);

// remove item at index 1 which is 'for'
unset($arr1[1]);

// Print modified array
var_dump($arr1);

// Re-index the array elements
$arr2 = array_values($arr1);

echo "<br>";

// Print re-indexed array
var_dump($arr2);
?>
