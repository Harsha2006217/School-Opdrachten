<?php


function swap($array){
    $empty_array = [];
    array_push($empty_array, $array[1], $array[0]);
    return "$empty_array[0], $empty_array[1]";

} 


swap([1,2]);
echo "<br>";
swap([3,2]);
echo "<br>";
swap([1,1]);    


?>