<?php


function  telGroteGetallen($array){
    $test = 0;
    foreach($array as $a){
        if($a > 10){
            $test += $a;
        }
    }
    return $test." <br>";
}
$array = [11,11,5,2,12,6,7,8,1,10,9];
echo telGroteGetallen( [10,20,20] );	
echo telGroteGetallen( [9, 10, 11] );	
echo telGroteGetallen($array);

?>